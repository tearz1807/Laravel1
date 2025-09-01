<?php

namespace App\Http\Controllers\Patterns\Behavioral\Iterator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IteratorController extends Controller
{
    public function simpleExample()
    {
        $list = new SimpleList();
        $list->add('Первый');
        $list->add('Второй');
        $list->add('Третий');
        $list->add('Четвертый');

        $forwardIterator = $list->createIterator();
        $forwardResult = printItems($forwardIterator);

        $reverseIterator = $list->createIterator(true);
        $reverseResult = printItems($reverseIterator);

        return response()->json([
            'pattern' => 'Iterator',
            'list' => ['Первый', 'Второй', 'Третий', 'Четвертый'],
            'forward_iteration' => $forwardResult,
            'reverse_iteration' => $reverseResult
        ]);
    }

    public function customIteration(Request $request)
    {
        $items = $request->input('items', ['A', 'B', 'C']);
        $direction = $request->input('direction', 'forward');

        $list = new SimpleList();
        foreach ($items as $item) {
            $list->add($item);
        }

        $iterator = $list->createIterator($direction === 'reverse');
        $result = printItems($iterator);

        return response()->json([
            'items' => $items,
            'direction' => $direction,
            'result' => $result
        ]);
    }
}
