<?php

namespace Car\CarInfo;

interface FuelTankInfoInterface{
    public function setFuelType(string $type) : void;
    public function getFuelType() : string;
    public function setFuelTankCapacity(int $capacity) : void;
    public function getFuelTankCapacity() : int;
}