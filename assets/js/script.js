window.addEventListener("load",function() {
  $(document).scroll(function() {
  var nav = $('header')[0];
  if ($(this).scrollTop() > $(nav).height()){
    $(nav).addClass("scrolled sticky-top");
    $("#logo-navbar").toggleClass("normal");
    $('#navbarCollapse').children('a.btn').addClass('btn-primary').removeClass('btn-light');
  }
  else{
    $(nav).removeClass("scrolled sticky-top");
    $('#navbarCollapse').children('a.btn').addClass('btn-light').removeClass('btn-primary');
  }
  });
});