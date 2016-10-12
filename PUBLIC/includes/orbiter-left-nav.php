<?php
  function set_leftnav_path($folder) {
    $class = 'left-nav-active';
    $path_URL = $_SERVER['REQUEST_URI'];
    $orbiter_path = $GLOBALS['siteroot'] . '/orbiter';
    $full_path = $orbiter_path . $folder;

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
      <li><a <?php set_leftnav_path("/ergonomics"); ?>>Ergonomics</a></li>
      <li><a <?php set_leftnav_path("/installation"); ?>>Installation</a></li>
      <li><a <?php set_leftnav_path("/system-bundles"); ?>>System Bundles</a></li>
      <li><a <?php set_leftnav_path("/specs"); ?>>Tech Specs</a></li>
    </ul>
  </nav>
</aside>
