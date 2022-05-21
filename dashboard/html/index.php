<?php
require '../../assets/php/connect.php';
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
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/1-dashboard-svg.svg">
                </div>
                <a href="#" class="link-side"> Dashboard</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/2-customers-svg.svg">
                </div>
                <a href="#" class="link-side"> Customers</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/3-projects-svg.svg">
                </div>
                <a href="#" class="link-side"> Projects</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/4-orders-svg.svg">
                </div>
                <a href="#" class="link-side"> Orders</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/5-inventory-svg.svg">
                </div>
                <a href="#" class="link-side"> Inventory</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/6-account-svg.svg">
                </div>
                <a href="#" class="link-side"> Accounts</a>
              </div>
              <div class="bg-itens default col-12 p-0 m-0 my-2">
                <div class="img-side">
                  <img src="../img/7-tasks-svg.svg">
                </div>
                <a href="#" class="link-side"> Tasks</a>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div id="main-close">
        <nav class="navbar navbar-expand-lg navbar-light">
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

          <div class="mod-section_section-1 mod-section-parent">

            <div class="mod-section">
              <div class="mod-title"><?php echo $main_title ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="main-title_input" id="main-title_input">
                  <input type="hidden" name="idMain" value="<?php echo $idMain ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $sub_title ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="sub-title_input" id="sub-title_input">
                  <input type="hidden" name="idSub" value="<?php echo $idSub ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo 'img_1--section-1' ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/img.php" method="post" class="mod-form" enctype="multipart/form-data">
                  <input type="file" name="arquivo" id="arquivo">
                  <input type="hidden" name="idImg_Section_1" value="<?php echo $idImg_Section_1 ?> ">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>

          </div>

          <div class="mod-section_section-2 mod-section-parent">

            <div class="mod-section">
              <div class="mod-title"><?php echo $main_title_two ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="main-title_two" id="main-title_two">
                  <input type="hidden" name="idMain_2" value="<?php echo $idMain_2 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $sub_title_two ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="sub-title_two" id="sub-title_two">
                  <input type="hidden" name="idSub_2" value="<?php echo $idSub_2 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $inner_text_two ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="inner-text_two" id="inner-text_two">
                  <input type="hidden" name="idInn_2" value="<?php echo $idInn_2 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo 'img' ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/img.php" method="post" class="mod-form" enctype="multipart/form-data">
                  <input type="file" name="arquivo2" id="arquivo2">
                  <input type="hidden" name="idImg_Section_2" value="<?php echo $idImg_Section_2 ?> ">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>

          </div>

          <div class="mod-section_section-3 mod-section-parent">

            <div class="mod-section">
              <div class="mod-title"><?php echo $main_title_three ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="main-title_three" id="main-title_three">
                  <input type="hidden" name="idMain_3" value="<?php echo $idMain_3 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $sub_title_three ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="sub-title_three" id="sub-title_three">
                  <input type="hidden" name="idSub_3" value="<?php echo $idSub_3 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            
          </div>

          <div class="mod-section_section-4 mod-section-parent">
            <div class="mod-section">
              <div class="mod-title"><?php echo $main_title_four ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="main-title_four" id="main-title_four">
                  <input type="hidden" name="idMain_4" value="<?php echo $idMain_4 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $sub_title_four ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="sub-title_four" id="sub-title_four">
                  <input type="hidden" name="idSub_4" value="<?php echo $idSub_4 ?>">
                  <button type="submit">enviar</button>
                </form>
              </div>
            </div>
            <div class="mod-section">
              <div class="mod-title"><?php echo $inner_text_four ?></div>
              <div class="mod-form-par text-mod">
                <form action="../../assets/php/update.php" method="get" class="mod-form">
                  <input type="text" name="inner-text_four" id="inner-text_four">
                  <input type="hidden" name="idInn_4" value="<?php echo $idInn_4 ?>">
                  <button type="submit">enviar</button>
                </form>
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