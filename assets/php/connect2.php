<?php
$conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('SELECT * FROM imagem');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//section 1
$img1_section_1 = $result[0]['img-1'];
$img2_section_1 = $result[0]['img-2'];
$img3_section_1 = $result[0]['img-3'];
$img4_section_1 = $result[0]['img-4'];

//section 2
$img1_section_2 = $result[1]['img-1'];

//section 3


//secgtion 4
$img1_section_4 = $result[3]['img-1'];
$img2_section_4 = $result[3]['img-2'];
$img3_section_4 = $result[3]['img-3'];
$img4_section_4 = $result[3]['img-4'];