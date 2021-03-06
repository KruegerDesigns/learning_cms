<?php 
  // Page Settings
  $page_parent = "";
  $page_path = $page_parent."/all-the-things";
  $page_title = $site_title." - All The Things";
  $page_name = "All The Things";
  $page_template = "detail";
  $page_body_class = "all-the-things";
  $page_masthead_image_url = "/img/clouds-20kb.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>This is the H1 heading</h1>
  <figure>
    <img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=500%C3%97400&w=500&h=400" alt="" />
    <figcaption>Random <a href="#">Image Link</a></figcaption>
  </figure>
  
  <p>
    This is the <strong>first paragraph</strong>. Lorem ipsum <em>dolor sit amet</em>, consectetur adipiscing elit. Aenean a. Morbi accumsan laoreet elit id ultrices. Fusce sit amet dignissim <a href="#">nisi metus</a> dolor. Maecenas convallis congue purus sed mattis. Sed velit orci, blandit varius fringilla nec, suscipit pretium sapien.
  </p>
  
  <ul>
    <li>list item</li>
    <li>list item</li>
    <li>list item</li>
  </ul>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  
  <ol>
    <li>list item</li>
    <li>list item</li>
    <li>list item</li>
  </ol>
  
  <h2>The is the H2 heading</h2>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nisi metus. Morbi accumsan laoreet elit id ultrices. Fusce sit amet dignissim dolor. Maecenas convallis congue purus sed mattis. Sed velit orci, blandit varius fringilla nec, suscipit pretium sapien. Integer blandit blandit porta.
  </p>
</div>

<div class="stripe">
<div class="container">
  <h2 class="centered">This is an HTML5 video element</h2>
  <div class="video-wrap">
    <video id="my_video_1"  style="width:100%;height:100%;" controls="controls" width="100%" height="100%" preload="auto" poster="/img/iceland_sailboats_harbour.png">
      <source src="/video/iceland_sailboats_harbour.mp4" type='video/mp4'>
      Your browser does not support the video tag. Please update your browser.
    </video>
  </div>
</div>
</div>

<div class="stripe">
<div class="container">
  <h2 class="centered">This is an HTML5 audio element</h2>
  <div class="audio-wrap">
    <audio controls>
      <source src="/audio/Karl-Verkade-Turn-Your-Eyes.mp3" type="audio/mpeg">
      Your browser does not support the audio tag.
    </audio>
  </div>
</div>
</div>

<div class="container">
  <h3>This is the H3 heading</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nisi metus. Morbi accumsan laoreet elit id ultrices. Fusce sit amet dignissim dolor.</p>
  
  <h4>This is the H4 heading</h4>
  <p>Maecenas convallis congue purus sed mattis. Sed velit orci, blandit varius fringilla nec, suscipit pretium sapien.</p>

  <blockquote>
    <!-- also style the `q` tag like the blockquote tag-->
    <p>This is a quote.</p>
    <footer>— Quote Author</footer>
  </blockquote>
</div>

<div class="stripe darken" style="background-image: url('/img/contact-photo.jpg'); background-size: cover;">
  <div class="container">
    <h2>Contact Form</h2>
    <form action="#" method="post">
      <label for="contact_name">Name</label>
      <input type="text" name="contact_name" id="contact_name" placeholder="Full Name" required/>
      
      <label for="contact_email">Email</label>
      <input type="email" name="contact_email" id="contact_email" placeholder="Email Address" required/>

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
      
      <label for="contact_message">Message</label>
      <textarea name="contact_message" id="contact_message" placeholder="Type message here..."></textarea>
      
      <input type="text" class="contact-business" name="contact_business" />
      
      <button type="submit" class="cta-button cta-filled">Send Message</button>
    </form>
  </div>
</div>

<div class="container">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  
  <h2>Table</h2>
  <div class="table-wrap">
    <table>
      <tbody>
        <tr>
          <th></th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
        </tr>
        <tr>
          <td>Row 1</td>
          <td>Thomas</td>
          <td>Edison</td>
          <td>21</td>
        </tr>
        <tr>
          <td>Row 2</td>
          <td>Marie</td>
          <td>Curie</td>
          <td>32</td>
        </tr>
        <tr>
          <td>Row 3</td>
          <td>Rudolf</td>
          <td>Diesel</td>
          <td>43</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <h2>Flex-grid Portions</h2>
  <div class="flex-grid-halfs">
    <div class="col">
      <h3>.flex-grid-halfs</h3>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nisi metus. Morbi accumsan laoreet elit id ultrices. Fusce sit amet dignissim dolor.
    </div>
    <div class="col">
      <h3>.flex-grid-halfs</h3>
      Integer blandit blandit porta. Nulla eleifend mi id erat accumsan aliquam. In hac habitasse platea dictumst. Nulla congue sapien in nibh mollis nec laoreet ante bibendum.
    </div>
  </div>
  
  <div class="flex-grid-thirds">
    <div class="col">
      <h3>.flex-grid-thirds</h3>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nisi metus. Morbi accumsan laoreet elit id ultrices. Fusce sit amet dignissim dolor.</div>
    <div class="col">
      <h3>.flex-grid-thirds</h3>
      Integer blandit blandit porta. Nulla eleifend mi id erat accumsan aliquam. In hac habitasse platea dictumst. Nulla congue sapien in nibh mollis nec laoreet ante bibendum.</div>
    <div class="col">
      <h3>.flex-grid-thirds</h3>
      Maecenas convallis congue purus sed mattis. Fusce ut gravida orci. Sed velit orci, blandit varius fringilla nec, suscipit pretium sapien.</div>
  </div>
</div>

<?php $page_content = ob_get_clean(); ?>