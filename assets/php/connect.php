<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=teste-cms', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'sucess';
    
  } catch(PDOException $e) {
}
$sql = "INSERT INTO teste (nome)
  VALUES ('Gabirel')";
  echo 'ERROR: ' . $e->getMessage();
?>