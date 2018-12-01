<?php
interface Car {
    function startEngite();
    function stopEngine();
    function start();
    function stop();
}

class Route() {
    $car;
    function __construct(Car $car) {
        $this->car = $car;
    }
    function drive() {
        $this->car->startEngite();
        $this->car-start(); 
    }
}