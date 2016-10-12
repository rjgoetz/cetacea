<?php include '../../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News | Cetacea Sound</title>
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
                  <h1>News</h1>

                  <article>
                    <h2>A Brief Introduction to Cetacea</h2>
                    <h3>September 15, 2016</h3>
                    <p>
                      Author: Wikipedia
                    </p>
                    <p>
                      Cetacea, (from Latin cetus "whale" and Greek ketos "huge-fish") are a widely distributed and diverse clade of carnivorous, finned, aquatic marine mammals. They comprise the extant parvorders Odontoceti (toothed whales including dolphins and porpoises), Mysticeti (the baleen whales), and Archaeoceti (the ancestors of modern whales, and now extinct). There are around 89 species of cetaceans, and more than 70 belonging to Odontoceti. While cetaceans were historically thought to have descended from mesonychids, molecular evidence supports them as a relative of Artiodactyls (even-toed ungulates). Cetaceans belong to the order Cetartiodactyla (formed by combining Cetacea + Artiodactyla) and their closest living relatives are hippopotamuses and other hoofed mammals (camels, pigs, and ruminants), having diverged about 50 million years ago.
                    </p>
                  </article>

                  <article>
                    <h2>Radishes are Tasty.</h2>
                    <h3>September 15, 2016</h3>
                    <p>
                      Author: Wikipedia
                    </p>
                    <p>
                      The radish (Raphanus sativus) is an edible root vegetable of the Brassicaceae family that was domesticated in Europe in pre-Roman times. Radishes are grown and consumed throughout the world, being mostly eaten raw as a crunchy salad vegetable. They have numerous varieties, varying in size, flavor, color, and length of time they take to mature. Radishes owe their sharp flavor to the various chemical compounds produced by the plants, including glucosinolate, myrosinase, and isothiocyanate. They are sometimes grown as companion plants and suffer from few pests and diseases. They germinate quickly and grow rapidly, smaller varieties being ready for consumption within a month, while larger daikon varieties take several months. Another use of radish is as cover or catch crop in winter or as a forage crop. Some radishes are grown for their seeds; daikon, for instance, may be grown for oil production. Others are used for sprouting and both roots and leaves are sometimes served cooked or cold.
                    </p>
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
