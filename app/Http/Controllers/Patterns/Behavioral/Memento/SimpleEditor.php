<?php

namespace App\Http\Controllers\Patterns\Behavioral\Memento;

class SimpleEditor
{
    public $content = '';
    public $savedStates = [];
    
    public function type($text)
    {
        $this->saveState();
        $this->content .= $text . ' ';
    }
    
    public function saveState()
    {
        $this->savedStates[] = $this->content;
    }
    
    public function undo()
    {
        if (!empty($this->savedStates)) {
            $this->content = array_pop($this->savedStates);
        }
    }
    
    public function getHistoryCount()
    {
        return count($this->savedStates);
    }
}
