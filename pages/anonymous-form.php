<?php 
  // Page Settings
  $page_title = "Anonymous Form";
  $page_name = "Anonymous Form";
  $page_template = "detail"; // for body class
  $page_masthead_image_url = ""; //img/clouds-20kb.jpg

  ob_start(); 
?>

<div class="container centered">
  <h1>An Anonymous Form</h1>
  <p>Please fill in the form below to get started!</p>
</div>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>

<div class="stripe">
  <div class="container">
    <h1>Form results...</h1>
    <p>
      Name: <strong><?= htmlspecialchars($_POST['contact_name']); ?></strong>
      <br> Email: <strong><?= htmlspecialchars($_POST['contact_email']); ?></strong>
      <br> Subject: <strong><?= htmlspecialchars($_POST['contact_subject']); ?></strong>
      <br> Message: <strong><?= htmlspecialchars($_POST['contact_message']); ?></strong>
    </p>
  </div>
</div>

<?php } ?>

<div class="container">
  <h2>Contact Form</h2>

  <?php if(isset($errorMsg) && $errorMsg) {
    echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
  } ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="contact_name">Name*</label>
    <input type="text" name="contact_name" id="contact_name" placeholder="Full Name" value="<?php if(isset($_POST['contact_name'])) echo htmlspecialchars($_POST['contact_name']); ?>"
    required/>
    
    <label for="contact_email">Email*</label>
    <input type="email" name="contact_email" id="contact_email" placeholder="Email Address" value="<?php if(isset($_POST['contact_email'])) echo htmlspecialchars($_POST['contact_email']); ?>"
    required/>
    
    <label for="contact_subject">Subject*</label>
    <input type="text" name="contact_subject" id="contact_subject" placeholder="Subject" value="<?php if(isset($_POST['contact_subject'])) echo htmlspecialchars($_POST['contact_subject']); ?>"
    required/>

    <label for="contact_message">Message*</label>
    <textarea name="contact_message" id="contact_message" placeholder="Type message here..."><?php if(isset($_POST['contact_message'])) echo htmlspecialchars($_POST['contact_message']); ?></textarea>
    
    <input type="text" class="contact-business" name="contact_business" />
    
    <button type="submit" name="sendAnonymous" class="cta-button cta-filled">Send Message</button>
  </form>
</div>

<?php $page_content = ob_get_clean(); ?>