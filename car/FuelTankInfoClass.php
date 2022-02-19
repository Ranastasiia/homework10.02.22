<?php

namespace Car\CarInfo;

class FuelTankInfoClass extends CarInfo implements FuelTankInfoInterface
{
    public function __construct(
        private int $capacity,
        private string $type
    )
    {
    }
    public function setFuelTankCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getFuelTankCapacity(): int
    {
        return $this->capacity;
    }
    public function setFuelType(string $type): void
    {
        $this->type = $type;
    }
    public function getFuelType(): string
    {
        return $this->type;
    }
}