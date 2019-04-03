<?php
namespace crafter\personwritter;

class PersonWritter implements PersonWritterInterface {

  public function  write(Person $person) {
    return $person->getName().' ma lat '.$person->getAge();
  }
}