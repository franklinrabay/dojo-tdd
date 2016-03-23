<?php
/**
* O que muda ao escrever utilizando TDD é que vamos escrever regras e não código
*/
namespace Test\Model;

include(__DIR__."/../../../vendor/autoload.php");

class AccountTest extends \PHPUnit_Framework_TestCase
{
    /**
    * O saldo da conta não pode ser negativo;
    * Deve-se permitir Sacar;
    * Deve-se permitir Depositar;
    * Deve-se permitir Transferir valores;
    */
    protected function setUp()
    {
        $this->user = new \App\Model\User("John Doe");
        
        $this->account = new \App\Model\Account(1, $this->user);
        $this->account->balance = 100;
    }

    public function testFoo()
    {   
        $this->assertEquals("bar", $this->account->foo());
    }

}