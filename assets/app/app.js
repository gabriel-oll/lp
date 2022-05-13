//Carossel

const imgs = document.getElementById('img');
const img = document.querySelectorAll('#img img');

let idx = 0;

function carousel() {
  idx++;

  if (idx > img.length - 1) {
    idx = 0;
  }

  imgs.style.transform = `translateX(${-idx * 100}vw)`;
}

setInterval(carousel, 3500);

//Seleção da navbar

var fstLink = $('.dot.fst-link');
var secLink = $('.dot.sec-link');
var thirdLink = $('.dot.third-link');

var links = $('.dot.fst-link,.dot.sec-link,.dot.third-link');

$('.nav-links.fst-link').on('click', function() {
  $(links).removeClass('dot-active')
  $(fstLink).addClass('dot-active');
});
$('.nav-links.sec-link').on('click', function() {
  $(links).removeClass('dot-active')
  $(secLink).addClass('dot-active');
});
$('.nav-links.third-link').on('click', function() {
  $(links).removeClass('dot-active')
  $(thirdLink).addClass('dot-active');
});

$('.nav-links.fst-link').hover(function () {
  $(fstLink).toggleClass('dot-hover');
});

$('.nav-links.sec-link').hover(function () {
  $(secLink).toggleClass('dot-hover');
});

$('.nav-links.third-link').hover(function () {
  $(thirdLink).toggleClass('dot-hover');
});

//Capturar dados da LP

  //Imagens
    //Imagens carrosel

    //Imagem seção 1

    //Background seção 2

    //Background seção 3

    //imagens slider

  //textos
    //Caroussel
      //Title carrosel

      //Subtitle carrosel

    //Seção 1
      //Title seção 1

      //Subtitle seção 1

      //Texto seção 1

    //Seção 2
      //Title seção 2

      //Subtitle seção 2

    //Seção 3
      //Title seção 3

      //Subtitle seção 3

  //brand
