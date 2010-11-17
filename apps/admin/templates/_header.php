<h1><?php echo link_to(__('Gradebook'), '@homepage') ?></h1>

<?php if ($sf_user->isAuthenticated()): ?>
<ul id="gb_menu">
  <li class="gb_menu_item">
    <?php echo link_to(__('Students'), '@student') ?>
  </li>
  <li class="gb_menu_item">
    <?php echo link_to(__('Groups'), '@group') ?>
  </li>
  <li class="gb_menu_item">
    <?php echo link_to(__('Teachers'), '@sf_guard_user') ?>
  </li>
</ul>
<?php endif; ?>

<div class="session_info">
<?php if ($sf_user->isAuthenticated()): ?>
  <?php echo __('You are currently logged in as %user%', array('%user%' => $sf_user->getUsername())) ?>
  (<?php echo link_to(__('Logout'), '@sf_guard_signout') ?>)
<?php else: ?>
  <?php echo __('Not authenticated.') ?>
<?php endif; ?>
</div>
