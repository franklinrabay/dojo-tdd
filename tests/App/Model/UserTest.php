<?php
/**
* O que muda ao escrever utilizando TDD é que vamos escrever regras e não código
*/
namespace Test\Model;

include(__DIR__."/../../../vendor/autoload.php");

class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
    * O nome do usuário não pode ser vazio;
    * Deve checar a quantidade de contas que o usuário possui;
    * Deve-se permitir Transferir o dono da conta
    */

    protected function setUp()
    {
        $this->user = new \App\Model\User("John Doe");
        $this->mainAccount = new \App\Model\Account(1, $this->user);
        $this->subAccount  = new \App\Model\Account(2, $this->user);
    }
}