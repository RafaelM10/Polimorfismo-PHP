<?php

namespace Auto;

use Auto\interfaces\CustomerPay;

class Customer extends People implements CustomerPay
{
  private $parkTheCar;

  public function pay($totalAmountPayable)
  {
    if (!$totalAmountPayable) {
      echo "Não foi possivel realizar o pagamento!";
      return;
    }
    echo "Valor a pagar $totalAmountPayable <br>";
    echo "Pagamento de $totalAmountPayable realizado.";
  }

  public function toThank()
  {
    echo "<br>Muito obrigado por guardar meu carro!";
  }

  public function __construct($name, $sex, $parkTheCar)
  {
    parent::__construct($name, $sex);
    $this->parkTheCar = $parkTheCar;
  }
  public function getParkTheCar()
  {
    return $this->parkTheCar;
  }
  public function setParkTheCar($parkTheCar)
  {
    $this->parkTheCar = $parkTheCar;
  }
}
