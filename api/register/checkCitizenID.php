<?php require $_SERVER['DOCUMENT_ROOT'].'/pretest/config.php'; ?>

<?php
	if(!empty($_GET['citizenID']))
	{
		if (strlen($_GET['citizenID']) == 13)
		{
	        for ($i=0, $sum=0; $i<12; $i++)
	        {
	            $sum += (int) ($_GET['citizenID']{$i}) * (13 - $i);
	        }

	        if ((11 - ($sum % 11)) % 10 == (int) ($_GET['citizenID']{12})) //correct
	        {
	            $json['status'] = true;
	        }
	        else
	        {
	        	$json['status'] = false;
	            $json['message'] = 'รหัสประชาชนไม่ถูกต้อง';
	        }
   	 	}
   	 	else
   	 	{
       		$json['status'] = false;
	       	$json['message'] = 'รหัสประชาชนไม่ถูกต้อง';
    	}

    	if($json['status'])
    	{
    		try
			{
				$db = getDatabase();
				$sql = 'SELECT
							username
						FROM
							Student
						WHERE
							citizenID LIKE :citizenID';
				$stmt = getDatabase()->prepare($sql);
				$stmt->bindParam(':citizenID', $_GET['citizenID']);
				$json['status'] = $stmt->execute();
				$json['data'] = array(
					'rowCount' => $stmt->rowCount()
				);
				$count = $stmt->rowCount();
				if($count>0){
					$json['status'] = false;
	       	$json['message'] = 'รหัสประชาชนนี้ได้สมัครแล้ว';
				}
			}
			catch(PDOException $e)
			{
				$json['status'] = false;
				$json['message'] =  $e->getMessage();
			}
	    }

		echo json_encode($json);

	}
?>
