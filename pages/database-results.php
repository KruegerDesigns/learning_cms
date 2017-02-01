<?php 
  // Page Settings
  $page_title = "Modern Theme - Form Results";
  $page_name = "Database Experiments";
  $page_template = "detail";
  $page_masthead_image_url = "/img/database.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Database Results</h1>
  <p>On this page I'm going to try and echo out different MySQL commands from functions I've made. Use <a href="/form-processing">the form</a> to see more entrees.</p>

  <h2>The Latest Entry</h2>
  Below is the last entry posted through the contact form.
  <div class="table-wrap">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Options</th>
        <th>Radio</th>
        <th>Message</th>
        <th>Date Posted</th>
      </tr>
      <?php EchoNewestLeads(); ?>
    </table>
  </div>
  
  <h2>Current Data Entrees (Leads Table)</h2>
  Below is a table of the current data that has been posted through the contact form.
  <div class="table-wrap">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Options</th>
        <th>Radio</th>
        <th>Message</th>
        <th>Date Posted</th>
      </tr>
      <?php EchoAllLeads(); ?>
    </table>
  </div>

</div>

<?php $page_content = ob_get_clean(); ?>