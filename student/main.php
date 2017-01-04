<?php require '../libs/precheck.php'; ?>
<?php require '../config.php'; ?>
<?php $titleName = 'เข้าสู่ระบบ | Annop Pretest';?>
<?php require $headerStudentFile; ?>
<?php require '../libs/navStudent.php'; ?>

<?php
$cookie_name = 'aj-annop-user';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<style>
  body{
    background-color: #E0E0E0;
  }
</style>
<?php require $footerStudentFile; ?>
