<td colspan="2">
  <?php echo __('%%number%% - %%students%%', array('%%number%%' => link_to($Group->getNumber(), 'group_edit', $Group), '%%students%%' => get_component('group', 'students', array('type' => 'list', 'Group' => $Group))), 'messages') ?>
</td>
