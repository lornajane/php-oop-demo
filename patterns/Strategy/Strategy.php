<?php

spl_autoload_register(function($classname) {
    require $classname . ".php";
});

// create a normal list
$shopping_list = new Collection(new PlainSort());
$shopping_list->addItem('rhubarb');
$shopping_list->addItem('apple');
$shopping_list->addItem('ginger marmalade');
print_r($shopping_list->getAll());

// what about sorting it backwards?
$shopping_list = new Collection(new ReverseSort());
$shopping_list->addItem('rhubarb');
$shopping_list->addItem('apple');
$shopping_list->addItem('ginger marmalade');
print_r($shopping_list->getAll());
