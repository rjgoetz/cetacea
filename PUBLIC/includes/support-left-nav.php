<?php
  function set_leftnav_path($folder) {
    $class = 'left-nav-active';
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

<aside class="left-nav">
  <nav>
    <ul>
      <li><a <?php set_leftnav_path("/"); ?>>Overview</a></li>
      <li><a <?php set_leftnav_path("/tips"); ?>>Installation &amp; Use Tips</a></li>
      <li><a <?php set_leftnav_path("/troubleshoot"); ?>>Troubleshooting Guide</a></li>
      <li><a <?php set_leftnav_path("/rma"); ?>>Equipment Repair (RMA)</a></li>
      <li><a <?php set_leftnav_path("/literature"); ?>>Literature Downloads</a></li>
    </ul>
  </nav>
</aside>
