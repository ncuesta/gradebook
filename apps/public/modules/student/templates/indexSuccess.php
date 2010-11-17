<?php use_helper('JavascriptBase') ?>

<h1><?php echo __('Grades list') ?></h1>

<table class="grades">
  <thead>
    <tr>
      <th>
        <?php echo __('Number') ?>
        <input type="text" placeholder="<?php echo __('Search by number') ?>" onkeyup="search(jQuery(this).val(), '.number', jQuery(this).closest('.grades'))" />
      </th>
      <th>
        <?php echo __('Name') ?>
        <input type="text" placeholder="<?php echo __('Search by name') ?>" onkeyup="search(jQuery(this).val(), '.name', jQuery(this).closest('.grades'))" />
      </th>
      <th>
        <?php echo __('Group') ?>
        <input type="text" placeholder="<?php echo __('Search by group number') ?>" onkeyup="search(jQuery(this).val(), '.group_number', jQuery(this).closest('.grades'))" />
      </th>
      <th><?php echo __('Grades') ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($students as $student): ?>
    <tr title="<?php echo $student->getFullName() ?>">
      <td class="number"><?php echo $student->getNumber() ?></td>
      <td class="name"><?php echo $student->getLastName() ?> <?php echo $student->getFirstName() ?></td>
      <td class="group_number"><?php echo $student->getGroup() ?></td>
      <td>
        <ol class="grades_list">
        <?php foreach ($student->getGradesSortedByDate() as $grade): ?>
          <li>
            <?php echo $grade->getCreatedAt('d/m/Y') ?>:
            <?php echo $grade->getGrade() ?>

            <?php if ($grade->getComments()): ?>
              <?php echo link_to_function(image_tag('comments.png', array('alt' => __('Comments'))), "jQuery('.grade_comments', jQuery(this).parent()).toggle();") ?>
              <span class="grade_comments">
                <?php echo $grade->getComments() ?>
              </span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
        </ol>
      </td>
    </tr>

<?php endforeach; ?>
  </tbody>
</table>

<script type="text/javascript">
function search(text, selector, context)
{
  console.log(text);
  jQuery(selector, context).each(function() {
    var $this = jQuery(this);
    var regexp = new RegExp(text, 'i');
    var $parent = $this.closest('tr');

    if ('' == text.trim() || regexp.test($this.html()))
    {
      $parent.fadeIn(500);
    }
    else
    {
      $parent.fadeOut(600);
    }
  });
}

jQuery(function() {
  jQuery('.grade_comments').hide();
});
</script>
