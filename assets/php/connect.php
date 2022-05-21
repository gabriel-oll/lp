<?php

$conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM texto');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//IDMAIN
$idMain = $result[0]['id'];
$idMain_2 = $result[1]['id'];
$idMain_3 = $result[2]['id'];
$idMain_4 = $result[3]['id'];
//IDMAIN

//IDSUB
$idSub = $result[0]['id'];
$idSub_2 = $result[1]['id'];
$idSub_3 = $result[2]['id'];
$idSub_4 = $result[3]['id'];
//IDSUB

//IDINNER
$idInn_2 = $result[1]['id'];
$idInn_4 = $result[3]['id'];
//IDINNER

//SECTION 1
$main_title = $result[0]['main-title']; 

$sub_title = $result[0]['sub-title'];
//SECTION 1

//SECTION 2
$main_title_two = $result[1]['main-title']; 

$sub_title_two = $result[1]['sub-title'];

$inner_text_two = $result[1]['inner-text'] ; 
//SECTION 2

//SECTION 3
$main_title_three = $result[2]['main-title']; 

$sub_title_three = $result[2]['sub-title'];

$inner_text_three = $result[2]['inner-text'] ; 

$idImg_Section_1 = $result[0]['id'];
$idImg2_Section_1 = $result[0]['id'];
$idImg3_Section_1 = $result[0]['id'];
$idImg4_Section_1 = $result[0]['id'];

$idImg_Section_2 = $result[1]['id'];

$idImg_Section_3 = $result[2]['id'];

$idImg_Section_4 = $result[3]['id'];
$idImg2_Section_4 = $result[3]['id'];
$idImg3_Section_4 = $result[3]['id'];
$idImg4_Section_4 = $result[3]['id'];

//SECTION 3

//SECTION 4
$main_title_four = $result[3]['main-title']; 

$sub_title_four = $result[3]['sub-title'];

$inner_text_four = $result[3]['inner-text'];

//SECTION 4

?>