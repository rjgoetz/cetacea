<?php include '../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dealer Information | Cetacea Sound</title>
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
              <img class="desktop-img" src="../img/dealer-banner.jpg" alt="Cetacea Dealer page banner">
              <h1 class="category-headline">Dealers</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <aside class="left-nav">
                    <nav>
                      <ul>
                        <li class="left-nav-active"><a href="./">Dealer Information</a></li>
                        <li><a href="find-a-dealer">Find a Dealer</a></li>
                      </ul>
                    </nav>
                  </aside>
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>Dealer Information</h1>
                  <p>
                    Cetacea Sound Corp, headquartered in Plymouth, MN, is a design and engineering firm that develops innovative audio and wireless microphone systems for the education and business markets. Our channel partners are authorized audio-visual dealers and resellers from across the country and internationally. The Company and our desired customers are members of the ICIA.
                  </p>
                  <p>
                    <img class="img-padding" style="width: 200px" src="../img/infocomm-logo.svg" alt="InfoComm Logo">
                  </p>

                  <article>
                    <h2>About Cetacea Sound</h2>
                    <p>
                      Cetacea Sound's patented audio innovations have improved presentations for 20 years. Designed per application for the needs of teachers, trainers and business professionals, the Company's audio and microphone systems deliver unparalleled acoustic performance, energy-efficiency, and cost-effectiveness to the industry. The Company holds multiple international acoustic patents.
                    </p>
                    <h3>Our Markets</h3>
                    <ul>
                      <li>Education</li>
                      <li>Government</li>
                      <li>Commercial</li>
                      <li>Industrial</li>
                    </ul>
                    <p class="link-p">
                      <a href="../about">Learn more about us. ></a>
                    </p>
                  </article>

                  <article>
                    <h2>Become a Dealer</h2>
                    <p>
                      By becoming a dealer or reseller of Cetacea Sound products, your success is ensured by unique product solutions, a powerful technical team, and co-marketing opportunities. Authorization to become a new dealer or reseller is based on current Cetacea regional sales needs, your business' unique commitment to the audio-visual industry and the markets we serve, and our approval of the necessary new-dealer application forms. For consideration, please review and complete the company policies and application documents found on the left side of this page. Once completed, submit your application forms by mail, fax or email.
                    </p>
                    <p>
                      <span>Mail</span>Cetacea Sound Corp<br>14149 21<sup>st</sup> Ave N<br>Plymouth, MN 55447<br>U.S.A.
                    </p>
                    <p>
                      <span>Fax</span>(763) 559-1585
                    </p>
                    <p>
                      <span>Email</span><a href="mailto:sales@cetaceasound.com">sales@cetaceasound.com</a>
                    </p>
                  </article>
                </div>
                <!-- end column -->
              </div>
              <!-- end page row -->
            </div>
            <!-- end page wrap -->

            <!--sub menu-->
            <nav class="drawer-menu">
              <div>
                <div class="sub-menu-btn">
                  <img src="../img/chevron-up.svg" alt="up chevron">
                </div>
              </div>
              <ul>
                <li><a class="active" href="./">Dealer Information<img src="../img/chevron-rt-wht.svg" alt="right chevron"></a></li>
                <li><a href="find-a-dealer">Find a Dealer<img src="../img/chevron-rt-wht.svg" alt="right chevron"></a></li>
              </ul>
            </nav>
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
