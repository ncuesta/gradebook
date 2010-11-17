<?php

/**
 * student actions.
 *
 * @package    gradebook
 * @subpackage student
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class studentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->students = StudentPeer::retrieveSorted();
  }

}
