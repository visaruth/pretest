<?php require '../config.php'; ?>
<?php $titleName = 'เข้าสู่ระบบ | Annop Pretest';?>
<?php require $headerStudentFile; ?>
<style>
@media screen and (orientation: portrait) {

}
@media screen and (orientation: landscape) {
  #space{
    height: 100px;
  }
}
#main-container {
            background-color: white;
        }
        .form-control{
			border: 2px solid #cecdcd;
			border-radius: 0px;
		}

		#btn:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
#forget {
    color: #636363;
}

#forget:hover {
    color:black;
}

#forget:active {
    color: #f1f1f1;
}
#reg {
    color: #eb8948;
}

#reg:hover {
    color: #f16101;
}

#reg:active {
    color: #ffe4a1;
}
</style>
<?php
if(!empty($_POST))
    {
        //$username = $_POST['username'];
        $password = md5($_POST['password']);
        $citizenID = $_POST['citizenID'];
        $db = getDatabase();
        try
        {
            $db = getDatabase();
            $sql = 'SELECT
                        *
                    FROM
                        Student
                    WHERE
                        password = :password AND
                        citizenID = :citizenID';
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':citizenID', $citizenID);
            $stmt->execute();
            if($stmt->rowCount() == 1)
            {
              $result = $stmt->fetchAll();
                $cookie_name = "aj-annop-user";
                $cookie_value = $result[0]['username'];
                setcookie($cookie_name, $cookie_value, time() + (86400), "/");
                $cookie_name = "aj-annop-cid";
                $cookie_value = $result[0]['citizenID'];
                setcookie($cookie_name, $cookie_value, time() + (86400), "/");

                echo '<script> window.location= "main.php"</script>';
                exit();
            }
            else
            {
                echo '<script src="'.$assets_folder.'/js/plugins/sweetalert/sweetalert.min.js"></script>';
                echo '<script>sweetAlert("ผิดพลาด", "รหัสประจำตัวประชาชน หรือ Password ไม่ถูกต้อง!", "error");</script>';
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    else
    {
        $cookie_name = "aj-annop-user";
        setcookie($cookie_name, '', time() - (86400),"/");
        $cookie_name = "aj-annop-cid";
        setcookie($cookie_name, '', time() - (86400),"/");
    }
?>
<div style="background-color:white">
	<br><br>
	<div class="container" style="">
		<form class="form-horizontal" role="form" href="login" method="post" autocomplete="off">
            <center>
                <div class="row form-group">
                    <label  class="col-md-4 control-label">รหัสประจำตัวประชาชน</label>
                    <div class="col-md-5">
                        <input type="text" maxlength="13" class="form-control normal" id="citizenID" name="citizenID" required />
                    </div>
                </div>
                <div class="row form-group ">
                    <label  class="col-md-4 control-label">รหัสผ่าน</label>
                    <div class="col-md-5">
                      <div class="input-group">
                          <input type="password" class="form-control normal" id="password" name="password" required />
                          <div class="input-group-btn">
                            <button class="btn" type="button" onclick="changeEye()" style="border-radius: 0px;">
                              <i id="iconEye"  class="glyphicon glyphicon-eye-open" style="padding-top:1px;"></i>
                            </button>
                          </div>
                      </div>
                    </div>
                </div>
				<div class="form-group">
				<div class="col-sm-3"></div><div class="col-sm-6" style="text-align: right;"><a id="forget" href = "#" onclick="forgetpass();">ลืมรหัสผ่าน</a> | <a href = "register.php" id="reg" >สมัครสมาชิก</a></div>
				</div>
                <button id="btn" type="summit" style=" background-color: #fc4343; color:white; border-radius:0px;" class="btn" > ลงชื่อเข้าใช้ </button><br><br>
				<!--button type="button" style=" background-color: #28449b; color:white;" class="btn"> เข้าสู่ระบบด้วย Facebook </button--><br><br>
            </center>
        </form>
	</div>
</div>
<div id="space">

</div>
<script>
  function changeEye(){
    if(document.getElementById("password").type == "password"){
      document.getElementById("password").type = "text";
      document.getElementById("iconEye").setAttribute("class", "glyphicon glyphicon-eye-close");
      document.getElementById("password").focus();
    }else{
      document.getElementById("password").type = "password";
      document.getElementById("iconEye").setAttribute("class", "glyphicon glyphicon-eye-open");
      document.getElementById("password").focus();
    }
  }
  function forgetpass(){
    swal({
      title: "ขออภัย",
      text: "ส่วนนี้ยังไม่เปิดให้บริการ",
      type: "warning",
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "ตกลง",
      closeOnConfirm: false
    });
  }
</script>
<?php require $footerStudentFile; ?>
