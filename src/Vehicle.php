<?php

namespace Auto;

abstract class Vehicle
{
  protected $color;
  protected $model;
  protected $year;
  protected $plate;
  public function stagnate()
  {
    echo "Estacionado!";
  }
  public function takeToTheCustomer()
  {
    echo "Obrigado por estacionar aqui!";
  }

  public function __construct($color, $model, $year, $plate)
  {
    $this->color = $color;
    $this->model = $model;
    $this->year = $year;
    $this->plate = $plate;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function getPlate()
  {
    return $this->plate;
  }
  public function setColor($color)
  {
    $this->color = $color;
  }
  public function setModel($model)
  {
    $this->model = $model;
  }

  public function setYear($year)
  {
    $this->year = $year;
  }
  public function setPlate($plate)
  {
    $this->plate = $plate;
  }
}
