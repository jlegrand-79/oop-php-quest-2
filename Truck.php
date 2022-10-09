<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public const ALLOWED_LOADING_LEVELS = [
        'in filling',
        'full',
    ];

    private string $energy;

    private int $storageCapacity;

    private string $loadingLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->setLoadingLevel('in filling');
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setLoadingLevel(string $loadingLevel): Truck
    {
        if (in_array($loadingLevel, self::ALLOWED_LOADING_LEVELS)) {
            $this->loadingLevel = $loadingLevel;
        }
        return $this;
    }

    public function getLoadingLevel(): string
    {
        return $this->loadingLevel;
    }
}
