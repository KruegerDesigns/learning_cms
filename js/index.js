$(document).ready(function(){

  if($(window).scrollTop() == 0){
    $(".site-navbar").removeClass("nav-scroll");
    $(".site-navbar").addClass("nav-top");
  }

  // Mobile menu toggle
  $(".nav-toggle a").on("click", function(e){
    e.preventDefault();
    $(this).toggleClass("active");
    $(".nav-top").toggleClass("open");
  });

  // Open drop-down menu
  $(".nav-top ul li a").bind("click", function(desktopDrop) {
    if($(this).closest("li").children("ul").length) {
      desktopDrop.preventDefault();
      desktopDrop.stopPropagation();
      $(this).toggleClass("active");
      $(this).closest("li").children("ul").toggleClass("expand");
    }
  });

  // Hide when clicking outside of drop-down Menu
  $(window).bind("click", function(desktopCollapse) {
    $(".nav-top ul li a").removeClass("active");
    $(".nav-top ul li ul").removeClass("expand");
  });

  // Toggle Editor Overlay
  $('#showPageSettings').on('click', function(e){
    e.preventDefault();
    $('.overlay-settings').addClass('visible');
  });
  $('#hidePageSettings').on('click', function(e){
    e.preventDefault();
    $('.overlay-settings').removeClass('visible');
  });

  if ( $("video,audio").length ) {
    // Media Element Javascript Settings
    $("video,audio").mediaelementplayer({
      // if the <video width> is not specified, this is the default
      defaultVideoWidth: 760,
      // if the <video height> is not specified, this is the default
      defaultVideoHeight: 427.5,
      // if set, overrides <video width>
      videoWidth: -1,
      // if set, overrides <video height>
      videoHeight: -1,
      // width of audio player
      audioWidth: 760,
      // height of audio player
      audioHeight: 40,
      // initial volume when the player starts
      startVolume: 0.8,
      // useful for <audio> player loops
      loop: false,
      // enables Flash and Silverlight to resize to content size
      enableAutosize: true,
      // the order of controls you want on the control bar (and other plugins below)
      features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
      // Hide controls when playing and mouse is not over the video
      alwaysShowControls: true,
      // force iPad's native controls
      iPadUseNativeControls: false,
      // force iPhone's native controls
      iPhoneUseNativeControls: false, 
      // force Android's native controls
      AndroidUseNativeControls: false,
      // forces the hour marker (##:00:00)
      alwaysShowHours: false,
      // show framecount in timecode (##:00:00:00)
      showTimecodeFrameCount: false,
      // used when showTimecodeFrameCount is set to true
      framesPerSecond: 25,
      // turns keyboard support on and off for this instance
      enableKeyboard: true,
      // when this player starts, it will pause other players
      pauseOtherPlayers: true,
      // array of keyboard commands
      keyActions: []
    });
  };

});

// Nav Scroll 
$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  var navHeight = $(".site-navbar").innerHeight();
  var headerHeight = $(".masthead").innerHeight();
  var scrollToggleHeight = headerHeight - navHeight;
  if (scroll < scrollToggleHeight) {
    $(".site-navbar").removeClass("nav-scroll");
    $(".site-navbar").addClass("nav-top");
  }
  if (scroll >= scrollToggleHeight) {
    $(".site-navbar").removeClass("nav-top");
    $(".site-navbar").addClass("nav-scroll");
  }
});
