<?php

/**
 * student module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage student
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseStudentGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'student' : 'student_'.$action;
  }
}
