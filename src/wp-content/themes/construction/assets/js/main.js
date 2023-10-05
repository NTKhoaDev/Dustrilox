// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
// after the API code downloads.
var playerList = [];

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

jQuery(function ($) {
  /*
   * Play youtube video
   */

  $(document).on("click", ".btn-play", function (event) {
    event.preventDefault();
    for (var i = 0; i < playerList.length; i++) {
      playerList[i].stopVideo();
    }
    targetDiv = $(".box-video");
    videoId = $(this).attr("data-video-id");
    var player;
    player = new YT.Player(targetDiv[0], {
      height: "390",
      width: "1006",
      videoId: videoId,
      playerVars: {
        playsinline: 1,
      },
      events: {
        onReady: onPlayerReady,
        onStateChange: function (event) {
          var currentUrl = event.target.getVideoUrl();
          if (event.data == YT.PlayerState.PLAYING) {
            for (var i = 0; i < playerList.length; i++) {
              if (currentUrl != playerList[i].getVideoUrl()) {
                playerList[i].stopVideo();
              }
            }
          }
        },
      },
    });
    playerList.push(player);
    // $(this).remove();
  });
  $(".banner-home .slide-banner").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    arrows: false,
    infinite: true,
    fade: true,
    autoplay: true,
    // autoplaySpeed: 3000,
  });

  $('.banner-home .slide-banner').on('beforeChange', function(event, slick, currentSlide){
    $('.dots-slide .dots-item').removeClass('active');
    $('.dots-slide .dots-item').each(function (index, value) {
      if (index == currentSlide+1) {
        $(value).addClass('active')
      }
    });
  
    
  });
  

  $(".dots-slide .dots-item").on("click", function () {
    var dotIndex = $(this).data("index");
    $(".banner-home .slide-banner").slick("slickGoTo", dotIndex);
    $(".dots-slide .dots-item").removeClass("active");
    $(this).addClass("active");
  });

  if ($('.slide-banner .slide-item').length == 1) {
    $('.banner-home .dots-slide').css('display', 'none');
  }

  $(".feedback .slide-people").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    infinite: true,
    arrows: false,
    variableWidth: true,
    dots: true,
  });

  $(".brand .brands-slide").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 501,
        settings: {
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });

  if ($(window).width() < 1024) {
    $(".accordion .list-card").slick({
      slidesToScroll: 1,
      speed: 500,
      infinite: true,
      variableWidth: true,
      adaptiveHeight: true,
      prevArrow: $(".accordion .btn-prev"),
      nextArrow: $(".accordion .btn-next"),
    });
  }
  var viewportWidth = $(window).width();
  $(window).on("resize", function () {
    viewportWidth = $(window).width();
  });

    // section-accordion
    $(".list-card .acc-card").hover(function () {
      $(".list-card .acc-card").removeClass("active");
      $(this).addClass("active");
      var newCard = $(this).index();
      $(".list-image img").removeClass("show");
      $(".list-image img").eq(newCard).addClass("show");
    });

  $(".accordion .list-image img:first-child").addClass("show");
  $(".accordion .list-card .acc-card:first-child").addClass("active");

  // menu-mobile
  $(".header-wrap .menu-item > a").on("click", function () {
    if (viewportWidth < 1024) {
      if ($(this).parent().hasClass("active")) {
        $(this).parent().find(".sub-menu").slideUp("linear");
        $(this).parent().removeClass("active");
      } else {
        $(".header-wrap .menu-item .sub-menu").slideUp("linear");
        $(this).parent().find(".sub-menu").slideDown("linear");
        $("header-wrap .menu-item").removeClass("active");
        $(this).parent().addClass("active");
      }
    }
  });

  // menu
  $(window).scroll(function () {
    var yTop = $(this).scrollTop();
    if (viewportWidth >= 1024) {
      if (yTop != 0) {
        $("header").addClass("background-header");
      } else {
        $("header").removeClass("background-header");
      }
    }
  });

  $(".toggle img").on("click", function () {
    $(".header-wrap .header-inner").addClass("translate");
    $(".overflow").addClass("visible");
    $("body").css("overflow", "hidden");
  });

  $(".close img").on("click", function () {
    $(".header-wrap .header-inner").removeClass("translate");
    $(".overflow").removeClass("visible");
    $("body").css("overflow", "unset");
  });

  // class section-tab
  $(".tab-wrap .nav-tabs .nav-item:first-child .nav-link").addClass("active");
  $(".tab-wrap .tab-content .tab-pane:first-child").addClass("show active");

  // value circle
  $(function () {
    $(".chart").easyPieChart({
      scaleColor: false,
      barColor: "#DE2022",
      trackColor: "#fff",
      lineCap: "circle",
      lineWidth: 7,
      animate: 1500,
      trackWidth: 2,
    });
  });

  // Get value slider
  var text_value = $("#number-0").siblings("#my-range-0").val();

  $("#number-0").text(text_value + "%");
  $("#my-range-0").on("input", function () {
    text_value = $(this).val();
    $("#number-0").text(text_value + "%");
  });

  var text_value_1 = $("#number-1").siblings("#my-range-1").val();

  $("#number-1").text(text_value_1 + "%");
  $("#my-range-1").on("input", function () {
    text_value_1 = $(this).val();
    $("#number-1").text(text_value_1 + "%");
  });

  var text_value_2 = $("#number-2").siblings("#my-range-2").val();

  $("#number-2").text(text_value_2 + "%");
  $("#my-range-2").on("input", function () {
    text_value_2 = $(this).val();
    $("#number-2").text(text_value_2 + "%");
  });

  // process accordion
  $(".process .process-item").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).find(".des-accordion").slideUp();
      $(this).find(".image-read").removeClass("image-rotate");
    } else {
      $(".process .process-item").removeClass("active");
      $(this).addClass("active");
      $(".process .des-accordion").slideUp();
      $(".process .image-read").removeClass("image-rotate");
      $(this).find(".des-accordion").slideDown();
      $(this).find(".image-read").addClass("image-rotate");
    }
  });

  $(".gform_footer").addClass("btn-submit btn-form");

  $(".banner-home .dots-wrap .dots-item:first-child").addClass("active");

  if (viewportWidth >= 1024) {
    // animation

    var sr = ScrollReveal();

    sr.reveal(
      ".about-us .col-image, .features .col-content, .process .col-image, .team .content-wrap, .news .content-wrap, .member .col-image, .skills .col-range",
      {
        origin: "left",
        distance: "50px",
        duration: 2000,
        delay: 400,
      }
    );
    sr.reveal(
      ".about-us .col-content, .features .col-video, .process .col-content, .member .col-content, .skills .col-image",
      {
        origin: "right",
        distance: "50px",
        duration: 2000,
        delay: 400,
      }
    );
    sr.reveal(
      ".services, .brand, .insights, .history, .tab, .funfact, .feedback, .form-contact .form-wrap, .col-news-single .image-single, .col-bar .box-advertisement, .certificate .col-image",
      {
        origin: "bottom",
        distance: "50px",
        duration: 2000,
        delay: 400,
      }
    );
    sr.reveal(".certificate .col-content", {
      origin: "top",
      distance: "50px",
      duration: 2000,
      delay: 400,
    });
    sr.reveal(
      ".accordion, .manager .manager-item, .team .col-inner, .news .col-inner",
      {
        duration: 2000,
        scale: 0.7,
        delay: 400,
      }
    );
    sr.reveal(
      ".manager .manager-item, .team .col-inner, .history .col-inner, .connect .col-inner, .col-news-single .row-image .image, .col-bar .tag-item, .col-bar .category-item",
      {
        interval: 400,
      }
    );
  }

  let isScrollNotScale = document.getElementsByClassName("isNotScale");
  new simpleParallax(isScrollNotScale, {
    delay: 3,
  });

  // scroll-top
  var top = $(".scroll-top");
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 150) {
      top.fadeIn();
    } else {
      top.fadeOut();
    }
  });

  top.on("click", function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800,
      "linear"
    );
    return false;
  });

  //scroll-down
  if ($(window).width() > 766) {
    $(".video .image-scroll").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: $(".main-content div:nth-child(2)").offset().top,
        },
        500,
        "linear"
      );
    });
  } else {
    $(".video .image-scroll").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: $(".main-content div:nth-child(2)").offset().top,
        },
        500,
        "linear"
      );
    });
  };

  function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  };

  if( $('.study-wrap').length > 0) {
	currentCate = getParameterByName('category');
	$('.tab-news-' + currentCate).trigger('click');
  };

  if ( $('.slide-people .slick-track').children().length == 0 ) {
    $('.slide-people .slick-dots').css('display', 'none');
  };

});
