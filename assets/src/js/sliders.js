import $ from 'jquery';
import './vendor/slick';

const sliders = () => {

    // Homepage Latest Projects Slider
    $('.js-project-titles').slick({
        asNavFor: '.js-project-images',
        appendArrows: $('.js-project-arrows'),
        prevArrow: '<div class="c-homepage-project__single-arrow"><i class="far fa-chevron-left"></i></div>',
        nextArrow: '<div class="c-homepage-project__single-arrow"><i class="far fa-chevron-right"></i></div>',
    });
    $('.js-project-images').slick({
        arrows: false,
        asNavFor: '.js-project-titles',
    });

    // About Page Testimonial Slider
    $('.js-testimonial-slider').slick({
        fade: true,
        appendArrows: $('.js-testimonial-arrows'),
        prevArrow: '<div class="c-testimonial-arrows__single"><i class="far fa-chevron-left"></i></div>',
        nextArrow: '<div class="c-testimonial-arrows__single"><i class="far fa-chevron-right"></i></div>',
        adaptiveHeight: true
    });

    // Single Portfolio Page sliders
    if ($('.js-portfolio-slide__one').length > 1) {
        $('.js-portfolio-slider__one').slick({
            fade: true,
            appendArrows: $('.js-portfolio-arrows__one'),
            prevArrow: '<div class="c-portfolio-block__slider-arrows__single"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="c-portfolio-block__slider-arrows__single"><i class="far fa-chevron-right"></i></div>',
        });
    }

    if ($('.js-portfolio-slide__two').length > 1) {
        $('.js-portfolio-slider__two').slick({
            fade: true,
            appendArrows: $('.js-portfolio-arrows__two'),
            prevArrow: '<div class="c-portfolio-block__slider-arrows__single"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="c-portfolio-block__slider-arrows__single"><i class="far fa-chevron-right"></i></div>',
        });
    }

    if ($('.js-service-slide-one').length > 1) {
        $('.js-service-slider-one').slick({
            fade: true,
            appendArrows: $('.js-service-arrows__one'),
            prevArrow: '<div class="c-services__slider-arrows__single"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="c-services__slider-arrows__single"><i class="far fa-chevron-right"></i></div>',
        });
    }


    if ($('.js-service-slide-two').length > 1) {
        $('.js-service-slider-two').slick({
            fade: true,
            appendArrows: $('.js-service-arrows__two'),
            prevArrow: '<div class="c-services__slider-arrows__single"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="c-services__slider-arrows__single"><i class="far fa-chevron-right"></i></div>',
        });
    }

    if ($('.js-team-slide').length > 1) {
        $('.js-team-slider').slick({
            fade: true,
            appendArrows: $('.js-team-arrows'),
            prevArrow: '<div class="c-team-slider__arrows__single"><i class="far fa-chevron-left"></i></div>',
            nextArrow: '<div class="c-team-slider__arrows__single"><i class="far fa-chevron-right"></i></div>',
        });
    }

};

export default sliders;
