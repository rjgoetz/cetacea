<?php
  function set_subnav_path($folder) {
    $class = 'active';
    $path_URL = $_SERVER['REQUEST_URI'];
    $astronaut_path = $GLOBALS['siteroot'] . '/astronaut';
    $full_path = $astronaut_path . $folder;

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
    <li><a <?php set_subnav_path("/cl"); ?>>Astronaut CL<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/xl"); ?>>Astronaut XL<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/orbiter-systems"); ?>>System Bundles<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/word-recognition"); ?>>Word Recognition<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/energy-efficient"); ?>>Energy-Efficient<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/installation"); ?>>Installation<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/specs"); ?>>Tech Specs<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
  </ul>
</nav>
