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

		.btn:hover {
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
#d1, #d2
{
    display:inline;
}

</style>
<div style="background-color:white">
	<br><br>
	<div class="container" style="">
		<form class="form-horizontal" role="form" href="#" autocomplete="off">
            <center>
                <div class="form-group">
                    <label  class="col-sm-4 control-label">รหัสประจำตัวประชาชน</label>
                    <div class="col-sm-5">
                        <input type="text" maxlength="13" class="form-control normal" id="citizenID" name="citizenID" required />
                    </div>
					<div class="col-sm-3"></div>
                </div>


                <div class="form-group">
                    <label  class="col-sm-4 control-label">รหัสผ่าน</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control normal" id="password" name="password" required />
                    </div>
                </div>
				<div class="form-group">
				<div class="col-sm-3"></div><div class="col-sm-6" style="text-align: right;"><a id="forget" href = "#" >ลืมรหัสผ่าน</a> | <a href = "#" id="reg" >สมัครสมาชิก</a></div>
				</div>
                <button id="loginbtn" type="button" style=" background-color: #fc4343; color:white;" class="btn" onclick="login();"> ลงชื่อเข้าใช้ </button><br><br>
				<!--button type="button" style=" background-color: #28449b; color:white;" class="btn"> เข้าสู่ระบบด้วย Facebook </button--><br><br>
            </center>
        </form>
	</div>
</div>
<div id="space">

</div>
<div class="navbar " style="background-color:white;">
    <div class="container" style="text-align:center;">
		<h5 id="d1" style="color:#eb8948">ติอต่อสอบถามเพิ่มเติม </h5><h5 id="d2" > Line: @veoonline</h5><br>

		<h5 id="d1" style="color:#eb8948">การสมัครเรียน และเข้าเรียน </h5><h5 id="d2" > Tel: 092-247-2601</h5>


    </div>


  </div>
  <script>
    function login(){
      id = document.getElementById('citizenID').value;
      pass = document.getElementById('password').value;
      if()
      swal(id+pass);
    }
  </script>
<?php require $footerStudentFile; ?>
