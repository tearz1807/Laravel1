<?php

namespace App\Game\Structural\Composite;

class CompositeEquipment extends Equipment
{
    protected array $equipment = [];

    public function add(Equipment $equipment): void 
    {
        $this->equipment[] = $equipment;
    }

    public function remove(Equipment $equipment): void 
    {
        $index = array_search($equipment, $this->equipment, true);
        if ($index !== false) {
            unset($this->equipment[$index]);
        }
    }

    public function getEquipment(): array 
    {
        return $this->equipment;
    }

    public function power(): float 
    {
        $total = 0;
        foreach ($this->equipment as $item) {
            $total += $item->power();
        }
        return $total;
    }

    public function netPrice(): float 
    {
        $total = 0;
        foreach ($this->equipment as $item) {
            $total += $item->netPrice();
        }
        return $total;
    }

    public function discountPrice(): float 
    {
        $total = 0;
        foreach ($this->equipment as $item) {
            $total += $item->discountPrice();
        }
        return $total;
    }
}