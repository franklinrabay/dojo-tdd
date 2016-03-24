<?php
  namespace App\Model;

  class Account {
    public $balance;

    public function __construct($id, User $user)
    {
      $this->id = $id;
      $this->user = $user;

      $this->user->accounts[] = $this;
    }

    public function foo()
    {
      return "bar";
    }

    public function withdraw($value)
    {
      $this->balance -= $value;
    }

    public function deposit($value)
    {
      $this->balance += $value;
    }

    public function transfer($value, Account $account) 
    {
      $account->deposit($value);
      $this->withdraw($value);
    }

    public function transferOwner(User $user) 
    {
      $this->user = $user;
    }
}
