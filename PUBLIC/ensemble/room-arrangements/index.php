<?php include '../../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Room and speaker arrangements - Ensemble | Cetacea Sound</title>
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
              <img class="desktop-img" src="../../img/ensemble-speaker-system-banner.jpg" alt="Ensemble portable speaker system banner">
              <h1 class="category-headline">Ensemble &dash; Portable Desktop Speaker</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <!-- start left nav -->
                  <?php include '../../includes/ensemble-left-nav.php'; ?>
                  <!-- end left nav -->
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>Room Arrangements</h1>

                  <article>
                    <h2>Speaker Placement Diagrams</h2>
                    <div class="row">
                      <div class="diagram">
                        <h3>Conference Room</h3>
                        <img src="../../img/ensemble-conference-table.svg" alt="Ensemble at conference room table">
                      </div>
                      <div class="diagram">
                        <h3>Classroom</h3>
                        <img src="../../img/ensemble-classroom.svg" alt="Ensemble used in a classroom">
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
            <?php include '../../includes/ensemble-sub-nav.php'; ?>
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
