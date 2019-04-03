<?php
namespace crafter\personwritter;

interface PersonWritterInterface {
  public function write(Person $person);
}