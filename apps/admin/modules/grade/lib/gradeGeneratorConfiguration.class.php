<?php

/**
 * grade module configuration.
 *
 * @package    gradebook
 * @subpackage grade
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class gradeGeneratorConfiguration extends BaseGradeGeneratorConfiguration
{
  /**
   * @override
   */
  public function getFilterDefaults()
  {
    return array_merge(parent::getFilterDefaults(), array('student_id' => $this->getUser()->getCurrentStudentId()));
  }

  /**
   * Get the session user object.
   *
   * @return myUser
   */
  protected function getUser()
  {
    return $this->getContext()->getUser();
  }

  /**
   * Get the context object.
   *
   * @return sfContext
   */
  protected function getContext()
  {
    return sfContext::getInstance();
  }

  /**
   * @override
   */
  public function getForm($object = null, $options = array())
  {
    $form = parent::getForm($object, $options);

    $form->setDefault('student_id', $this->getUser()->getCurrentStudentId());

    return $form;
  }

}
