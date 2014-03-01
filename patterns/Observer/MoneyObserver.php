<?php

class MoneyObserver
{
	public function update (BankAccount $act) {
        echo date('H:i:s') . ': New balance: £' 
            . $act->getBalance() . '<br />';
	}
}


