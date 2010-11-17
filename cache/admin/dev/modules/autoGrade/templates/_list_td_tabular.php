<td class="sf_admin_text sf_admin_list_td_grade">
  <?php echo $Grade->getGrade() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_comments">
  <?php echo $Grade->getComments() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($Grade->getCreatedAt()) ? format_date($Grade->getCreatedAt(), "P") : '&nbsp;' ?>
</td>
