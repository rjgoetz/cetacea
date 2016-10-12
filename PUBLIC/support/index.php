<?php include '../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Support | Cetacea Sound</title>
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
              <h1 class="category-headline">Support</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <!-- start left nav -->
                  <?php include '../includes/support-left-nav.php'; ?>
                  <!-- end left nav -->
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>Technical Support</h1>
                  <p>
                    In this section you will find helpful tips, FAQ's, and documentation for installing, servicing and troubleshooting your Cetacea Sound equipment. Please choose from the following resources to begin.
                  </p>

                  <article>
                    <h2>Resources</h2>
                    <ul>
                      <li><a href="tips">Installation &amp; Use Tips</a></li>
                      <li><a href="troubleshoot">Troubleshooting Guide</a></li>
                      <li><a href="rma">Equipment Repair (RMA)</a></li>
                      <li><a href="literature">Literature Downloads</a></li>
                    </ul>
                  </article>

                  <article>
                    <h2>Contact Technical Support</h2>
                    <p>
                      Monday to Friday<br>8:00am - 4:00pm, CST
                    </p>
                    <p>
                      U.S.A., Canada, and the Caribbean<br>Tel: (800) 556-1922
                    </p>
                    <p>
                      <a href="mailto:sales@cetaceasound.com">sales@cetaceasound.com</a>
                    </p>
                  </article>

                  <article>
                    <h2>Discontinued Products</h2>
                    <p>
                      Can't find your audio product on our website? Our literature archive contains many technical documents on discontinued products. Check out the <a href="literature">Literature</a> section of our website.
                    </p>
                  </article>
                </div>
                <!-- end column -->
              </div>
              <!-- end page row -->
            </div>
            <!-- end page wrap -->

            <!--sub menu-->
            <?php include '../includes/support-sub-nav.php'; ?>
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
