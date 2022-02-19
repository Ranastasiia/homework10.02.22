<?php

namespace Car\CarInfo;

class EngineInfoClass extends CarInfo implements EngineInfoInterface
{
    public function __construct(
        private int $power,
        private int $capacity,
    )
    {
    }
    public function setEnginePower(int $power): void
    {
        $this->power = $power;
    }
    public function getEnginePower(): int
    {
        return $this->power;
    }
    public function setEngineCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getEngineCapacity(): int
    {
        return $this->capacity;
    }
}