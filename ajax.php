<?php
  include_once 'connect.php';
 //echo $_POST["done"];
 sendDataToBase($conn, $_POST["item_id"], $_POST["done"]);
?>
