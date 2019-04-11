<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 08/04/2019
 * Time: 18:22
 */

namespace crafter\transport;


class TransportationToAirport {


  /**
   * @var \crafter\transport\TransportInterface
   */
  private $transport;

  /**
   * TransportationToAirport constructor.
   *
   * @param \crafter\transport\TransportInterface $transport
   */
  public function __construct(TransportInterface $transport) {
    $this->transport = $transport;
  }

  /**
   * @return string
   */
  public function go() {
    return $this->transport->go();
  }
}