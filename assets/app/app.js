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

$('.nav-links.fst-link').hover(function() {
    $(fstLink).toggleClass('dot-hover');
});

$('.nav-links.sec-link').hover(function() {
    $(secLink).toggleClass('dot-hover');
});

$('.nav-links.third-link').hover(function() {
    $(thirdLink).toggleClass('dot-hover');
});

var lastScrollTop = window.innerHeight;

$(window).on('scroll', function() {

    var scroll = $(this).scrollTop();

    if (scroll >= lastScrollTop) {

        $('.navbar-base').addClass('nav-base_opc');
        $('.nav-links').removeClass('clr-white');

    } else {

        $('.navbar-base').removeClass('nav-base_opc');
        $('.nav-links').addClass('clr-white').fadeIn(3000);

    }
});