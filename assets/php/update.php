<?php

require './connect.php';

//MAIN
$main_title = $_GET['main-title_input'];
$main_title_two = $_GET['main-title_two'];
$main_title_three = $_GET['main-title_three'];
$main_title_four = $_GET['main-title_four'];

$idMain = $_GET['idMain'];
$idMain_2 = $_GET['idMain_2'];
$idMain_3 = $_GET['idMain_3'];
$idMain_4 = $_GET['idMain_4'];
//MAIN

//SUB
$sub_title = $_GET['sub-title_input'];
$sub_title_two = $_GET['sub-title_two'];
$sub_title_three = $_GET['sub-title_three'];
$sub_title_four = $_GET['sub-title_four'];

$idSub = $_GET['idSub'];
$idSub_2 = $_GET['idSub_2'];
$idSub_3 = $_GET['idSub_3'];
$idSub_4 = $_GET['idSub_4'];
//SUB

//SUB
$inner_text = $_GET['inner-text_input'];
$inner_text_two = $_GET['inner-text_two'];
$inner_text_three = $_GET['inner-text_three'];
$inner_text_four = $_GET['inner-text_four'];

$idInn_2 = $_GET['idInn_2'];
$idInn_4 = $_GET['idInn_4'];
//SUB


echo $idMain, $idMain_2, $idMain_3, $idMain_4;
echo $idSub, $idSub_2, $idSub_3, $idSub_4;
echo $idInn, $idInn_2, $idInn_3, $idInn_4;

//MAIN TITLE

if ($idMain === '1') {
    function updateTitle($main_title, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='" . $main_title . "' WHERE  `id`=1");
        $sql->execute();
    }

    updateTitle($main_title, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idMain_2 === '2') {
    function updateTitle_2($main_title_two, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='" . $main_title_two . "' WHERE  `id`=2");
        $sql->execute();
    }

    updateTitle_2($main_title_two, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idMain_3 === '3') {
    function updateTitle_3($main_title_three, $conn)
    {

        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='" . $main_title_three . "' WHERE  `id`=3");
        $sql->execute();
    }

    updateTitle_3($main_title_three, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idMain_4 === '4') {
    function updateTitle_4($main_title_four, $conn)
    {

        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `main-title`='" . $main_title_four . "' WHERE  `id`=4");
        $sql->execute();
    }

    updateTitle_4($main_title_four, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

//MAIN TITLE

//SUB TITLE

if ($idSub === '1') {
    function updateSubTitle($sub_title, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `sub-title`='" . $sub_title . "' WHERE  `id`=1");
        $sql->execute();
    }

    updateSubTitle($sub_title, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idSub_2 === '2') {
    function updateSubTitle_2($sub_title_two, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `sub-title`='" . $sub_title_two . "' WHERE  `id`=2");
        $sql->execute();
    }

    updateSubTitle_2($sub_title_two, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idSub_3 === '3') {
    function updateSubTitle_3($sub_title_three, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `sub-title`='" . $sub_title_three . "' WHERE  `id`=3");
        $sql->execute();
    }

    updateSubTitle_3($sub_title_three, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idSub_4 === '4') {
    function updateSubTitle_4($sub_title_four, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `sub-title`='" . $sub_title_four . "' WHERE  `id`=4");
        $sql->execute();
    }

    updateSubTitle_4($sub_title_four, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

//SUB TITLE

//INNER TEXT

if ($idInn_2 === '2') {
    function updateInnerText_2($inner_text_two, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `inner-text`='" . $inner_text_two . "' WHERE  `id`=2");
        $sql->execute();
    }

    updateInnerText_2($inner_text_two, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

if ($idInn_4 === '4') {
    function updateInnerText_4($inner_text_four, $conn)
    {
        $sql = $conn->prepare("UPDATE `lp-cms`.`texto` SET `inner-text`='" . $inner_text_four . "' WHERE  `id`=4");
        $sql->execute();
    }

    updateInnerText_4($inner_text_four, $conn);
} else {
    header("location: ../../dashboard/html/index.php");
}

//INNER TEXT 