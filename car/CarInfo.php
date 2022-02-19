<?php

namespace Car\CarInfo;

abstract class CarInfo
{
    private ?string $model = null;
    private ?string $brand = null;

//    abstract protected function size(int $length, ?int $width = null, ?int $height = null);

    public function setModel(?string $model): void
    {
        $this->model = $model;
    }
    public function getModel(): ?string
    {
        return $this->model;
    }
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }
    public function getBrand(): ?string
    {
        return $this->brand;
    }





}