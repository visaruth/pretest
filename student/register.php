<?php require '../config.php'; ?>
<?php $titleName = 'สมัครสมาชิก | Annop Pretest';?>
<?php require $headerStudentFile; ?>

<div style="background-color:white">
	<br><br>
	<div class="container">
    <form class="form-horizontal" action="#" onsubmit="return false;">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">ชื่อจริง</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control normal" id="firstname" name="firstname" placeholder="ชื่อจริง (ภาษาไทย)" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="lname" class="col-sm-3 control-label">นามสกุล</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control normal" id="lastname" placeholder="นามสกุล (ภาษาไทย)" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="citizenID" class="col-sm-3 control-label">รหัสประชาชน</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="citizenID" placeholder="ตัวเลข 13 หลักไม่มีตัวอักษรหรือสัญลักษณ์" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="citizenID" class="col-sm-3 control-label">ปี คศ.-เดือน-วันเกิด</label>
                    <div class="col-sm-9">
                        <input type='text' class="form-control normal" id="birthday" required placeholder="yyyy-mm-dd (ปี คศ.-เดือน-วัน เช่น 1995-12-31)"/>
                    </div>
                     <script type="text/javascript">
                        $(function () {
                            $('#birthday').datetimepicker({
                                minView: 2,
                                format: 'yyyy-mm-dd',
                                defaultDate: new Date(1999, 11, 05),
                                onSelect: function(dateText, inst) {
                                    console.log(dateText)
                                    var parent = $('#birthday').parent();
                                    parent.addClass('has-success has-feedback');
                                    parent.append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> ');
                                }
                            });
                        });
                    </script>
                </div>
                <div class="form-group">
                    <label for="school" class="col-sm-3 control-label">โรงเรียน</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control normal" id="schoolName" placeholder="ชื่อโรงเรียน (ภาษาไทย)" required />
                    </div>
                </div>
                 <div class="form-group">
                    <label for="phoneNo" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control normal" id="phoneNo" placeholder="(ตัวเลขเท่านั้น)" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-MAIL</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control normal" id="email" required />
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username"  required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control normal" id="password" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpassword" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="cpassword" required />
                    </div>
                </div>

                <hr />
								<div class="col-xs-6 col-md-6">
									<button type="button" class="btn btn-danger" style="width:100%" onclick="cancel()">ยกเลิก</button>
								</div>
								<div class="col-xs-6 col-md-6">
									<button type="button" class="btn btn-warning" style="width:100%" id="send" onclick="submitReg()">สมัครสมาชิก</button>
								</div>

                <br><br>
            </div>
        </form>
	</div>
</div>

<script>
    $('input').keydown(function (e) {
        if (e.which === 13)
        {
            var index = $('input').index(this) + 1;
            $('input').eq(index).focus();
        }
    });

    $('.normal').change(function() {
        var parent = $(this).parent();
        if($(this).val() != '')
        {
            parent.addClass('has-success has-feedback');
            parent.append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> ');
        }
        else
        {
            parent.removeClass('has-success has-feedback');
            parent.find('span').remove();
        }

    })

    $('#citizenID').change(function () {
        $.ajax({
            url: 'http://localhost/pretest/api/register/checkCitizenID.php?citizenID='+$(this).val(),
            method: "GET",
            dataType: "json",
            success: function (response)
            {
                var parentCitizenID = $('#citizenID').parent();
                if(response.status == true)
                {
                    parentCitizenID.removeClass('has-error');
                    parentCitizenID.addClass('has-success has-feedback');
                    parentCitizenID.find('span').remove();
                    parentCitizenID.find('label').remove();
                    parentCitizenID.append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
                    $('#send').prop("disabled", false);
                }
                else
                {
                    parentCitizenID.removeClass('has-success');
                    parentCitizenID.addClass('has-error has-feedback');
                    parentCitizenID.find('span').remove();
                    parentCitizenID.find('label').remove();
                    parentCitizenID.append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
                    parentCitizenID.append('<label class="text-danger" aria-hidden="true">'+response.message+'</label>');
                    $('#send').prop("disabled", true);
                }
            }
        });
     });

    $('#username').change(function () {
        $.ajax({
            url: 'http://localhost/pretest/api/register/checkUsername.php?username='+$(this).val(),
            method: "GET",
            dataType: "json",
            success: function (response)
            {
                var parentUsername = $('#username').parent();
                if(response.status == true)
                {
                    parentUsername.removeClass('has-error');
                    parentUsername.addClass('has-success has-feedback');
                    parentUsername.find('span').remove();
                    parentUsername.find('label').remove();
                    parentUsername.append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
                    $('#send').prop("disabled", false);
                }
                else
                {
                    parentUsername.removeClass('has-success');
                    parentUsername.addClass('has-error has-feedback');
                    parentUsername.find('span').remove();
                    parentUsername.find('label').remove();
                    parentUsername.append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
                    parentUsername.append('<label class="text-danger" aria-hidden="true">'+response.message+'</label>');
                    $('#send').prop("disabled", true);
                }
            }
        });
    });
    $('#cpassword').change(function(){
        var pass = $('#password').val();
        var cpass = $('#cpassword').val();

        var patentCpassword = $('#cpassword').parent();
        if(pass == cpass)
        {
            patentCpassword.removeClass('has-error');
            patentCpassword.addClass('has-success has-feedback');
            patentCpassword.find('span').remove();
            patentCpassword.append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        }
        else
        {
            patentCpassword.removeClass('has-success');
            patentCpassword.addClass('has-error has-feedback');
            patentCpassword.find('span').remove();
            patentCpassword.append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
        }

    });
function submitReg() {
    //$('#send').prop("disabled", true);

    var data = {
        firstname : $('#firstname').val(),
        lastname : $('#lastname').val(),
        citizenID : $('#citizenID').val(),
        birthday : $('#birthday').val(),
        schoolName : $('#schoolName').val(),
        phoneNo : $('#phoneNo').val(),
        email : $('#email').val(),
        username : $('#username').val(),
        password : $('#password').val(),
    }
    console.log(data)

    $.ajax({
        url: 'http://localhost/pretest/api/register/submitRegister.php',
        type: "POST",
        data: data,
        dataType: "json",
        success: function(response) {
            console.log(response);
            if(response.status == true)
            {
                sweetAlert({
                    title: 'สำเร็จ',
                    text: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                    type: 'success',
                }, function() {
                    window.location='<?php echo $studentURL;?>';
                });
            }
            else
            {
                sweetAlert({
                    title: "เกิดข้อผิดพลาด!",
                    text: response.message,
                    type: "error"
                }, function() {
                    $('#send').prop("disabled", false);
                });

            }
        },
        error: function(jqXHR, exception){
            if (jqXHR.status === 0)
            {
                sweetAlert({
                    title: 'สำเร็จ',
                    text: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                    type: 'success',
                }, function() {
                    window.location='<?php echo $studentURL."/login.php";?>';
                });
            }
            else
            {
                var msg = null;
                if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }

                sweetAlert({
                    title: "เกิดข้อผิดพลาด!",
                    text: msg,
                    type: "error"
                }, function() {
                    $('#send').prop("disabled", false);
                });
            }
        }
    });
}
function cancel(){
	swal({
		title: "คำเตือน",
		text: "คุณต้องการยกเลิกใช่หรือไม่?",
		type: "warning",
		showCancelButton: true,
		cancelButtonText: "ไม่",
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "ใช่",
		closeOnConfirm: false
	},
	function(){
		window.location = 'login.php';
	});
}
</script>

<?php require $footerStudentFile; ?>
