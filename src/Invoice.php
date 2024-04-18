<?php

namespace Auto;

use Auto\interfaces\InvoiceDetails;

class Invoice implements InvoiceDetails
{
  private $id;
  private $payday;

  public function __construct($date)
  {
    $this->payday = $date;
    $this->id = rand(1000, 4000);
  }
  public function Details($establishmentEmployee, $customer)
  {
    echo "<br>";
    echo "<br>---------------------------------------------";
    echo "<br>Identificador unico: " . $this->getId();
    echo "<br>Nome do estabelecimento: " . $establishmentEmployee->getNameOfTheEstablishment();
    echo "<br>Pagamento realizado: " . $this->getPayday();
    echo "<br>Cliente: " . $customer->getName();
    echo "<br>Modelo: " . $establishmentEmployee->getModel();
    echo "<br>Placa: " . $establishmentEmployee->getPlate();
    echo "<br>---------------------------------------------";
    echo "<br>";
  }
  public function getId()
  {
    return $this->id;
  }
  public function getPayday()
  {
    return $this->payday;
  }
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPayday($date)
  {
    $this->payday = $date;
  }
}
