import $ from "jquery";

const headerScroll = () => {

    if (window.location.hostname == 'dev.sixthstory.com') {
        var urlPrefix = '/bartholomew/wp-content/themes/sixthstory/assets/images/';
    } else {
        var urlPrefix = '/wp-content/themes/sixthstory/assets/images/';
    }

    if($(window).scrollTop() >= 75 || !$('body.page-home').length) {

        $('header').addClass('stuck');
        $('.js-logo').attr('src', urlPrefix + 'main-logo.png');

    } else {

        $('header').removeClass('stuck');
        $('.js-logo').attr('src', urlPrefix + 'main-logo-grey.png');

    }
}

export default headerScroll;