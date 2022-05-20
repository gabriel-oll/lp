<?php

require './connect.php';

$main_title = $_GET['main-title_input'];

$main_title_two = $_GET['main-title_two'];

$id = $_GET['id'];

$id_2 = $_GET['id_2'];


echo $id, $id_2;

if ($id === '1'){
    function updateTitle($main_title, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='". $main_title ."' WHERE  `id`=1");
        $sql->execute();
    
    }
    
    updateTitle($main_title, $conn);
}else {
    header("location: ../../dashboard/html/index.php");    
}

if ($id_2 === '2'){
    function updateTitle_2($main_title_two, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='". $main_title_two ."' WHERE  `id`=2");
        $sql->execute();
    
    }
    
    updateTitle_2($main_title_two, $conn);

}else {
    header("location: ../../dashboard/html/index.php");    
}

