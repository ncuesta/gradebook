<?php use_helper('I18N', 'Date') ?>
<?php include_partial('student/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Add a new student', array(), 'messages') ?></h1>

  <?php include_partial('student/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('student/form_header', array('Student' => $Student, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('student/form', array('Student' => $Student, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('student/form_footer', array('Student' => $Student, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
