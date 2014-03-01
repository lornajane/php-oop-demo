<?php

class BorderDecorator implements WeatherInterface
{
	protected $weatherInterface;

	public function __construct (WeatherInterface $weather) {
		$this->weatherInterface = $weather;
	}

	public function getWeather () {
		$string = '~{' . $this->weatherInterface->getWeather() . '}~';
		return ($string);
	}
}

