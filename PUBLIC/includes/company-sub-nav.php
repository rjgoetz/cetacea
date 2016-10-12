<?php
  function set_subnav_path($folder) {
    $class = 'active';
    $path_URL = $_SERVER['REQUEST_URI'];
    $about_path = $GLOBALS['siteroot'] . '/about';
    $full_path = $about_path . $folder;

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
    <li><a <?php set_subnav_path("/"); ?>>About Us<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/environment"); ?>>Efficient Design<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/contact"); ?>>Contact Us<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/news"); ?>>News<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
  </ul>
</nav>
