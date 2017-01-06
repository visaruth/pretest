<?php require $_SERVER['DOCUMENT_ROOT'].'/pretest/config.php'; ?>

<?php

	if(!empty($_GET['username']))
	{
		try
		{
			$db = getDatabase();
			$sql = 'SELECT
						username
					FROM
						Student
					WHERE
						username LIKE :username';
			$stmt = getDatabase()->prepare($sql);
			$stmt->bindParam(':username', $_GET['username']);
			$json['status'] = $stmt->execute();
			$json['data'] = array(
				'rowCount' => $stmt->rowCount()
			);
			$count = $stmt->rowCount();
			if($count>0){
				$json['status'] = false;
				$json['message'] = 'ชื่อผู้ใช้ซ้ำ';
			}
		}
		catch(PDOException $e)
		{
			$json['status'] = false;
			$json['message'] =  $e->getMessage();
		}
		echo json_encode($json);
	}

	?>
