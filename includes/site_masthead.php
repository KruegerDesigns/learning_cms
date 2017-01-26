<?php if ($page_template == "home") { ?>
  <div class="container masthead">
    <div class="content-overlay">
      <div class="logo">
        <svg><use xlink:href="#icon-logo"/></svg>
      </div>
      <p class="heading">This is a Hero Heading</p>
      <p>This is the content area in the Hero container.</p>
      <p><a href="#" class="cta-button cta-filled">Call To Action</a></p>
    </div>
    <div class="img-overlay"></div>
    <div class="img-background" style="background-image: url('<?= $page_masthead_image_url; ?>');"></div>
  </div>
<?php } else { ?>
  <div class="container masthead">
    <div class="content-overlay">
      <div class="logo">
        <svg><use xlink:href="#icon-logo"/></svg>
      </div>
      <p class="heading"><?= $page_name ?></p>
    </div>
    <div class="img-overlay"></div>
    <div class="img-background" style="background-image: url('<?= $page_masthead_image_url; ?>');"></div>
  </div>
<?php } ?>