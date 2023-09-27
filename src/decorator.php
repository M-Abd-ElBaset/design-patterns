<?php

namespace DesignPatterns;

interface CarService
{
    public function getCost();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 19;
    }
}

class OilExchange implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 25 + $this->carService->getCost();
    }
}

class TireRotation implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }
}

echo (new TireRotation(new OilExchange(new BasicInspection())))->getCost();
