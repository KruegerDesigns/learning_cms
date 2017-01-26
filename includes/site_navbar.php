<?php
  if ($page_nav_background_color == "") {
    $page_nav_background_color = "#ababab";
  }
?>

<div class="stripe site-navbar">
  <div class="container">
    <div class="navbar">

      <div class="logo">
        <a href="/">
          Learning PHP &amp; MySQL
        </a>
      </div>
      
      <div class="nav-top">
        <?php include 'includes/site_nav.php'; ?>
      </div>
      
      <div class="nav-toggle">
        <a href="#" class="toggle-open">
          Menu
<!--           <span class="toggle-icon"></span> -->
        </a>
      </div>
      
    </div>
  </div>
</div>