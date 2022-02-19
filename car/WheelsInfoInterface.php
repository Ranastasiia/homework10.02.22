<?php

namespace Car\CarInfo;

interface WheelsInfoInterface{
    public function setWheelsSize(int $size) : void;
    public function getWheelsSize() : int;
}