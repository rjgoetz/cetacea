<?php
  function set_leftnav_path($folder) {
    $class = 'left-nav-active';
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

<aside class="left-nav">
  <nav>
    <ul>
      <li><a <?php set_leftnav_path("/"); ?>>Overview</a></li>
      <li><a <?php set_leftnav_path("/cl"); ?>>Astronaut CL</a></li>
      <li><a <?php set_leftnav_path("/xl"); ?>>Astronaut XL </a></li>
      <li><a <?php set_leftnav_path("/orbiter-systems"); ?>>System Bundles</a></li>
      <li><a <?php set_leftnav_path("/word-recognition"); ?>>Word Recognition</a></li>
      <li><a <?php set_leftnav_path("/energy-efficient"); ?>>Energy-Efficient</a></li>
      <li><a <?php set_leftnav_path("/installation"); ?>>Installation</a></li>
      <li><a <?php set_leftnav_path("/specs"); ?>>Tech Specs</a></li>
    </ul>
  </nav>
</aside>
