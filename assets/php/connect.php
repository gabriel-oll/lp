<?php

$conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM texto');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$id = $result[0]['id'];
$id_2 = $result[1]['id'];

$main_title = $result[0]['main-title']; 

$sub_title = $result[0]['sub-title'];

$main_title_two = $result[1]['main-title']; 

$sub_title_two = $result[1]['sub-title'];

$inner_text_two = $result[1]['inner-text'] ; 

$main_title_three = $result[2]['main-title']; 

$sub_title_three = $result[2]['sub-title'];

$inner_text_three = $result[2]['inner-text'] ; 

$main_title_four = $result[3]['main-title']; 

$sub_title_four = $result[3]['sub-title'];

$inner_text_four = $result[3]['inner-text'] ;

?>
