<?php include '../../includes/siteroot.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Quick and Simple Installation - Orbiter | Cetacea Sound</title>
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
              <img class="desktop-img" src="../../img/orbiter-pendant-microphone-banner.jpg" alt="Orbiter pendant microphone banner">
              <h1 class="category-headline">Orbiter &dash; Pendant Microphone</h1>
            </div>

            <!-- start page wrap -->
            <div class="wrap desktop-wrap">
              <div class="row">
                <!-- start column -->
                <div>
                  <!-- start left nav -->
                  <?php include '../../includes/orbiter-left-nav.php'; ?>
                  <!-- end left nav -->
                </div>
                <!-- end column -->
                <!-- start column -->
                <div>
                  <h1>Installation</h1>
                  <p>
                    The Orbiter is a two component system consisting of a wireless pendant transmitter and a desktop receiver. Quick to install and cost&dash;effective, the Orbiter uses state&dash;of&dash;the&dash;art 2.4&dash;GHz RF that requires less hardware and fewer cables than standard IR systems. The following information illustrates the Orbiter's installation and use simplicity.
                  </p>

                  <article>
                    <h2>Installation Diagram</h2>
                    <div class="row">
                      <div>
                        <p>
                          Shown here, the Orbiter pendant microphone is worn by the teacher and communicates with the desktop receiver. The receiver sends the signal to the Astronaut via source cable (3.5mm stereo or mono).
                        </p>
                      </div>
                      <div>
                        <img src="../../img/astronaut-orbiter-desktop-installation.svg" alt="Astronaut and Orbiter installation diagram">
                      </div>
                    </div>
                  </article>

                  <article>
                    <h2>Installation Considerations</h2>
                    <div class="row">
                      <div>
                        <ul>
                          <li><span>Receiver Location</span>Choose a location for the receiver on a flat surface near an AC outlet and where the majority of lecturing will take place, e.g. the front of the classroom.</li>
                        </ul>
                      </div>
                      <div>
                        <ul>
                          <li><span>Connections</span>The Orbiter microphone connects using two basic cables: one for the external power supply and one for the source cable that connects to an amplified speaker. It also can connect up to 3 separate multimedia devices.</li>
                        </ul>
                      </div>
                    </div>
                  </article>

                  <article>
                    <h2>Desktop Receiver / Multimedia Mixer</h2>
                    <div class="row">
                      <div>
                        <p>
                          The Orbiter desktop receiver is a wireless receiver and source mixer. It sends the wireless microphone signal to the Astronaut speaker system via the provided 50 ft. source cable. It also provides 3 separate line inputs for connecting a computer, smart phone, or CD/DVD/VCR player for added multimedia in the classroom.
                        </p>
                      </div>
                      <div>
                        <img class="img-padding" src="../../img/orbiter-desktop-receiver.jpg" alt="Orbiter desktop receiver">
                      </div>
                    </div>
                  </article>

                  <article>
                    <h2>Using Multiple Transmitters &amp; Receivers</h2>
                    <div class="row">
                      <div>
                        <p>
                          The Orbiter system can daisy&dash;chain together to allow for multiple Orbiter transmitters and receivers to be used with a single speaker system. Please refer to the below diagram for connection instructions.
                        </p>
                      </div>
                      <div>
                        <img src="../../img/orbiter-hookup-daisy.svg" alt="Orbiter daisy-chain hookup diagram">
                      </div>
                    </div>
                  </article>

                  <article>
                    <h2>Feedback Avoidance</h2>
                    <p>
                      The Orbiter, and all microphones for that matter, will experience feedback unless used with care. Feedback is caused by a variety of factors, including speaker and microphone placement, the room environment, and volume.
                    </p>
                    <div class="row">
                      <div>
                        <ul>
                          <li>
                            <span>Volume</span>Set the appropriate volume level for your room with the help of a second person. High microphone volume is a common cause for feedback.
                            <ol>
                              <li>Stand as far away from the speaker as possible but close to the audience and adjust volume until it is loud enough for the audience to hear. Have a second person determine appropriate loudness by standing or sitting in the audience location.</li>
                              <li>Lower volume if any sign of feedback is detected.</li>
                            </ol>
                          </li>
                        </ul>
                        <p class="notice">
                          <span>Note:</span>The appropriate audience volume level may sound low to the person with the transmitter.
                        </p>
                      </div>
                      <div>
                        <ul>
                          <li><span>Speaker Placement</span>Microphone proximity to the speaker is a common cause of feedback. Speakers can easily be relocated with extension cables. <a href="../../about/contact">Contact us</a> for an extension cable kit.</li><br>
                          <li><span>Room Environment</span>Always walk the room to detect sensitive feedback areas. In some cases, these areas will be unavoidable due to the unique properties of the room. Avoid these areas during microphone use.</li>
                        </ul>
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
            <?php include '../../includes/orbiter-sub-nav.php'; ?>
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
