<?php

namespace App\Exports;

use App\Models\Value;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CS8601 implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $subjectcode = 'CS8601';
        
        $feedback = Value::join('users', 'users.registernumber', '=', 'values.registernumber')
        ->select('users.name', 'users.email', 'values.*')
        ->where('values.subjectcode','=', $subjectcode)
        
        ->get();
        return view('table', ['feedback' => $feedback]);
    }
}