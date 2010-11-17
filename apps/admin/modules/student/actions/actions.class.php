<?php

require_once dirname(__FILE__).'/../lib/studentGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/studentGeneratorHelper.class.php';

/**
 * student actions.
 *
 * @package    gradebook
 * @subpackage student
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class studentActions extends autoStudentActions
{
  public function preExecute()
  {
    $this->getUser()->setCurrentStudentId(false);

    parent::preExecute();
  }

  public function executeGrades(sfWebRequest $request)
  {
    $this->student = $this->getRoute()->getObject();

    if (null === $this->student)
    {
      $this->getUser()->setFlash('error', 'You must select a student to manage his/her grades.');

      $this->redirect('@student');
    }

    $this->getUser()->setCurrentStudent($this->student);

    $this->redirect('@grade');
  }

}
