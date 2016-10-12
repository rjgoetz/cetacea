<?php include 'includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Simple, High-Performance Classroom Audio &amp; Microphone Systems | Cetacea Sound</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:600,300|Rosario' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="slick/slick.css" type="text/css">
        <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
        <link href="http://vjs.zencdn.net/5.11.7/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $siteroot; ?>/css/style.css" type="text/css">
        <script src="<?php echo $siteroot; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
      </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--page header-->
        <?php include 'includes/page-header.php'; ?>
        <!--end page header-->


        <main class="page">
          <div class="desktop-img-wrap">
            <!-- begin slider -->
            <div class="slider single-item">
              <div class="home-banner">
                <div>
                  <h1>Astronaut + Orbiter<span>Complete Classroom Amplification</span></h1>
                  <a href="next">Learn more &nbsp;></a>
                </div>
                <img class="slider-mobile" src="img/next-home-slider.jpg" alt="Astronaut and Orbiter classroom amplification system">
                <img class="slider-tablet" src="img/next-home-slider-banner.jpg" alt="Astronaut and Orbiter classroom amplification system">
              </div>
              <div class="home-banner">
                <div>
                  <h1>Astronaut<span>Ceiling Mounted Speaker System</span></h1>
                  <a href="astronaut">Learn more  &nbsp;></a>
                </div>
                <img class="slider-mobile" src="img/astronaut-home-slider.jpg" alt="Astronaut ceiling mounted speaker system">
                <img class="slider-tablet" src="img/astronaut-home-slider-banner.jpg" alt="Astronaut ceiling mounted speaker system">
              </div>
              <div class="home-banner">
                <div>
                  <h1>Orbiter<span>Wireless Pendant Microphone</span></h1>
                  <a href="orbiter">Learn more &nbsp;></a>
                </div>
                <img class="slider-mobile" src="img/orbiter-home-slider.jpg" alt="Orbiter wireless pendant microphone">
                <img class="slider-tablet" src="img/orbiter-home-slider-banner.jpg" alt="Orbiter wireless pendant microphone">
              </div>
              <div class="home-banner">
                <div>
                  <h1>Ensemble<span>Portable Speaker System</span></h1>
                  <a href="ensemble">Learn more &nbsp;></a>
                </div>
                <img class="slider-mobile" src="img/ensemble-home-slider.jpg" alt="Ensemble portable speaker system">
                <img class="slider-tablet" src="img/ensemble-home-slider-banner.jpg" alt="Ensemble portable speaker system">
              </div>
            </div>
            <!-- </div> -->
            <!--end slider-->
          </div>

          <!--why cetacea section-->
          <section>
            <div class="wrap desktop-wrap">
              <article class="why-cetacea">
                <h2>Speaker &amp; Microphone Systems for <span>Education &amp; Training</span></h2>
                <div class="row">
                  <div>
                    <h3>1</h3>
                    <p>
                      Innovative audio products designed and manufactured in the U.S.A.
                    </p>
                  </div>
                  <div>
                    <h3>2</h3>
                    <p>
                      Emphasis on installation simplicity and low total cost of ownership.
                    </p>
                  </div>
                  <div>
                    <h3>3</h3>
                    <p>
                      Pristine vocal clarity for improved communication and learning.
                    </p>
                  </div>
                </div>
              </article>
              <!-- <article class="video">
                <h2>Watch the Video</h2>
                <img src="img/astronaut-video.jpg" alt="">
                <iframe width="320" height="180" src="https://www.youtube.com/embed/k9zSihlpLzY" frameborder="0" allowfullscreen></iframe>
              </article> -->
            </div>
          </section>
          <!-- end why cetacea section -->

          <div class="desktop-img-wrap">
            <!-- video section -->
            <section class="video">
              <div class="row">
                <div>
                  <h2>Watch the video</h2>
                </div>
                <div>
                  <video id="astronaut-video" class="video-js vjs-big-play-centered vjs-4-3" controls preload="none" poster="img/astronaut-video-player.jpg"  data-setup="{fluid: true}">
                    <source src="video/astronaut_video-final.mp4" type="video/mp4">
                    <source src="video/astronaut_video-final.webm" type="video/webm">
                    <source src="video/astronaut_video-final.ogv" type="video/ogg">
                    <p>Your browser does not support the video tag.</p>
                  </video>
                </div>
              </div>
            </section>
            <!-- end video section -->

            <!--promo section-->
            <section class="home-promos">
              <div class="row">
                <div>
                  <a href="astronaut"><img src="img/astronaut-button.jpg" alt="Astronaut ceiling-mounted speaker system"></a>
                  <figure>
                    <figcaption>
                      Astronaut<span>Ceiling Speaker System<span>
                    </figcaption>
                  </figure>
                </div>
                <div>
                  <a href="ensemble"><img src="img/ensemble-button.jpg" alt="Ensemble portable speaker system"></a>
                  <figure>
                    <figcaption>
                      Ensemble<span>Portable Speaker System<span>
                    </figcaption>
                  </figure>
                </div>
                <div>
                  <a href="orbiter"><img src="img/orbiter-button.jpg" alt="Orbiter wireless pendant microphone"></a>
                  <figure>
                    <figcaption>
                      Orbiter<span>Wireless Pendant Microphone<span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </section>
            <!--end promo section-->
          </div>
        </main>
        <!--end main section-->

        <!--footer section-->
        <?php include 'includes/page-footer.php'; ?>
        <!--end footer section-->

        <!-- js -->
        <?php include 'includes/scripts.php'; ?>
        </script>
    </body>
</html>
