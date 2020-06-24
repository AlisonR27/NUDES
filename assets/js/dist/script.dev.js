"use strict";

window.addEventListener("load", function () {
  $(document).scroll(function () {
    var nav = $('header')[0];
    $(nav).toggleClass("scrolled sticky-top", $(this).scrollTop() > $(nav).height());
    $("#logo-navbar").toggleClass("normal");
  });
});