<?php

class WordyDecorator implements WeatherInterface
{
	protected $weatherInterface;

	public function __construct (WeatherInterface $weather) {
		$this->weatherInterface = $weather;
	}

	public function getWeather () {
		$string = 'Today it is: ' . $this->weatherInterface->getWeather();
		return ($string);
	}
}


