<?php include '../../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Energy-efficient audio design | Cetacea Sound</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:600,300|Rosario' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $siteroot; ?>/css/style.css" type="text/css">
        <script src="<?php echo $siteroot; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--page header-->
        <?php include '../../includes/page-header.php'; ?>
        <!--end page header-->

        <!--main section-->
        <main class="page">
          <section>
            <div class="desktop-img-wrap">
              <img class="desktop-img" src="../../img/company-banner.jpg" alt="Cetacea Sound company banner">
              <h1 class="category-headline">Company</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <!-- start left nav -->
                  <?php include '../../includes/company-left-nav.php'; ?>
                  <!-- end left nav -->
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>Energy-Efficient Audio Design</h1>
                  <p>
                    Cetacea products are designed for minimum environmental impact in manufacturing, use, and disposal. Lightweight components, low power consumption, and patented acoustics all attribute to our standing as a green audio manufacturer.
                  </p>

                  <article>
                    <h2>Commitment to the Environment</h2>
                    <div class="row">
                      <div>
                        <p>
                          Every effort has been made to protect the environment during the manufacture and use of Cetacea products. Electronics meet RoHS restrictions. Power supplies are ENERGY-STAR&reg; rated and meet California's very strict Circle V power consumption and efficiency standards. And, due to the unique properties of our omni-directional acoustic patent, one speaker can impressively produce the same loudness and larger soundfield than 2 or more speakers at &frac14;th the power!
                        </p>
                      </div>
                      <div>
                        <img src="../../img/energy-efficient-green-design.jpg" alt="energy efficient design">
                      </div>
                    </div>

                  </article>

                  <article>
                    <h2>Proud to Be Green</h2>
                    <div class="row">
                      <div>
                        <p>
                          Look for the Proud to Be Green Lite Energy&trade; logo on Cetacea power supplies and literature as a sign of our commitment to the environment and energy conservation.
                        </p>
                      </div>
                      <div>
                        <div class="clearfix">
                          <img class="img-row" src="../../img/energy-star-logo.svg" alt="Energy Star logo">
                          <img class="img-row" src="../../img/circle-5-logo.svg" alt="CEC Circle V logo">
                          <img class="img-row" src="../../img/lite-energy-logo.svg" alt="Cetacea Lite Energy logo">
                        </div>
                      </div>
                    </div>

                  </article>
                </div>
                <!-- end column -->
              </div>
              <!-- end page row -->
            </div>
            <!-- end page wrap -->

            <!--sub menu-->
            <?php include '../../includes/company-sub-nav.php'; ?>
            <!--end sub menu-->
          </section>
        </main>
        <!--end main section-->

        <!--footer section-->
        <?php include '../../includes/page-footer.php'; ?>
        <!--end footer section-->

        <!-- j/s -->
        <?php include '../../includes/scripts.php'; ?>
    </body>
</html>
