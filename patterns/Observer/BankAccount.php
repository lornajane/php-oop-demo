<?php

class BankAccount
{
	protected $amount;
	protected $observer;

	public function __construct ($amount) {
		$this->observer = new MoneyObserver();
		$this->setAmount($amount);
	}

	protected function setAmount ($amount) {
		$this->amount = $amount;
		$this->notify();
	}

	public function deposit ($money) {
		$this->setAmount($this->amount + $money);
	}

	public function withdraw ($money) {
		$this->setAmount($this->amount - $money);
	}

    public function getBalance() {
        return $this->amount;
    }

	public function notify () {
		$this->observer->update($this);
	}

}

