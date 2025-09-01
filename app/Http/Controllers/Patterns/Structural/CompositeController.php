<?php

namespace App\Http\Controllers\Patterns\Structural;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Game\Structural\Composite\Cabinet;
use App\Game\Structural\Composite\Chassis;
use App\Game\Structural\Composite\Bus;
use App\Game\Structural\Composite\FloppyDisk;
use App\Game\Structural\Composite\Card;

class CompositeController extends Controller
{
    public function demo()
    {
        $cabinet = new Cabinet("PC Cabinet");
        $chassis = new Chassis("PC Chassis");
        $bus = new Bus("MCA Bus");
        
        $bus->add(new Card("16Mbs Token Ring"));
        $chassis->add($bus);
        $chassis->add(new FloppyDisk("3.5in Floppy"));
        $cabinet->add($chassis);

        return response()->json([
            'total_price' => $cabinet->netPrice(),
            'structure' => $this->getStructure($cabinet)
        ]);
    }

    private function getStructure($equipment, $depth = 0): array {
        $structure = [
            'name' => $equipment->name(),
            'price' => $equipment->netPrice(),
            'children' => []
        ];
        
        if ($equipment instanceof \App\Game\Structural\Composite\CompositeEquipment) {
            foreach ($equipment->getEquipment() as $item) {
                $structure['children'][] = $this->getStructure($item, $depth + 1);
            }
        }
        
        return $structure;
    }
}