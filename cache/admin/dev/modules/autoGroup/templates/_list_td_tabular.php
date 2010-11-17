<td class="sf_admin_text sf_admin_list_td_number">
  <?php echo link_to($Group->getNumber(), 'group_edit', $Group) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_students">
  <?php echo get_component('group', 'students', array('type' => 'list', 'Group' => $Group)) ?>
</td>
