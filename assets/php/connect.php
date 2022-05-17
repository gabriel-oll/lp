<?php

try {
  $conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
  }

  $sql="SELECT * FROM texto WHERE id = 1";
  $stmt = $sql->prepare( $sql ); 
  $stmt->execute($stmt);

  echo $sql;
  

?>