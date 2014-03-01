<?php

spl_autoload_register(function($classname) {
    require $classname . ".php";
});

$weather = new WordyDecorator(new WeatherBot);
echo $weather->getWeather();

echo "\n";

$weather = new BorderDecorator(new WordyDecorator(new WeatherBot));
echo $weather->getWeather();


