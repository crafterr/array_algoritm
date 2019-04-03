<?php
namespace crafter\personwritter;

class Person {

  /**
   * @param \crafter\personwritter\PersonWritterInterface $personWritter
   *
   * @return mixed
   */
  public function output(PersonWritterInterface $personWritter) {
    return $personWritter->write($this);
  }

  /**
   * @return string
   */
  public function getName():string {
    return 'Julia';
  }

  /**
   * @return int
   */
  public function getAge():int {
    return 8;
  }
}