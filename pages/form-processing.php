<?php 
  // Page Settings
  $page_title = $site_title." - Form Processing";
  $page_name = "Form Processing";
  $page_template = "detail"; // for body class
  $page_masthead_image_url = "img/clouds-20kb.jpg"; //img/clouds-20kb.jpg

  ob_start(); 
?>

<div class="container centered">
  <h1>A "Leads" Form</h1>
  <p>Please fill in the form below to get started!</p>
</div>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>

<div class="stripe">
  <div class="container">
    <h1>Form results...</h1>
    <p>
      Name: <strong><?= htmlspecialchars($_POST['contact_name']); ?></strong>
      <br> Email: <strong><?= htmlspecialchars($_POST['contact_email']); ?></strong>
      <br> Project Size: <strong><?= htmlspecialchars($_POST['contact_options']); ?></strong>
      <br> Type of Website: <strong><?= htmlspecialchars($_POST['contact_radio']); ?></strong>
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

    <label for="contact_options">How big is the project?</label>
    <div class="select-wrap">
      <select name="contact_options" id="contact_options">
        <option disabled>Available Options</option>
        <option value="Small - Brochure or Portfolio Website">Small - Brochure or Portfolio Website</option>
        <option value="Medium - Blog or Lead Generating Website">Medium - Blog or Lead Generating Website</option>
        <option value="Large - E-commerce or Web App Website">Large - E-commerce or Web App Website</option>
      </select>
    </div>
    
    <fieldset>
      <legend>Is this a personal, or business Website?</legend>
      <label for="contact_radio_one">
        <input type="radio" name="contact_radio" id="contact_radio_one" value="Personal"/>
        Personal
      </label>
      <label for="contact_radio_two">
        <input type="radio" name="contact_radio" id="contact_radio_two" value="Business"/>
        Business
      </label>
    </fieldset>
    
    <label for="contact_message">Message*</label>
    <textarea name="contact_message" id="contact_message" placeholder="Type message here..."><?php if(isset($_POST['contact_message'])) echo htmlspecialchars($_POST['contact_message']); ?></textarea>
    
    <input type="text" class="contact-business" name="contact_business" />
    
    <button type="submit" name="sendForm" class="cta-button cta-filled">Send Message</button>
  </form>
</div>

<?php $page_content = ob_get_clean(); ?>