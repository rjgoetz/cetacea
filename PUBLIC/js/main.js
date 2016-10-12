$(document).ready(function() {

  var siteroot = "/cetacea2016/PUBLIC";
  // var siteroot = "";

  // // // // // // // // // // // //
  // // Slick JS // // // // // // //
  // // // // // // // // // // // //

  // slider settings
  $(".single-item").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 7500
  });

  var showSlider = function() {
    $(".slider").css("visibility", "visible");
  }

  // // // // // // // // // // // //
  // // mobile menu interaction // //
  // // // // // // // // // // // //

  var menuStatus = false;

  function mainNav() {
    if (menuStatus === false) {
      $(".hamburger img").attr("src", siteroot + "/img/close-icon.svg");
      $(".drawer-menu").css("position", "relative");
      $(window).scrollTop(0);
      menuStatus = true;
    } else {
      $(".hamburger img").attr("src", siteroot + "/img/hamburger-icon.svg");
      menuStatus = false;
    }
  }

  $("header .hamburger").click(function() {
    mainNav();
    $("header nav").slideToggle(100);
  });

  // Desktop Search
  $(".search").click(function() {
    $(".desktop-search").css("display", "block");
  })


  // // // // // // // // // // //
  // // scroll interactions // //
  // // // // // // // // // //

    // submenu sticks to screen bottom when above footer
  function subMenuStick() {
    var
      scrollPosition = window.pageYOffset,
      scrollHeight = document.body.scrollHeight,
      screenHeight = window.innerHeight,
      footerHeight = $("footer").height(),
      stopHeight = scrollHeight - screenHeight - footerHeight
    ;

    if (scrollPosition > stopHeight) {
      $(".drawer-menu").css("position", "relative");
    } else {
      $(".drawer-menu").css("position", "fixed");
    }
  };

  // initialize scroll functions
  window.onscroll = function() {
    if (menuStatus === false) {
      subMenuStick();
    }
  }


  // // // // // // // // // //
  // // Specs Page Nav // // //
  // // // // // // // // // //

  var
    specsNavClass,
    specsDataNum = 0,
    specsArticle = $(".specs"),
    specsImg = $(".specs-imgOff")
  ;

  // set initial display of tech specs product
  if (specsDataNum === 0) {
    $(specsArticle[specsDataNum]).css("display", "block");
    specsImg.eq(specsDataNum).css("display", "block");
  };

  // loop through and match styling to clicked nav item
  $(".specs-nav li").click(function() {
    specsNavClass = $(this).attr("class");
    specsDataNum = $(this).attr("data-number");
    for(var i = 0; i < specsArticle.length; i++) {
      if (i == specsDataNum) {
        $(".specs-nav li").eq(specsDataNum).attr("class", "");
        specsArticle.eq(specsDataNum).css("display", "block");
        specsImg.eq(specsDataNum).css("display", "block");
      } else {
        $(".specs-nav li").eq(Math.abs(specsDataNum-1)).attr("class", "specs-navOff");
        specsArticle.eq(Math.abs(specsDataNum-1)).css("display", "none");
        specsImg.eq(Math.abs(specsDataNum-1)).css("display", "none");
      }
    }
  });


  // // // // // // // // // // // // // // //
  // // Sub Menu "Drawer Menu" Interaction //
  // // // // // // // // // // // // // //

  $(".drawer-menu").click(function() {
    $(".drawer-menu ul").slideToggle(100, function() {
      var
        chevron = $(".sub-menu-btn img").attr("src"),
        chevronSlice = chevron.slice(-6)
      ;
      if (chevronSlice === "up.svg") {
        chevron = chevron.replace(chevronSlice, "dn.svg");
        $(".sub-menu-btn img").attr("src", chevron);
      } else {
        chevron = chevron.replace(chevronSlice, "up.svg");
        $(".sub-menu-btn img").attr("src", chevron);
      }
    });
  });


  // // // // // // // // // // // //
  // Product Gallery Interaction //
  // // // // // // // // // // //

  function findAccordionClass() {
    var
      galleryItems = $(".gallery-item"),
      itemClass
    ;

    for (var i = 0; i < galleryItems.length; i++) {
      var itemClass = $(galleryItems[i]).prop("class");

      if (itemClass === "gallery-item accordion") {
        $(galleryItems[i]).removeClass();
        $(galleryItems[i]).addClass("gallery-item");
      }
    };
  };

  $(".gallery-item").click(function() {
    var
      windowWidth = window.innerWidth,
      imgSrc,
      galleryPos,
      captionText
    ;

    function insertImg() {
      $(".main-gallery-image").css({
        "background" : "url(" + imgSrc + ") no-repeat center top",
        "background-size" : "contain"
      });
      $(".main-gallery-image").attr("data-number", galleryPos);
      $(".gallery").find("figcaption").text(captionText);
    };

    if (windowWidth < 600) {
      if ($(this).prop("class") === "gallery-item accordion") {
        $(this).removeClass();
        $(this).addClass("gallery-item");
      } else {
        findAccordionClass();
        $(this).addClass("gallery-item accordion");
      }
    } else {
      imgSrc = $(this).find("img").attr("src");
      galleryPos = $(this).attr("data-number");
      captionText = $(this).find("p").text();
      insertImg();
    }
  });

  // set initial photo image
  function setMainGalleryImg() {
    var
      gallery = $(".gallery"),
      galleryItems = $(".gallery-item"),
      imgSrc = $(galleryItems[0]).find("img").attr("src")
    ;

    function insertImg() {
      $(".main-gallery-image").css({
        "background" : "url(" + imgSrc + ") no-repeat center top",
        "background-size" : "contain"
      });
    };

    if (gallery) {
      insertImg();
      $(".main-gallery-image").attr("data-number", "0");
    }
  }

  // gallery navigation
  $(".gallery nav div").click(function() {
    var
      galleryItems = $(".gallery-item"),
      mainImgData = $(".main-gallery-image").attr("data-number"),
      imgSrc,
      captionText
    ;

    function setCaptionText(i) {
      captionText = $(galleryItems[i]).find("p").text();
      $(".gallery figcaption").text(captionText);
    }

    function insertImg() {
      $(".main-gallery-image").css({
        "background" : "url(" + imgSrc + ") no-repeat center top",
        "background-size" : "contain"
      });
    };

    if ($(this).prop("class") === "gallery-right") {
      if (mainImgData == (galleryItems.length-1)) {
        // end of gallery > next image is at 0 index

        imgSrc = $(galleryItems[0]).find("img").attr("src");
        insertImg();
        $(".main-gallery-image").attr("data-number", "0");

        setCaptionText(0);
      } else {
        // increment gallery image

        mainImgData++
        $(".main-gallery-image").attr("data-number", mainImgData);

        for (var i = 0; i < galleryItems.length; i++) {
          if (i === mainImgData) {
            imgSrc = $(galleryItems[i]).find("img").attr("src");
            insertImg();
            setCaptionText(i);
          }
        }
      }
    } else {
      if (mainImgData == 0) {
        // beginning of gallery > next image is at gallery length - 1

        imgSrc = $(galleryItems[galleryItems.length-1]).find("img").attr("src");
        insertImg();
        $(".main-gallery-image").attr("data-number", (galleryItems.length-1));
        setCaptionText(galleryItems.length-1);
      } else {
        // decrement gallery image

        mainImgData--
        $(".main-gallery-image").attr("data-number", mainImgData);

        for (var i = 0; i < galleryItems.length; i++) {
          if (i === mainImgData) {
            imgSrc = $(galleryItems[i]).find("img").attr("src");
            insertImg();
            setCaptionText(i);
          }
        }
      }
    }

  });


  // // // // // // // // // // // // // //
  // Image Swap for Display Resolution  //
  // // // // // // // // // // // // //

  var
    pixelRatio = window.devicePixelRatio,
    images = document.getElementsByTagName("img"),
    imageSrc,
    imageType,
    imageSrcLessType,
    imageSrcOutput
  ;

  // loop through document images, collect src value, and append 2x or 3x depending on device pixel ratio
  for (var i = 0; i < images.length; i++) {
    imageSrc = images[i].getAttribute("src");
    imageType = imageSrc.slice(-4);
    imageSrcLessType = imageSrc.slice(0, -4);
    if (imageType != ".svg") {
      if (pixelRatio >= 2 && pixelRatio < 3) {
        imageSrcOutput = imageSrcLessType + "_2x" + imageType;
        images[i].setAttribute("src", imageSrcOutput);
      } else if (pixelRatio >= 3) {
        imageSrcOutput = imageSrcLessType + "_3x" + imageType;
        images[i].setAttribute("src", imageSrcOutput);
      }
    }
  }


  // Responsive graphics: default mobile; change image source for tablet or desktop version of graphic into HTML document.
  var folder;

  function createImgFolderOutput() {
    var
      imgArray = $("img"),
      srcString,
      srcStringBeg,
      srcStringEnd,
      output
    ;

    for (var i = 0; i < imgArray.length; i++) {
      srcString = $(imgArray[i]).attr("src");
      var imageType = srcString.slice(-4);

      if (imageType != ".svg") {

        // does "desktop/" or "tablet/" exist in src?
        if (srcString.search("desktop/") > -1) {

          // prune "desktop/" from srcString
          srcStringBeg = srcString.slice(0, srcString.indexOf("desktop/"), 8);
          srcStringEnd = srcString.slice(srcString.indexOf("desktop/") + 8);

          // concatenate new srcString
          srcString = srcStringBeg + srcStringEnd;
        } else if (srcString.search("tablet/") > -1) {

          // prune "tablet/" from srcString
          srcStringBeg = srcString.slice(0, srcString.indexOf("tablet/"), 7);
          srcStringEnd = srcString.slice(srcString.indexOf("tablet/") + 7);

          // concatenate new srcString
          srcString = srcStringBeg + srcStringEnd;
        }

        var n = srcString.indexOf("img/") + 4;

        output = [srcString.slice(0, n), folder, srcString.slice(n)].join("");

        $(imgArray[i]).attr("src", output);

      }

    }
  }

  function injectImgFolder() {
    var
      windowWidth = window.innerWidth,
      mobile = 414,
      tablet = 767
    ;

    if (windowWidth > mobile && windowWidth <= tablet) {
      folder = "tablet/";

      createImgFolderOutput();
    } else if (windowWidth > tablet) {
      folder = "desktop/";

      createImgFolderOutput();
    } else {
      folder = "";

      createImgFolderOutput();
    }
  }

  // // // // // // // // // // // // // // // // //
  // // // // // HTML5 Video Player // // // // //
  // // // // // // // // // // // // // // // // //

  var showVideo = function() {
    $("#astronaut-video").css("visibility", "visible");
  }


  // call initial functions //
  injectImgFolder();
  showSlider();
  subMenuStick();
  showVideo();

  // // // // // // // // // //
  // window resize functions //
  // // // // // // // // // //

  window.onresize = function() {
    injectImgFolder();
  }

  // set first gallery image
  setMainGalleryImg();

});
