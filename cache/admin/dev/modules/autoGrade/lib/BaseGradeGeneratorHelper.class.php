<?php

/**
 * grade module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage grade
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseGradeGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'grade' : 'grade_'.$action;
  }
}
