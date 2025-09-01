<?php

namespace App\Http\Controllers\Patterns\Behavioral\Mediator;

class Mediator
{
    public function __construct(
        public $okButton = 'OK',
        public $cancelButton = 'Cancel',
        public $fontList = ['Arial', 'Times New Roman', 'Courier'],
        public $fontName = ''
    ) {}
    
    public function handleEvent($event)
    {
        $results = [];
        
        if ($event['type'] === 'select') {
            $this->fontName = $event['value'];
            $results[] = "Шрифт выбран: {$event['value']}";
        }
        elseif ($event['type'] === 'click_ok') {
            $results[] = "Шрифт применен: {$this->fontName}";
        }
        elseif ($event['type'] === 'click_cancel') {
            $results[] = "Диалог закрыт";
        }
        elseif ($event['type'] === 'input') {
            $this->fontName = $event['value'];
            $results[] = "Введен текст: {$event['value']}";
        }
        
        return $results;
    }
}
