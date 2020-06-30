import $ from 'jquery';

const menuToggle = () => { 

    $('.js-menu-toggle').click(function() {
        $('.js-menu').toggleClass('active');
        $('.js-menu-list').toggleClass('custom-animation');
        $('body').toggleClass('menu-open');
        $('html').toggleClass('menu-open');
    });

};

export default menuToggle;