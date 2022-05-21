<?php

$idImg1_sec1 = $_POST['idImg_Section_1'];
$idImg2_sec1 = $_POST['idImg2_Section_1'];
$idImg3_sec1 = $_POST['idImg3_Section_1'];
$idImg4_sec1 = $_POST['idImg4_Section_1'];

$idImg2_sec2 = $_POST['idImg_Section_2'];

$idImg1_sec4 = $_POST['idImg1_Section_4'];
$idImg2_sec4 = $_POST['idImg2_Section_4'];
$idImg3_sec4 = $_POST['idImg3_Section_4'];
$idImg4_sec4 = $_POST['idImg4_Section_4'];

$conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//img1 sec1
if (isset($idImg1_sec1)) {
    echo $idImg1_sec1;
    function updateImage1_Section1($idImg1_sec1, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-1`='" . $imgFormated . "' WHERE  `id`=1");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage1_Section1($idImg1_sec1, $conn);
}

//img2 sec1
if (isset($idImg2_sec1)) {
    echo $idImg2_sec1;
    function updateImage2_Section1($idImg2_sec1, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-2`='" . $imgFormated . "' WHERE  `id`=1");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage2_Section1($idImg2_sec1, $conn);
}

//img3 sec 1
if (isset($idImg3_sec1)) {
    echo $idImg3_sec1;
    function updateImage3_Section1($idImg3_sec1, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-3`='" . $imgFormated . "' WHERE  `id`=1");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage3_Section1($idImg3_sec1, $conn);
}

//img4 sec 1
if (isset($idImg4_sec1)) {
    echo $idImg4_sec1;
    function updateImage4_Section1($idImg4_sec1, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-4`='" . $imgFormated . "' WHERE  `id`=1");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage4_Section1($idImg4_sec1, $conn);
}

//img1 sec2
if (isset($idImg2_sec2)) {
    echo $idImg2_sec2;
    function updateImage_Section2($idImg2_sec2, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-1`='" . $imgFormated . "' WHERE  `id`=2");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage_Section2($idImg2_sec2, $conn);
}

//img1 sec4
if (isset($idImg1_sec4)) {
    echo $idImg1_sec4;
    function updateImage1_Section4($idImg1_sec4, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-1`='" . $imgFormated . "' WHERE  `id`=4");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage1_Section4($idImg1_sec4, $conn);
}

//img2 sec4
if (isset($idImg2_sec4)) {
    echo $idImg2_sec4;
    function updateImage2_Section4($idImg2_sec4, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-2`='" . $imgFormated . "' WHERE  `id`=4");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage2_Section4($idImg2_sec4, $conn);
}

//img2 sec4
if (isset($idImg3_sec4)) {
    echo $idImg3_sec4;
    function updateImage2_Section4($idImg3_sec4, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-3`='" . $imgFormated . "' WHERE  `id`=4");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage2_Section4($idImg3_sec4, $conn);
}

//img2 sec4
if (isset($idImg4_sec4)) {
    echo $idImg4_sec4;
    function updateImage2_Section4($idImg4_sec4, $conn)
    {
        $_UP['pasta'] = '../../assets/img/uploads';
        $_UP['tamanho'] = 1024 * 1024 * 5;
        $_UP['extensoes'] = array('jpg', 'png', 'gif');
        $_UP['renomeia'] = false;

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arqui vo';
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit;
        }

        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }

        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
            exit;
        }

        if ($_UP['renomeia'] == true) {
            $nome_final = md5(time()) . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

            $imgFinal = $_UP['pasta'] . $nome_final;
            $imgFormated = substr($imgFinal, 3);
            echo $imgFormated;

            $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-4`='" . $imgFormated . "' WHERE  `id`=4");
            $sql->execute();
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

    updateImage2_Section4($idImg4_sec4, $conn);
}