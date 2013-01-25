<div class='filebrowser-thumbnail'>
  <div class="fb-img"><?php print $thumbnail ?></div>
  <div class='title'>
  	<?php echo $description ?><br/>
    <a href='<?php print $href?>'><?php echo t('download') ?></a>
    <?php if ($new) print $new ?>
  </div>
</div>