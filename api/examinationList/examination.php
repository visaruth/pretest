<?php require $_SERVER['DOCUMENT_ROOT'].'/pretest/config.php'; ?>

<?php
try
{
  $db = getDatabase();
  $sql = 'SELECT
        *
      FROM
        examination';
  $stmt = getDatabase()->prepare($sql);
  $json['status'] = $stmt->execute();
  $json['data1'] = array(
    'examination' => $stmt->fetchAll(PDO::FETCH_ASSOC)
  );
  $sql = 'SELECT
        *
        FROM
          examination
        WHERE
          examinationRegisterStartDate <= Now() AND examinationRegisterEndDate >= Now()';
  $stmt = getDatabase()->prepare($sql);
  $json['status'] = $stmt->execute();
  $json['data2'] = array(
    'examinationAvaliableNow' => $stmt->fetchAll(PDO::FETCH_ASSOC)
  );
  $sql = 'SELECT
        *
        FROM
          examination
        WHERE
          examinationRegisterStartDate > Now()';
  $stmt = getDatabase()->prepare($sql);
  $json['status'] = $stmt->execute();
  $json['data3'] = array(
    'examinationAvaliableSoon' => $stmt->fetchAll(PDO::FETCH_ASSOC)
  );
  $sql = 'SELECT
        *
        FROM
          examination
        WHERE
          examinationRegisterEndDate < Now()';
  $stmt = getDatabase()->prepare($sql);
  $json['status'] = $stmt->execute();
  $json['data4'] = array(
    'examinationUnavaliable' => $stmt->fetchAll(PDO::FETCH_ASSOC)
  );
}
catch(PDOException $e)
{
  $json['status'] = false;
  $json['message'] =  $e->getMessage();
}
echo json_encode($json);
?>
