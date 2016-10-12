<?php include '../../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Us | Cetacea Sound</title>
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
                  <h1>Contact Us</h1>

                  <article>
                    <h2>Headquarters</h2>
                    <div class="row">
                      <div>
                        <p>
                          <span>Corporate Address</span>Cetacea Sound Corp<br>14149 21<sup>st</sup> Ave N<br>Plymouth, MN 55447<br>U.S.A.
                        </p>
                        <p>
                          <span>Business Hours</span>Monday to Friday<br>8:00am - 4:00pm, CST
                        </p>
                      </div>
                      <div>
                        <p>
                          <span>Sales &amp; Support</span>Tel: (763) 559-1019<br>Fax: (763) 559-1585
                        </p>
                        <p>
                          U.S.A, Canada, and Caribbean<br>Tel: (800) 556-1922
                        </p>
                        <p>
                          Email: <a href="mailto:sales@cetaceasound.com">sales@cetaceasound.com</a>
                        </p>
                        <p>
                          <a href="#">Find a Dealer</a>
                        </p>
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
