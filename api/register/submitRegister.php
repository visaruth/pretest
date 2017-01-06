<?php require $_SERVER['DOCUMENT_ROOT'].'/pretest/config.php'; ?>
<?php

	if(!empty($_POST))
	{
		$_POST['password'] = md5($_POST['password']);
 		try
		{
			$db = getDatabase();
			$sql = 'INSERT INTO
						`Student`(
							`citizenID`,
							`username`,
							`password`,
							`firstname`,
							`lastname`,
							`birthday`,
							`schoolName`,
							`email`,
							`phoneNo`
						)
					VALUES (
						:citizenID,
						:username,
						:password,
						:firstname,
						:lastname,
						:birthday,
						:schoolName,
						:email,
						:phoneNo
					)';
			$stmt = getDatabase()->prepare($sql);
			$stmt->bindParam(':citizenID', $_POST['citizenID']);
			$stmt->bindParam(':username', $_POST['username']);
			$stmt->bindParam(':password', $_POST['password']);
			$stmt->bindParam(':firstname', $_POST['firstname']);
			$stmt->bindParam(':lastname', $_POST['lastname']);
			$stmt->bindParam(':birthday', $_POST['birthday']);
			$stmt->bindParam(':schoolName', $_POST['schoolName']);
			$stmt->bindParam(':email', $_POST['email']);
			$stmt->bindParam(':phoneNo', $_POST['phoneNo']);
			$json['status'] = $stmt->execute();
			$json['message'] = 'บันทึกสำเร็จ';
		}
		catch(PDOException $e)
		{
			$json['status'] = false;
			$json['message'] =  $e->getMessage();
		}
		echo json_encode($json);

	}
?>
