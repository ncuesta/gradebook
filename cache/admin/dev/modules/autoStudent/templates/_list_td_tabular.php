<td class="sf_admin_text sf_admin_list_td_last_name">
  <?php echo link_to($Student->getLastName(), 'student_edit', $Student) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_first_name">
  <?php echo $Student->getFirstName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_number">
  <?php echo $Student->getNumber() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_group_id">
  <?php echo $Student->getGroupId() ?>
</td>
