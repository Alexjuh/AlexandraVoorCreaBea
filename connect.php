<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=cl_db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
}
  catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
}

function dataFromBase($conn){
  $sql = "SELECT * FROM `to-do-crea` ORDER BY `to-do-crea`.`start_time` ASC";
  $result = $conn->query($sql);

  //echo $result->rowCount();
  $loadData = NULL;

  if ($result->rowCount() > 0) {
    $loadData = $result;
  }
  //else {
  //   $loadData = "0 results";
  // }
  return $loadData;
}

function sendDataToBase($conn, $item_id, $done){
  $sql = "UPDATE `to-do-crea` SET `done` = $done WHERE `to-do-crea`.`item_id` = $item_id;";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}


?>
