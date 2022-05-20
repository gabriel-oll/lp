<?php 
require '../assets/php/connect.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style/style.css">
  <title>TESTE 1 - LP CMS</title>
</head>

<body>
  <div class="main-content">
    <div class="content-catch cover">
      <nav class="navbar-base cover center">
        <div class="navbar-parent cover center backgrounds">
          <div class="navbar-item">
            <img src="../assets/img/logos,assets,etc/logo.svg" alt="nav menu" class="cover">
          </div>
          <div class="navbar-itens-par relative flex nav-itens">
            <div class="navbar-itens"><a href="#aboutus-sec" class="nav-links fst-link">About Us</a>
              <div class="dot fst-link"></div>
            </div>
            <div class="navbar-itens"><a href="#clients-sec" class="nav-links sec-link">Clients</a>
              <div class="dot sec-link"></div>
            </div>
            <div class="navbar-itens"><a href="#projects-sec" class="nav-links third-link">Projects</a>
              <div class="dot third-link"></div>
            </div>
          </div>
          <div class="navbar-itens-par sign-par flex">
            <div class="navbar-itens"><a href="#" class="nav-links signin">Sign In</a></div>
            <div class="navbar-itens"><a href="#" class="nav-links signup clr-white">Sign Up</a></div>
          </div>
        </div>
      </nav>
      <div id="sec-0" class="sections-parent cover center backgrounds">
        <div class="carousel-parent cover">
          <div class="slider cover">
            <div class="slider-inner flex carousel-inner cover">
              <div class="carousel center">
                <div class="container flex" id="img">
                  <img src="../assets/img/logos,assets,etc/carousel/bg-1.jpg" alt="" class="imgs cover" id="imgcar1-sec0">
                  <img src="../assets/img/logos,assets,etc/carousel/bg-2.jpg" alt="" class="imgs cover" id="imgcar2-sec0">
                  <img src="../assets/img/logos,assets,etc/carousel/bg-3.jpg" alt="" class="imgs cover" id="imgcar3-sec0">
                  <img src="../assets/img/logos,assets,etc/carousel/bg-4.jpg" alt="" class="imgs cover" id="imgcar4-sec0">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-txt main-spacing">
          <div class="au-text-sec f-column center cover">
            <div class="texts-catch center f-column">
              <div class="main-title clr-white" id="tit-sec0"><?php echo $main_title?></div>
              <div class="section-subtitle clr-white" id="subtit-sec0"><?php echo $sub_title ?></div>
            </div>
            <div class="link-parent">
              <button class="signin-btn clr-white carousel-btn pointer">Talk to Us</button>
            </div>
          </div>
        </div>
      </div>

      <div id="sec-1" class="sections-parent cover center backgrounds">
        <div id="aboutus-sec" class="main-spacing center cover between">
          <div class="about-parent">
            <div class="text-sec f-column">
              <div class="section-title" id="tit-sec1"><?php echo $main_title_two?></div>
              <div class="section-subtitle" id="subtit-sec1"><?php echo $sub_title_two?></div>
              <div class="section-innertxt" id="inntxt-sec1"><?php echo $inner_text_two?></div>
            </div>
            <div class="link-parent">
              <button class="signin-btn clr-white pointer">Sign up</button>
            </div>
          </div>
          <div class="about-parent-alt">
            <div class="about-img">
              <img src="../assets/img/logos,assets,etc/aboutus-example.jpg" alt="" class="about-us cover" id="img-sec1">
            </div>
          </div>
        </div>
      </div>

      <div id="sec-2" class="sections-parent cover center backgrounds">
        <div id="clients-sec" class="main-spacing center cover">
          <div class="projects-parent cover center">
            <div class="au-text-sec f-column center cover">
              <div class="texts-catch center f-column">
                <div class="section-title"><?php echo $main_title_three?></div>
                <div class="section-subtitle"><?php echo $sub_title_three?></div>
              </div>
              <div class="clients-base w-100 center">
                <div class="clients">
                  <img src="../assets/img/logos,assets,etc/brand-icons/airbnb.svg" alt="" class="client-1 cover">
                </div>
                <div class="clients">
                  <img src="../assets/img/logos,assets,etc/brand-icons/apple.svg" alt="" class="client-2 cover">

                </div>
                <div class="clients">
                  <img src="../assets/img/logos,assets,etc/brand-icons/facebook.svg" alt="" class="client-3 cover">

                </div>
                <div class="clients">
                  <img src="../assets/img/logos,assets,etc/brand-icons/google.svg" alt="" class="client-4 cover">

                </div>
                <div class="clients">
                  <img src="../assets/img/logos,assets,etc/brand-icons/ibm.svg" alt="" class="client-5 cover">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="sec-3" class="sections-parent cover center backgrounds">
        <div id="projects-sec" class="main-spacing center cover">
          <div class="projects-parent cover center">  
            <div class="au-text-sec f-column center cover">
              <div class="texts-catch center f-column">
                <div class="section-title"><?php echo $main_title_four?></div>
                <div class="section-subtitle"><?php echo $sub_title_four?></div>
              </div>
              <div class="projects-base w-100 center relative">
                <div class="slider cover">
                  <div class="slider-inner projects-inner flex cover center">
                    <div class="projects cover center">
                      <div class="projects-bg cover"><img src="../assets/img/logos,assets,etc/carousel/bg-1.jpg" alt=""
                          class="cover"></div>
                    </div>
                    <div class="projects cover center">
                      <div class="projects-bg cover"><img src="../assets/img/logos,assets,etc/carousel/bg-2.jpg" alt=""
                          class="cover"></div>
                    </div>
                    <div id="3" class="projects cover center">
                      <div class="projects-bg cover"><img src="../assets/img/logos,assets,etc/carousel/bg-3.jpg" alt=""
                          class="cover"></div>
                    </div>
                    <div class="projects cover center">
                      <div class="projects-bg cover"><img src="../assets/img/logos,assets,etc/carousel/bg-4.jpg" alt=""
                          class="cover"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desk-tip"><?php echo $inner_text_four?></div>
            </div>
          </div>
        </div>
      </div>

      <div id="sec-4" class="sections-parent cover center backgrounds form-sec clr-white">
        <div class="main-spacing cover center">
          <div class="subscribe-base cover center">
            <form action="#" class="subscribe cover center">
              <div class="gap20 center f-column">
                <div class="form-email cover center f-column">
                  <label for="email" class="email-label">Insert your E-mail to subscribe our Newsletter:</label>
                  <input type="email" name="email" id="email" placeholder="E-mail here" class="email-input cover">
                </div>
                <div class="form-btn-par">
                  <button type="submit" class="form-btn relative clr-white pointer">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <footer class="footer-base">
        <div class="footer-parent f-column center clr-white">
          <div class="footer-itens-par flex">
            <div class="footer-itens pointer">About Us</div>
            <div class="footer-itens pointer">Clients</div>
            <div class="footer-itens pointer">Projects</div>
          </div>
          <div class="footer-itens-par copy flex">
            2022 &copy; - Designed by Fernando Gabriel
          </div>
        </div>
      </footer>

      <a href="#sec-0">
        <div class="return-btn">
          <img src="../assets/img/logos,assets,etc/backtop.svg" alt="" class="cover">
        </div>
      </a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../assets/app/app.js"></script>
</body>
</html>
