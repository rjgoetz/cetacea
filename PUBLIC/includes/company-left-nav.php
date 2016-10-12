<?php
  function set_leftnav_path($folder) {
    $class = 'left-nav-active';
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

<aside class="left-nav">
  <nav>
    <ul>
      <li><a <?php set_leftnav_path("/"); ?>>About Us</a></li>
      <li><a <?php set_leftnav_path("/environment"); ?>>Efficient Design</a></li>
      <li><a <?php set_leftnav_path("/contact"); ?>>Contact Us</a></li>
      <li><a <?php set_leftnav_path("/news"); ?>>News</a></li>
    </ul>
  </nav>
</aside>
