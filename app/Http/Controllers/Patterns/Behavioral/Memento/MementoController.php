<?php

namespace App\Http\Controllers\Patterns\Behavioral\Memento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MementoController extends Controller
{
    public function simpleExample()
    {
        $editor = new SimpleEditor();
        
        $editor->type('Привет');
        $editor->type('мир');
        $editor->type('!');
        
        $current = $editor->content;
        $editor->undo();
        $afterUndo = $editor->content;
        
        return response()->json([
            'pattern' => 'Memento',
            'current' => trim($current),
            'after_undo' => trim($afterUndo),
            'history_count' => $editor->getHistoryCount(),
            'description' => 'Простой редактор с историей изменений'
        ]);
    }
    
    public function editorDemo(Request $request)
    {
        $editor = new SimpleEditor();
        
        if ($request->session()->has('editor_content')) {
            $editor->content = $request->session()->get('editor_content');
        }
        
        if ($request->session()->has('editor_states')) {
            $editor->savedStates = $request->session()->get('editor_states');
        }
        
        $action = $request->input('action');
        $text = $request->input('text', '');
        
        switch ($action) {
            case 'type':
                $editor->type($text);
                $result = "Добавлено: '$text'";
                break;
                
            case 'save':
                $editor->saveState();
                $result = 'Сохранено в историю';
                break;
                
            case 'undo':
                $editor->undo();
                $result = 'Отмена последнего действия';
                break;
                
            case 'clear':
                $editor = new SimpleEditor();
                $result = 'Редактор очищен';
                break;
                
            default:
                $result = 'Текущее состояние';
        }
        
        $request->session()->put('editor_content', $editor->content);
        $request->session()->put('editor_states', $editor->savedStates);
        
        return response()->json([
            'action' => $action,
            'result' => $result,
            'content' => trim($editor->content),
            'history_count' => $editor->getHistoryCount()
        ]);
    }
}
