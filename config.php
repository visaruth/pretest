<?php
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
