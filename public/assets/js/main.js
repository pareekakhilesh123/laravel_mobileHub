/*
::
:: Theme Name: Postup - One Page Parallax Template
:: Email: Nourramadan144@gmail.com
:: Author URI: https://themeforest.net/user/ar-coder
:: Author: ar-coder
:: Version: 1.0
::
*/

(function () {
    'use strict';

    // :: Loading
    $(window).on('load', function () {
        $('.loading').fadeOut();
    });

    // :: Add Class Active To Navbar
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > ($('.navbar').height())) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });

    // :: Add Class Active On Go To Header
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 400) {
            $('.scroll-up').addClass('active');
        } else {
            $('.scroll-up').removeClass('active');
        }
    });

    // :: Add Class Active To Search Box
    $('.exit-search-box,.open-search-box').on('click', function (e) {
        e.preventDefault();
        $('.search-box').toggleClass('active');
    });

    // :: Add Class Active To Side Menu Box
    $('.exit-side-menu-box,.open-side-menu-box').on('click', function (e) {
        e.preventDefault();
        $('.side-menu-box').toggleClass('active');
    });

    // :: Scroll Smooth To Go Section
    $('.move-section').on('click', function (e) {
        e.preventDefault();
        var anchorLink = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchorLink.attr('href')).offset().top + 1
        }, 1000);
    });

    // :: CounterUp Plugin
    $('.count').counterUp({
        delay: 3,
        time: 500
    });

    // :: Owl Carousel Plugin
    $('.services-box').owlCarousel({
        items: 4,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        loop: true,
        margin: 30,
        nav: true,
        smartSpeed: 1000,
        autoplay: 2000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    $('.testimonials-box').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        smartSpeed: 1000,
        autoplay: 2000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    $('.sponsors-box').owlCarousel({
        loop: true,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });
    
    // :: Add Class Active To Navbar (.gallery .list-name-gallery li)
    $('.gallery .list-name-gallery li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });

    // :: Setup Mixitup
    var containerEl = document.querySelector('.all-gallery');
    var mixer = mixitup(containerEl);

    // :: Magnific Popup Plugin
    $('.gallery .gallery-img-box .gallery-box-hover').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
}())