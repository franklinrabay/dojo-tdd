<?php
/**
* O que muda ao escrever utilizando TDD é que vamos escrever regras e não código
*/
namespace Test\Model;

include(__DIR__."/../../../vendor/autoload.php");

class AccountTest extends \PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $account = new \App\Model\Account(1);    
        $this->assertEquals("bar", $account->foo());
    }
}