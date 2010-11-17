<?php

/**
 * Grade form.
 *
 * @package    gradebook
 * @subpackage form
 * @author     Your name here
 */
class GradeForm extends BaseGradeForm
{
  public function configure()
  {
    // Created at
    $this->getWidget('created_at')->setOption('format', '%day% / %month% / %year%');
    $this->setDefault('created_at', time());

    // Grade
    $this->getValidator('grade')->setOption('min', 0);
    $this->getValidator('grade')->setOption('max', 10);
  }
}
