<?php include '../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About Us | Cetacea Sound</title>
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
        <?php include '../includes/page-header.php'; ?>
        <!--end page header-->

        <!--main section-->
        <main class="page">
          <section>
            <div class="desktop-img-wrap">
              <img class="desktop-img" src="../img/company-banner.jpg" alt="Cetacea Sound company banner">
              <h1 class="category-headline">Company</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <!-- start left nav -->
                  <?php include '../includes/company-left-nav.php'; ?>
                  <!-- end left nav -->
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>About Us</h1>
                  <p>
                    Cetacea Sound, pronounced "CE-TAY-SHA", is an audio design and engineering firm that develops speaker and microphone systems for the education, training, and corporate markets. In business for 20 years, Cetacea Sound has built a strong patent portfolio that forms the foundation of its unique designs. The company focuses on the total development and manufacturing of its products in the U.S.A. and has won the respect of industry leaders with the highly touted Astronaut and Ensemble amplified speakers.
                  </p>

                  <article>
                    <h2>Innovative Audio Solutions</h2>
                    <p>
                      Cetacea audio products enhance communication in schools, businesses, and government institutions by providing acoustic clarity across the vocal range that can only be accomplished with high definition sound. By incorporating our acoustic patents and design know-how, students enjoy a level of audio sophistication not found in other speaker designs. Our mission is simple: to develop innovative audio products that deliver unparalleled acoustic performance with simple installation solutions at a reasonable, cost-effective price.
                    </p>
                  </article>

                  <article>
                    <h2>Audio Design Consultation</h2>
                    <p>
                      From our beginnings as an audio consultant to some of the world's largest consumer electronics companies to having won over the technology industry as the leading audio supplier for business presentations, Cetacea Sound has earned multiple acoustic patents to lay claim as one of the most innovative audio companies in the world.
                    </p>
                  </article>
                </div>
                <!-- end column -->
              </div>
              <!-- end page row -->
            </div>
            <!-- end page wrap -->

            <!--sub menu-->
            <?php include '../includes/company-sub-nav.php'; ?>
            <!--end sub menu-->
          </section>
        </main>
        <!--end main section-->

        <!--footer section-->
        <?php include '../includes/page-footer.php'; ?>
        <!--end footer section-->

        <!-- j/s -->
        <?php include '../includes/scripts.php'; ?>
    </body>
</html>
