<?php
  namespace App\Model;

  class User {
    public $name;
    public $accounts;

    public function __construct($name)
    {
      $this->name = $name;
    }

    public function foo()
    {
      echo "bar";
    }
  } 