/* Vendor Scripts */
import $ from "jquery";
import "./vendor/slick";
import { WOW } from "wowjs";

/* Our functions */
import sliders from "./sliders";
import smoothScroll from "./smooth-scroll";
import headerScroll from "./header-scroll";
import menuToggle from "./menu-toggle";

$(document).ready(() => {
  // Initiate WOWjs
  const wow = new WOW();
  wow.init();

  smoothScroll();
  sliders();
  headerScroll();
  menuToggle();

  //WPCF7 Thank you Popup - html is in footer.php
  var wpcf7Elm = document.querySelector(".wpcf7");
  $(".wpcf7").on("wpcf7mailsent", function() {
    $("#js-popup").addClass("active");
  });

  $(".popup-close").click(function() {
    $("#js-popup").removeClass("active");
  });
});

$(window).scroll(function() {
  headerScroll();
});
