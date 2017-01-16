// Makes nav pop up after scrolling past the hero header
// $(window).scroll(function() {    
//     var scroll = $(window).scrollTop();
//     if (scroll < 200) {
//       $(".navbar").removeClass("scroll-hide");
//     }
//     if (scroll >= 200 && scroll <=599) {
//       $(".navbar").addClass("scroll-hide");
//     }
//     if (scroll >= 600) {
//       $(".navbar").addClass("scroll-fix" );
//     }
//     if (scroll < 600) {
//       $(".navbar").removeClass("scroll-fix");
//     }
// });

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    var headerHeight = $(".hero").innerHeight();
    if (scroll < headerHeight) {
      $(".navbar").removeClass("nav-scroll");
      $(".navbar").addClass("nav-top");
    }
    if (scroll >= headerHeight) {
      $(".navbar").removeClass("nav-top");
      $(".navbar").addClass("nav-scroll");
    }
});

