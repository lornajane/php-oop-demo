<?php

namespace MyProject;

class Guest extends Person
{
    public function __construct() {
        $this->name = "guest";
    }
}
