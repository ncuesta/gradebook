<?php


/**
 * Skeleton subclass for representing a row from the 'gb_student' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Nov 16 21:33:31 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Student extends BaseStudent
{
  public function __toString()
  {
    return $this->getFullName();
  }

  /**
   * Get the full name of this Student. That is its last and first name.
   *
   * @return string
   */
  public function getFullName()
  {
    return sprintf('%s, %s', $this->getLastName(), $this->getFirstName());
  }

  /**
   * Get the Grade objects related to this Student, sorted by date.
   *
   * @param  Criteria $criteria An optional Criteria object, useful for refining the resulting set.
   * @param  PropelPDO $con Optional PDO object.
   *
   * @return array Grade[]
   */
  public function getGradesSortedByDate(Criteria $criteria = null, PropelPDO $con = null)
  {
    if (null === $criteria)
    {
      $criteria = new Criteria();
    }

    $criteria->addAscendingOrderByColumn(GradePeer::CREATED_AT);

    return $this->getGrades($criteria, $con);
  }

} // Student
