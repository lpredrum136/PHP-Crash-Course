<?php

class Person
{
  private $name;
  private $email;

  // Static means you can access it without instantiate a object of this class, public means you can access it without a public function
  public static $ageHighLimit = 40;

  // On the other hand, private static, while still not needing an object instanstiated, needs a public function so that
  // it can be accessed outside of class
  private static $ageLowLimit = 18;

  public function __construct($name, $email)
  {
    echo __CLASS__ . " created<br>";
    $this->name = $name;
    $this->email = $email;
  }

  public function __destruct()
  {
    echo __CLASS__ . ' destroyed<br>';
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getName()
  {
    return "$this->name<br>";
  }

  public function getEmail()
  {
    return $this->email;
  }

  public static function getAgeLowLimit()
  {
    return self::$ageLowLimit;
  }
}

// Static props and methods
echo Person::$ageHighLimit;
echo Person::getAgeLowLimit(); // So basically static uses ::

// $person1 = new Person;

// $person1->name = 'John Doe';

// echo $person1->name;
/* 
$person1->setName('John Doe');
$person1->setEmail('jdoe@gmail.com');

echo $person1->getName();
echo $person1->getEmail();
 */

/* 
$person2 = new Person('John Doe', 'jdoe@gmail.com');
echo $person2->getName();
 */

class Customer extends Person
{
  private $balance;

  public function __construct($name, $email, $balance)
  {
    parent::__construct($name, $email);
    $this->balance = $balance;
    echo 'A new ' . __CLASS__ . ' has been created<br>';
  }

  public function setBalance($balance)
  {
    $this->balance = $balance;
  }

  public function getBalance()
  {
    return "$this->balance<br>";
  }
}
/* 
$customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);

echo $customer1->getBalance();
 */
