<?php
date_default_timezone_set("Asia/Bangkok");
$titleName = '';
$rootURL = 'http://localhost';
	$fullURL = 'http://localhost/pretest';
	$adminURL = $fullURL.'/admin';
	$studentURL = $fullURL.'/student';
	$root = $_SERVER['DOCUMENT_ROOT'].'/pretest';
	$assets_folder = $fullURL.'/assets';
	$headerStudentFile = $root.'/libs/headerStudent.php';
	$navStudentFile = $root.'/libs/navStudent.php';
	$footerStudentFile = $root.'/libs/footerStudent.php';
	$logo = $assets_folder.'/img/logo.png';
	$activeURL = explode('?', $rootURL.$_SERVER['REQUEST_URI'])[0];
	$apiFolder = $fullURL.'/api';
	$menuLists = array(
		array(
			'icon' => 'glyphicon glyphicon-home',
			'name' => 'หน้าหลัก',
			'link' => $studentURL.'/main.php'
		),
		array(
			'icon' => 'glyphicon glyphicon-file',
			'name' => 'ลงทะเบียนสอบ',
			'link' => $studentURL.'/examinationLists.php'
		),
		array(
			'icon' => 'glyphicon glyphicon-edit',
			'name' => 'เข้าสู่การสอบ',
			'link' => '#'
		),
		array(
			'icon' => 'glyphicon glyphicon-list-alt',
			'name' => 'ตรวจสอบคะแนน',
			'link' => '#',
		),
		array(
			'icon' => 'glyphicon glyphicon-cog',
			'name' => 'แก้ไขข้อมูลส่วนตัว',
			'link' => $studentURL.'/editProfile.php',
			'status' => 'not-active'
		),
		/*array(
			'icon' => 'glyphicon glyphicon',
			'name' => '<span class="label label-danger">ออกจากระบบ</a></span>',
			'link' => $studentURL.'/logout.php'
		),*/
	);

	foreach($menuLists as $m)
	{
		if ($m['link'] == $activeURL)
		{
			$titleName = $m['name'] . ' | Annop Pretest';
		}
	}
function getDatabase()
{
	$hostname = 'localhost';
	$dbName = 'ajannopc_pretest';
	$username = 'root';
	$password = '';

	try
	{
		$db = new PDO("mysql:host=$hostname;dbname=$dbName; charset=utf8", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	return $db;
}
//echo "This is config file.";
 ?>
