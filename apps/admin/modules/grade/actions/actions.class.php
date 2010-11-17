<?php

require_once dirname(__FILE__).'/../lib/gradeGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/gradeGeneratorHelper.class.php';

/**
 * grade actions.
 *
 * @package    gradebook
 * @subpackage grade
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class gradeActions extends autoGradeActions
{
  public function preExecute()
  {
    parent::preExecute();

    // Reset filters
    $this->setFilters($this->configuration->getFilterDefaults());
  }

  public function executeGoBack(sfWebRequest $request)
  {
    return $this->redirect('@student');
  }

}
