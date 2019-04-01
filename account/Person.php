<?php
namespace crafter\account;

class Person {

  private $firstname;
  private $lastname;
  private $account;

  public function __construct(string $firstname,string $lastname,Account $account) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->account = $account;
  }

  /**
   * @return mixed
   */
  public function getFirstname():string {
    return $this->firstname;
  }

  /**
   * @param mixed $firstname
   */
  public function setFirstname(string $firstname) {
    $this->firstname = $firstname;
  }

  /**
   * @return mixed
   */
  public function getLastname():string {
    return $this->lastname;
  }

  /**
   * @param mixed $lastname
   */
  public function setLastname(string $lastname) {
    $this->lastname = $lastname;
  }

  /**
   * @return \crafter\account\Account
   */
  public function getAccount(): Account {
    return $this->account;
  }

  /**
   * @param \crafter\account\Account $account
   */
  public function setAccount(Account $account) {
    $this->account = $account;
  }

  public function __clone() {
    $this->account = clone $this->account;
  }

  public function __toString():string {
    $desc  = $this->getFirstname();
    $desc .= $this->getLastname() ;

    return $desc;
  }

}