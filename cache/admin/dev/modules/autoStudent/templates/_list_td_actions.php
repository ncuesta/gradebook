<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($Student, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <li class="sf_admin_action_grades">
      <?php echo link_to(__('Grades', array(), 'messages'), 'student/grades?id='.$Student->getId(), array()) ?>
    </li>
    <?php echo $helper->linkToDelete($Student, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>
