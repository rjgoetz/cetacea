<?php
  function set_subnav_path($folder) {
    $class = 'active';
    $path_URL = $_SERVER['REQUEST_URI'];
    $ensemble_path = $GLOBALS['siteroot'] . '/ensemble';
    $full_path = $ensemble_path . $folder;

    if ($path_URL == $full_path) {
      echo 'class = "' . $class . '"' . ' ' . 'href ="' . $full_path . '"';
    } elseif (strpos($path_URL, $folder)) {
      echo 'class = "' . $class . '"' . ' ' . 'href ="' . $full_path . '"';
    } else {
      echo 'href ="' . $full_path . '"';
    }
  }
?>

<nav class="drawer-menu">
  <div>
    <div class="sub-menu-btn">
      <img src="<?php echo $siteroot; ?>/img/chevron-up.svg" alt="up chevron">
    </div>
  </div>
  <ul>
    <li><a <?php set_subnav_path("/"); ?>>Overview<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/public-address"); ?>>Public Address<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/product-configurations"); ?>>Systems<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/hookup-diagrams"); ?>>Hookup Diagrams<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/room-arrangements"); ?>>Room Arrangements<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/specs"); ?>>Tech Specs<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
  </ul>
</nav>
