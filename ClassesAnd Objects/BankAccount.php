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

$account = new BankAccount();
$account->accountNumber = 1;
$account->balance = 100;
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
        return $this;
    }



    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return $this;
    }

}

$accountChain = new BankAccountChain();

$accountChain->deposit(100)->withdraw(10);
echo  $accountChain->balance;

echo PHP_EOL;
