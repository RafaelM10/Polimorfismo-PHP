<?php

namespace Auto\interfaces;

interface ChargeCustomer
{
  public function collectPayment($paymentMethod);
}
