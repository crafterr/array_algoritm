<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/04/2019
 * Time: 14:45
 */

namespace crafter\factory;


class Automobile {
  private $vehicleMake;
  private $vehicleModel;

  public function __construct($make, $model)
  {
    $this->vehicleMake = $make;
    $this->vehicleModel = $model;
  }

  public function getMakeAndModel()
  {
    return $this->vehicleMake . ' ' . $this->vehicleModel;
  }
}