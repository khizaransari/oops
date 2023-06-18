<?php

class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }



    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;

    }
}

echo $account->deposit(300);
echo PHP_EOL;

// chaning method

class BankAccountChain
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }



    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return $this;
        }
        return $this;

    }
}


echo $account->deposit(100)
    ->deposit(200)
    ->deposit(300);

echo PHP_EOL;
