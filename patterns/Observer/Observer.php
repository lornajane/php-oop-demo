<?php

spl_autoload_register(function($classname) {
    require $classname . ".php";
});

$account = new BankAccount(100);

sleep(2);
echo "\n";
$account->withdraw(25);

