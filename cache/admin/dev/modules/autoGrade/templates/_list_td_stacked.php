<td colspan="3">
  <?php echo __('%%grade%% - %%comments%% - %%created_at%%', array('%%grade%%' => $Grade->getGrade(), '%%comments%%' => $Grade->getComments(), '%%created_at%%' => false !== strtotime($Grade->getCreatedAt()) ? format_date($Grade->getCreatedAt(), "P") : '&nbsp;'), 'messages') ?>
</td>
