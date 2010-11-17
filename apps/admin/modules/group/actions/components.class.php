<?php

class groupComponents extends sfComponents
{
  public function executeStudents(sfWebRequest $request)
  {
    $students = $this->getVar('Group')->getStudents();

    $this->visible = array_slice($students, 0, 3);
    $this->hidden  = array_slice($students, 3);
  }

}
