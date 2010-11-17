<?php

/**
 * Grade filter form.
 *
 * @package    gradebook
 * @subpackage filter
 * @author     Your name here
 */
class GradeFormFilter extends BaseGradeFormFilter
{
  public function configure()
  {
    $this->useFields(array('student_id'));
  }
}
