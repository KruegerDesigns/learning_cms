<?php 
  include 'includes/app_functions.php';

  // Lead Form
  if(isset($_POST['sendForm'])) {
    // call form handler
    $errorMsg = validateFeedbackForm($_POST);
  }

  // Anonymous Form
  if(isset($_POST['sendAnonymous'])) {
    // call form handler
    $errorMsg = validateSendAnonymous($_POST);
  }

  // Databse Setup Script
  if(isset($_POST['createDatabase'])) {
    // call form handler
    CreateTable();
  }

  // Site Settings
  $site_title = "Modern Theme";

  // Get the page name and match it with the correct page partial.
  // These partials will be replaced with a database eventually.
  $page_url=$_GET['page_url'];
  $pages = glob('pages/*.php',GLOB_BRACE);

  if (in_array('pages/'.$page_url.'.php', $pages)) {
    include('pages/'.$page_url.'.php');
  } else if($page_url=='') {
    include('pages/home.php');
  } else {
    include('pages/error.php');
  }
?>

<?php include 'includes/site_head.php'; ?>
<?php include 'includes/site_svgs.php'; ?>

<div id="wrap">

  <!-- Navigation Bar -->
  <?php include 'includes/site_navbar.php'; ?>

  <!-- Masthead -->
  <?php include 'includes/site_masthead.php'; ?>
  
  <!-- Content -->
  <?= $page_content ?>
  
  <!-- Footer -->
  <?php include 'includes/site_footer.php'; ?>
    
</div>
<?php include 'includes/site_footer_scripts.php'; ?>
</body>
</html>