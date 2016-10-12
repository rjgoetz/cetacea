<?php
$siteroot = $GLOBALS['siteroot'];
?>

<header>
  <!-- start page wrap -->
  <div class="wrap">
    <a href="<?php echo $siteroot; ?>/"><h1><span>Cetacea Sound Corp - Technical Audio for the 21<sup>st</sup> Century Classroom</span></h1></a>
    <!--main navigation-->
    <div class="hamburger">
      <img src="<?php echo $siteroot; ?>/img/hamburger-icon.svg" alt="menu icon">
    </div>
    <nav>
      <ul>
        <li data="search" class="mobile-search">
          <form action="">
            <input type="text" placeholder="Search...">
            <button type="submit" name="search-button"></button>
          </form>
        </li>
        <li data-name="products">Products<span> &amp; Solutions</span>
          <ul>
            <li data="classroom-amplification"><a href="<?php echo $siteroot; ?>/next/">Classroom Amplification</a></li>
            <li data="astronaut"><a href="<?php echo $siteroot; ?>/astronaut/">Astronaut - Ceiling Speaker</a></li>
            <li data="ensemble"><a href="<?php echo $siteroot;?>/ensemble/">Ensemble - Portable Speaker</a></li>
            <li data="orbiter"><a href="<?php echo $siteroot;?>/orbiter/">Orbiter - Wireless Pendant Microphone</a></li>
            <li data="power cabling"><a href="<?php echo $siteroot;?>/cabling-power-options/">Power &amp; Cabling</a></li>
          </ul>
        </li>
        <li data-name="support">Support
          <ul>
            <li data="product-support"><a href="<?php echo $siteroot;?>/support/">Product Support</a></li>
            <li data="literature"><a href="<?php echo $siteroot;?>/support/literature/">Product Literature</a></li>
          </ul>
        </li>
        <li data-name="company">Company
          <ul>
            <li data="about-us"><a href="<?php echo $siteroot;?>/about/">About Us</a></li>
            <li data="efficient-design"><a href="<?php echo $siteroot;?>/about/environment/">Efficient Design</a></li>
            <li data="contact-us"><a href="<?php echo $siteroot;?>/about/contact/">Contact Us</a></li>
            <li data="news"><a href="<?php echo $siteroot;?>/about/news/">News</a></li>
          </ul>
        </li>
        <li data-name="dealers">Dealers
          <ul>
            <li data="dealer-information"><a href="<?php echo $siteroot;?>/dealers/">Dealer Information</a></li>
            <li data="find-a-dealer"><a href="<?php echo $siteroot;?>/dealers/find-a-dealer/">Find a Dealer</a></li>
          </ul>
        </li>
        <li class="search"></li>
      </ul>
      <form class="desktop-search" action="">
        <input type="text" placeholder="Search...">
        <button type="submit" name="search-button"></button>
      </form>
    </nav>
    <!--end main navigation-->
  </div>
  <!-- end page wrap -->
</header>
