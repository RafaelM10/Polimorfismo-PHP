<?php

use Auto\Invoice;
//definir o nível de relatório de erros para mostrar todos os erros
error_reporting(E_ALL);
//Exibir erro no navegador
ini_set('display_errors', 1);

//Carregar automaticamente as classes do projeto;
require __DIR__  . '/vendor/autoload.php';

use Auto\Customer;
use Auto\Parking;

$parkingEntries[0] = new Parking(12, 14, "Black", "Car:Vectra", "2008", "JK8LD0");
$customer[0] = new Customer("Rafael Meira", "Masc", true);
$customerInvoice[0] = new Invoice("18-04-2024");

echo "<pre>";
print_r($customer[0]);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($parkingEntries[0]);

echo "<pre>";
print_r($customerInvoice[0]);
echo "</pre>";

$totalAmountPayable = $parkingEntries[0]->collectPayment("CC");
$customer[0]->pay($totalAmountPayable);
$customerInvoice[0]->details($parkingEntries[0], $customer[0]);
$customer[0]->toThank();
$parkingEntries[0]->takeToTheCustomer();
echo "<br>";
echo "</pre>";
