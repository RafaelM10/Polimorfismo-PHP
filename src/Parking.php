<?php

namespace Auto;

use Auto\interfaces\ChargeCustomer;

class Parking extends Vehicle implements ChargeCustomer
{
  private $entryTime;
  private $exitTime;
  private $nameOfTheEstablishment;

  function __construct($entryTime, $exitTime, $color, $model, $year, $plate)
  {
    parent::__construct($color, $model, $year, $plate);
    $this->entryTime = $entryTime;
    $this->exitTime = $exitTime;
    $this->nameOfTheEstablishment = "Establishment Hawkins";
  }
  public function getEntryTime()
  {
    return $this->entryTime;
  }
  public function getExitTime()
  {
    return $this->exitTime;
  }
  public function getNameOfTheEstablishment()
  {
    return $this->nameOfTheEstablishment;
  }
  public function setEntryTime($time)
  {
    $this->entryTime = $time;
  }
  public function setExitTime($time)
  {
    $this->exitTime = $time;
  }
  public function setNameOfTheEstablishment($name)
  {
    $this->nameOfTheEstablishment = $name;
  }
  public function collectPayment($paymentMethod)
  {
    $credit = $paymentMethod === 'CC';
    $debit = $paymentMethod === 'Debit';

    if ($this->getEntryTime() <= 12 && $this->getExitTime() <= 15 && $credit) {
      return 30;
    }

    if ($this->getEntryTime() > 15 && $this->exitTime <= 23 && $debit) {
      return 80;
    }

    echo "<p>No other form of payment is accepted and we do not accept cars outside of permitted hours!</p>";
  }

  public function takeToTheCustomer()
  {
    echo "<br>Thank you for " . $this->getModel() . " here, you have good day!";
    echo "<br>---------------------------------------------";
  }
}
