<?php

namespace Car\CarInfo;

interface EngineInfoInterface{
    public function setEnginePower(int $power) : void;
    public function getEnginePower() : int;
    public function setEngineCapacity(int $capacity) : void;
    public function getEngineCapacity() : int;
}