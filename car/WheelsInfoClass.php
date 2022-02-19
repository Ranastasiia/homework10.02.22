<?php

namespace Car\CarInfo;

class WheelsInfoClass extends CarInfo implements WheelsInfoInterface
{
    public function __construct(
        private int $size
    )
    {
    }
    public function setWheelsSize($size): void
    {
        $this->size = $size;
    }
    public function getWheelsSize(): int
    {
        return $this->size;
    }
}