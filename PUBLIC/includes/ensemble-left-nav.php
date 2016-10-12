<?php
  function set_leftnav_path($folder) {
    $class = 'left-nav-active';
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

<aside class="left-nav">
  <nav>
    <ul>
      <li><a <?php set_leftnav_path("/"); ?>>Overview</a></li>
      <li><a <?php set_leftnav_path("/public-address"); ?>>Public Address</a></li>
      <li><a <?php set_leftnav_path("/product-configurations"); ?>>Systems</a></li>
      <li><a <?php set_leftnav_path("/hookup-diagrams"); ?>>Hookup Diagrams</a></li>
      <li><a <?php set_leftnav_path("/room-arrangements"); ?>>Room Arrangements</a></li>
      <li><a <?php set_leftnav_path("/specs"); ?>>Tech Specs</a></li>
    </ul>
  </nav>
</aside>
