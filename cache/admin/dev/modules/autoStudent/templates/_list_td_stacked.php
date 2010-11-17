<td colspan="4">
  <?php echo __('%%last_name%% - %%first_name%% - %%number%% - %%group_id%%', array('%%last_name%%' => link_to($Student->getLastName(), 'student_edit', $Student), '%%first_name%%' => $Student->getFirstName(), '%%number%%' => $Student->getNumber(), '%%group_id%%' => $Student->getGroupId()), 'messages') ?>
</td>
