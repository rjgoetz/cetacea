<?php
  function set_subnav_path($folder) {
    $class = 'active';
    $path_URL = $_SERVER['REQUEST_URI'];
    $support_path = $GLOBALS['siteroot'] . '/support';
    $full_path = $support_path . $folder;

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
    <li><a <?php set_subnav_path("/tips"); ?>>Installation &amp; Use Tips<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/troubleshoot"); ?>>Troubleshooting<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/rma"); ?>>Equipment Repair (RMA)<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
    <li><a <?php set_subnav_path("/literature"); ?>>Literature<img src="<?php echo $siteroot; ?>/img/chevron-rt-wht.svg" alt="right chevron"></a></li>
  </ul>
</nav>
