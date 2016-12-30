$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll < 200) {
      $(".navbar").removeClass("scroll-hide");
    }
    if (scroll >= 200 && scroll <=599) {
      $(".navbar").addClass("scroll-hide");
    }
    if (scroll >= 600) {
      $(".navbar").addClass("scroll-fix" );
    }
    if (scroll < 600) {
      $(".navbar").removeClass("scroll-fix");
    }
});