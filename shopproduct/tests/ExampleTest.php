<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 12/04/2019
 * Time: 19:42
 */
use crafter\shopproduct\BookProduct;
class ExampleTest extends PHPUnit_Framework_TestCase {
  public function testGreetings()
  {
    $greetings = 'Hello World';
    $this->assertEquals('Hello World', $greetings);
  }

  public function testAddProduct() {
    $book = new BookProduct();
    $writter = new \crafter\shopproduct\TextWriter();
    $writter->addProduct($book);
    $this->assertNotEmpty($writter->getProducts());
  }

  public function testInstanceOfProduct() {
    $book = new BookProduct("Test",10);
    $this->assertInstanceOf(\crafter\shopproduct\ShopProductInterface::class,$book);
  }
}