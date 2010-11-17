<?php

/**
 * group module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage group
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseGroupGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'group' : 'group_'.$action;
  }
}
