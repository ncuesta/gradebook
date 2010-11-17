<?php

class myUser extends sfGuardSecurityUser
{
  /**
   * Set the current student for the session of this
   * user to $student.
   *
   * @param  Student $student The student to set as current.
   *
   * @return myUser This object, for fluent interface.
   */
  public function setCurrentStudent(Student $student)
  {
    return $this->setCurrentStudentId($student->getId());
  }

  /**
   * Store the id of the current student in the
   * session of this user.
   * If $id is a boolean FALSE value, the current
   * id will be unset.
   *
   * @param  int $id The id of the current student.
   *
   * @return myUser This object, for fluent interface.
   */
  public function setCurrentStudentId($id)
  {
    if (false === $id)
    {
      $this->getAttributeHolder()->remove('student_id');
    }
    else
    {
      $this->setAttribute('student_id', $id);
    }

    return $this;
  }

  /**
   * Get the id of the current student.
   * If none has been set, return a NULL value.
   *
   * @return int or null
   */
  public function getCurrentStudentId()
  {
    return $this->getAttribute('student_id');
  }

  /**
   * Get the currently set student as a Student object.
   * If none has been set, return a NULL value.
   *
   * @param  PropelPDO $con Optional PDO object.
   *
   * @return Student or null
   */
  public function getCurrentStudent(PropelPDO $con = null)
  {
    if (null !== $this->getCurrentStudentId())
    {
      return StudentPeer::retrieveByPK($this->getCurrentStudentId(), $con);
    }
  }

}
