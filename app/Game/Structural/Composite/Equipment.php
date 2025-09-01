<?php

namespace App\Game\Structural\Composite;

abstract class Equipment
{
    protected string $name;
    protected float $power;
    protected float $netPrice;
    protected float $discountPrice;

    public function __construct(string $name) 
    {
        $this->name = $name;
    }

    public function name(): string 
    {
        return $this->name;
    }

    abstract public function power(): float;
    abstract public function netPrice(): float;
    abstract public function discountPrice(): float;

    public function add(Equipment $equipment): void 
    {
        throw new \Exception("Cannot add to a leaf");
    }

    public function remove(Equipment $equipment): void 
    {
        throw new \Exception("Cannot remove from a leaf");
    }

    public function getEquipment(): array 
    {
        return [];
    }
}