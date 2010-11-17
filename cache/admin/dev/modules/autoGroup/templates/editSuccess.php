<?php use_helper('I18N', 'Date') ?>
<?php include_partial('group/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit group information', array(), 'messages') ?></h1>

  <?php include_partial('group/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('group/form_header', array('Group' => $Group, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('group/form', array('Group' => $Group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('group/form_footer', array('Group' => $Group, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
