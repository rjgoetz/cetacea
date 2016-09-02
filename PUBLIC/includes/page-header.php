<?php
$siteroot = '/cetacea2016/PUBLIC';
// $siteroot = '';
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
        <li data="products">Products<span> &amp; Solutions</span>
          <ul>
            <li data="classroom-amplification"><a href="<?php echo $siteroot; ?>/next/">Classroom Amplification</a></li>
            <li data="astronaut"><a href="<?php echo $siteroot; ?>/astronaut/">Astronaut - Ceiling Speaker</a></li>
            <li data="ensemble"><a href="<?php echo $siteroot;?>/ensemble/">Ensemble - Portable Speaker</a></li>
            <li data="orbiter"><a href="<?php echo $siteroot;?>/orbiter/">Orbiter - Wireless Pendant Microphone</a></li>
            <li data="power cabling"><a href="#">Power &amp; Cabling</a></li>
          </ul>
        </li>
        <li data="support">Support
          <ul>
            <li data="product-support"><a href="#">Product Support</a></li>
            <li class="lit-menu">Literature - <a href="#">en</a> / <a href="#">es</a> / <a href="#">fr</a></li>
          </ul>
        </li>
        <li data="company">Company
          <ul>
            <li data="about-us"><a href="#">About Us</a></li>
            <li data="news-center"><a href="#">News Center</a></li>
            <li data="contact-us"><a href="#">Contact Us</a></li>
            <li data="media-resources"><a href="#">Media Resources</a></li>
          </ul>
        </li>
        <li data="dealers">Dealers
          <ul>
            <li data="dealer-information"><a href="#">Dealer Information</a></li>
            <li data="find-a-dealer"><a href="#">Find a Dealer</a></li>
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
