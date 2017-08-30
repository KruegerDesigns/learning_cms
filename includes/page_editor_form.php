<div class="container overlay-toggle-show">
  <svg class="edit-icon"><use xlink:href="#icon-edit"/></svg>
  <a id="showPageSettings" href="javascript:void(0);">Show Page Settings</a>
</div>

<div class="overlay-settings" style="display: none;">
  <div class="overlay-wrap container">
    
    <div class="overlay-toggle-hide">
      <svg class="edit-icon"><use xlink:href="#icon-edit"/></svg>
      <a id="hidePageSettings" href="javascript:void(0);">Hide Page Settings</a>
    </div>

    <h2>Edit Page</h2>

    <?php if(isset($errorMsg) && $errorMsg) {
      echo "<p style=\"color: red;\">*",htmlspecialchars($errorMsg),"</p>\n\n";
    } ?>

    <form action="<?= '/'.$_GET['page_url']; ?>" method="post" novalidate>
      <label for="edit_content">Replace Page Content</label>
      <textarea name="edit_content" id="edit_content" placeholder="Type message here..."><?php if(isset($_POST['edit_content'])) echo htmlspecialchars($_POST['edit_content']); ?></textarea>
      
      <label for="edit_secret">Password</label>
      <input type="password" name="edit_secret" id="edit_secret" value="<?php if(isset($_POST['edit_secret'])) echo htmlspecialchars($_POST['edit_secret']); ?>" required/>

      <label for="edit_confirm">Confirm Changes?
        <input type="checkbox" name="edit_confirm" id="edit_confirm" value="confirmed" value="<?php if(isset($_POST['edit_confirm'])) echo htmlspecialchars($_POST['edit_confirm']); ?>" required/>
      </label>

      <button type="submit" name="editPage" class="cta-button cta-filled">Publish Changes</button>
    </form>

  </div>
</div>