<?php
require '../../assets/php/connect.php';
require '../../assets/php/connect2.php';
// require '../../assets/php/img.php';
// require '../../assets/php/update.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>TESTE 1 - CMS</title>
</head>

<body>
  <div class="row p-0 m-0">
    <div class="col-12 p-0 m-0">
      <div class="sidenav">
        <div class="side-default">
          <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0">
              <div class="side-logo">
                <div class="img-side-logo">
                  <img class="logo-img" src="../img/logo.svg">
                </div>
                <div class="logo-name">
                  <h1 class="link-side m-0" id="side-logo-name">IKAKO</h1>
                </div>
              </div>
            </div>
          </div>

          <div id="links">
            <div class="side-row row p-0 m-0">
              <div class="bg-itens default col-12 p-0 m-0 my-2" id="mod-sec1_btn">
                <a href="#" class="link-side">SEÇÃO 1</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2" id="mod-sec2_btn">
                <a href="#" class="link-side">SEÇÃO 2</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2" id="mod-sec3_btn">
                <a href="#" class="link-side">SEÇÃO 3</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2" id="mod-sec4_btn">
                <a href="#" class="link-side">SEÇÃO 4</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div id="main-close">
    <nav class="navbar navbar-expand-lg navbar-light b-shadow">
      <div class="container-fluid">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <span class="dashboard-toogle menu-toogle">&#9776;</span>
            <h1 id="dash-title" class="dashboard-toogle title">Dashboard</h1>
          </li>
        </ul>
        <div class="search">
          <div class="search-row row p-0 m-0">
            <div class="search-col col-12 p-0 m-0">
              <div class="search-img">
                <img src="../img/9-search-svg.svg">
              </div>
              <div class="searchbar">
                <form class="search-form">
                  <input type="search" name="search" id="search" placeholder="Search here">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class=" row p-0 m-0">
          <div class="nav-user col-12 p-0 m-0">
            <div class="nav-user-img">
              <img src="https://th.bing.com/th/id/OIP.GDe62S6hVs_it6LC5bBvBwHaEj?pid=ImgDet&rs=1" class="nav-img" height="55px" width="55px">
            </div>
            <div class="nav-user-titles">
              <h2 id="nav-username">Mavie</h2>
              <span id="nav-userjob">Front-End Developer</span>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="main-content cover center f-column">

      <div class="mod-section_section-1 mod-section-parent cover center f-column b-shadow gap-20" id="mod-sec1">

        <div class="mod-section cover">
          <div class="mod-title"><?php echo $main_title ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="main-title_input" id="main-title_input">
              <input type="hidden" name="idMain" value="<?php echo $idMain ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $sub_title ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="sub-title_input" id="sub-title_input">
              <input type="hidden" name="idSub" value="<?php echo $idSub ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="flex center cover gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_1--section-1' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg_Section_1" value="<?php echo $idImg_Section_1 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img1_section_1 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex center cover gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_2--section-1' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg2_Section_1" value="<?php echo $idImg2_Section_1 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img2_section_1 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_3--section-1' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg3_Section_1" value="<?php echo $idImg3_Section_1 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img3_section_1 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_4--section-1' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg4_Section_1" value="<?php echo $idImg4_Section_1 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img4_section_1 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>

      </div>

      <div class="mod-section_section-2 mod-section-parent cover center f-column b-shadow gap-20" id="mod-sec2">

        <div class="mod-section cover">
          <div class="mod-title"><?php echo $main_title_two ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="main-title_two" id="main-title_two">
              <input type="hidden" name="idMain_2" value="<?php echo $idMain_2 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $sub_title_two ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="sub-title_two" id="sub-title_two">
              <input type="hidden" name="idSub_2" value="<?php echo $idSub_2 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $inner_text_two ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="inner-text_two" id="inner-text_two">
              <input type="hidden" name="idInn_2" value="<?php echo $idInn_2 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="flex center cover gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg_Section_2" value="<?php echo $idImg_Section_2 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img1_section_2 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>

      </div>

      <div class="mod-section_section-3 mod-section-parent cover center f-column b-shadow" id="mod-sec3">

        <div class="mod-section cover">
          <div class="mod-title"><?php echo $main_title_three ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="main-title_three" id="main-title_three">
              <input type="hidden" name="idMain_3" value="<?php echo $idMain_3 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $sub_title_three ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="sub-title_three" id="sub-title_three">
              <input type="hidden" name="idSub_3" value="<?php echo $idSub_3 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>

      </div>

      <div class="mod-section_section-4 mod-section-parent cover center f-column b-shadow gap-20" id="mod-sec4">

        <div class="mod-section cover">
          <div class="mod-title"><?php echo $main_title_four ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="main-title_four" id="main-title_four">
              <input type="hidden" name="idMain_4" value="<?php echo $idMain_4 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $sub_title_four ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="sub-title_four" id="sub-title_four">
              <input type="hidden" name="idSub_4" value="<?php echo $idSub_4 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="mod-section cover">
          <div class="mod-title"><?php echo $inner_text_four ?></div>
          <div class="mod-form-par text-mod">
            <form action="../../assets/php/update.php" method="get" class="mod-form flex">
              <input type="text" class="mod-input b-shadow cover" name="inner-text_four" id="inner-text_four">
              <input type="hidden" name="idInn_4" value="<?php echo $idInn_4 ?>">
              <button type="submit" class="mod-btn b-shadow ">Enviar</button>
            </form>
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_1--section-4' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg1_Section_4" value="<?php echo $idImg1_Section_4 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img1_section_4 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_2--section-4' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg2_Section_4" value="<?php echo $idImg2_Section_4 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img2_section_4 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_3--section-4' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg3_Section_4" value="<?php echo $idImg3_Section_4 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img3_section_4 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
        <div class="flex cover center gap-20">
          <div class="mod-section cover">
            <div class="mod-title"><?php echo 'img_4--section-4' ?></div>
            <div class="mod-form-par text-mod">
              <form action="../../assets/php/img.php" method="post" class="mod-form flex" enctype="multipart/form-data">
                <input class="img-input cover b-shadow" type="file" name="arquivo" id="arquivo">
                <input type="hidden" name="idImg4_Section_4" value="<?php echo $idImg4_Section_4 ?> ">
                <button type="submit" class="mod-btn b-shadow ">Enviar</button>
              </form>
            </div>
          </div>
          <div class="mod-section-parent img-mod">
            <img src="<?php echo '../' . $img4_section_4 ?>" alt="" class="imgs cover obj-cover" id="imgcar1-sec0">
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
    $('#mod-sec1_btn').click(function() {

      $('#mod-sec1').show();
      $('#mod-sec2').hide();
      $('#mod-sec3').hide();
      $('#mod-sec4').hide();

    });

    $('#mod-sec2_btn').click(function() {

      $('#mod-sec2').show();
      $('#mod-sec1').hide();
      $('#mod-sec3').hide();
      $('#mod-sec4').hide();

    });

    $('#mod-sec3_btn').click(function() {

      $('#mod-sec3').show();
      $('#mod-sec1').hide();
      $('#mod-sec2').hide();
      $('#mod-sec4').hide();

    });

    $('#mod-sec4_btn').click(function() {

      $('#mod-sec4').show();
      $('#mod-sec1').hide();
      $('#mod-sec2').hide();
      $('#mod-sec3').hide();

    });

    $(".dashboard-toogle").click(function() {
      $(".side-default").toggleClass("side-open");
      $("#main-close").toggleClass("main-open");
      $(".link-side").toggleClass("link-side-open");
      $(".img-side").toggleClass("img-side-closed");
    });

    $(".card").hover(function() {
      $(".card-img").toggleClass("card-img-hover");
    });
    $('.bg-itens').click(function() {
      $('.bg-itens.active').each(function() {
        $(this).removeClass('active');
      });
      $(this).addClass('active');
    });
  </script>
</body>

</html>