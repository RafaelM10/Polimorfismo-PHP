# Sistema de Estacionamento

Este projeto PHP demonstra o uso de Polimorfismo em um sistema de estacionamento, onde diferentes classes de veículos e clientes são tratadas de forma uniforme, permitindo operações como estacionar, cobrar e gerar faturas.

## Como funciona o Polimorfismo

Polimorfismo é um dos pilares da Programação Orientada a Objetos (POO) e refere-se à capacidade de um objeto se comportar de várias formas, dependendo do contexto em que é utilizado. Em outras palavras, o polimorfismo permite que diferentes objetos possam ser tratados de maneira uniforme, mesmo que pertençam a classes diferentes.

### Vamos para uma analogia:

Imagine um sistema de transporte onde diferentes veículos, como carros, ônibus e bicicletas, compartilham uma interface comum de movimento. Apesar de cada veículo ter características e comportamentos distintos, como número de rodas, velocidade máxima e método de propulsão, todos podem ser tratados de forma semelhante quando se trata de se locomover de um ponto A para um ponto B. Isso exemplifica o polimorfismo, onde objetos de classes diferentes podem ser tratados de maneira uniforme quando compartilham uma interface comum.

## Estrutura do Projeto

O projeto consiste nos seguintes arquivos para demonstrar o conceito de Polimorfismo:

- `index.php`: Contém o código PHP para demonstrar o uso de diferentes classes de veículos e clientes.
  
- `src/`: Pasta contendo todo o código-fonte do projeto.

  - `Auto/`: Namespace contendo as classes relacionadas ao estacionamento.

    - `interfaces/`: Pasta contendo interfaces utilizadas pelas classes do namespace `Auto`.

      - `ChargeCustomer.php`: Interface para cobrança do cliente.
      - `InvoiceDetails.php`: Interface de nota fiscal emitida para o cliente.

      - `CustomerPay.php`: Interface para pagamento do cliente.

    - `Parking.php`: Classe que representa um veículo estacionado.

    - `Vehicle.php`: Classe abstrata que representa um veículo.

    - `Customer.php`: Classe que representa um cliente do estacionamento.

    - `Invoice.php`: Classe que representa uma fatura.

  - `interfaces/`: Pasta contendo interfaces utilizadas pelo projeto.

    - `InvoiceDetails.php`: Interface para detalhes da fatura.

## Exemplo de Uso

```php
<?php
    // Importando classes relevantes
    require_once 'src/Auto/Parking.php';
    require_once 'src/Auto/Customer.php';
    require_once 'src/Auto/Invoice.php';

    // Criação de instâncias e demonstração de funcionalidades do estacionamento
    $parkingEntries[0] = new Parking(12, 14, "Black", "Car:Vectra", "2008", "JK8LD0");
    $customer[0] = new Customer("Rafael Meira", "Masc", true);
    $customerInvoice[0] = new Invoice("18-04-2024");

    $totalAmountPayable = $parkingEntries[0]->collectPayment("CC");
    $customer[0]->pay($totalAmountPayable);
    $customerInvoice[0]->details($parkingEntries[0], $customer[0]);
    $customer[0]->toThank();
    $parkingEntries[0]->takeToTheCustomer();
?>

Este `README.md` fornece uma visão geral do projeto, explicando seu propósito, estrutura e como utilizar o Polimorfismo em PHP para gerenciar um sistema de estacionamento.
