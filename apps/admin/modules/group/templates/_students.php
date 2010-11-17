<?php use_helper('JavascriptBase') ?>

<ol>
<?php foreach ($visible as $student): ?>
  <li><?php echo $student ?></li>
<?php endforeach; ?>

<?php if (count($hidden) > 0): ?>
  <div class="students_toggler">
    <?php echo link_to_function(__('Show all'), "jQuery(this).closest('ol').find('.hidden').removeClass('hidden'); jQuery(this).closest('.students_toggler').hide();") ?>
  </div>

  <?php foreach ($hidden as $student): ?>
    <li class="hidden"><?php echo $student ?></li>
  <?php endforeach; ?>
<?php endif; ?>
</ol>
