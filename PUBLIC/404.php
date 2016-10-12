<?php include 'includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Page Not Found | Cetacea Sound</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:600,300|Rosario' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="slick/slick.css" type="text/css">
        <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
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

        <!-- start main section -->
        <main class="page">
          <section>
            <div class="wrap desktop-wrap">
              <h1>Page Not Found</h1>
              <article class="error-404">
                <h2>Error 404</h2>
                <p class="notice">
                  Sorry, but the page you were trying to view does not exist. <a href="<?php echo $siteroot; ?>">Find your way back home. &nbsp;></a>
                </p>                
              </article>
            </div>
          </section>
        </main>
        <!-- end main section -->

        <!--footer section-->
        <?php include 'includes/page-footer.php'; ?>
        <!--end footer section-->

        <!-- js -->
        <?php include 'includes/scripts.php'; ?>
        </script>
    </body>
    </html>
