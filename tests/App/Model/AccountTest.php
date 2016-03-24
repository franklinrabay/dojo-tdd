<?php
/**
* O que muda ao escrever utilizando TDD é que vamos escrever regras e não código
*/
namespace Test\Model;

include(__DIR__."/../../../vendor/autoload.php");

class AccountTest extends \PHPUnit_Framework_TestCase
{
    private $user;
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

    public function testBalanceNotNegative()
    {
        $this->assertGreaterThan(0, $this->account->balance);
    }

    public function testWithdraw()
    {
        $this->account->withdraw(50);
        $this->assertEquals(50, $this->account->balance);
    }

    public function testDeposit()
    {
        $this->account->deposit(50);
        $this->assertEquals(150, $this->account->balance);
    }

    public function testTranfer()
    {   
        $newUser = new \App\Model\User("Bob Marley");
        $newAccount = new \App\Model\Account(2, $newUser);

        $this->account->transfer(20, $newAccount);
        
        $this->assertEquals(80, $this->account->balance);
        $this->assertEquals(20, $newAccount->balance);
    }
}