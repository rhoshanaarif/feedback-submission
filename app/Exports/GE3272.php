<?php

namespace App\Exports;

use App\Models\Value;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GE3272 implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $subjectcode = 'GE3272';
        
        $feedback = Value::join('users', 'users.registernumber', '=', 'values.registernumber')
        ->select('users.name', 'users.email', 'values.*')
        ->where('values.subjectcode','=', $subjectcode)
        
        ->get();
        return view('table', ['feedback' => $feedback]);
    }
}