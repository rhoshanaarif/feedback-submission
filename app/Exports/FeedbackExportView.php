<?php

namespace App\Exports;

use App\Models\Value;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FeedbackExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        
        $feedback = Value::join('users', 'users.registernumber', '=', 'values.registernumber')
        ->select('users.name', 'users.email', 'values.*')
        // ->where('values.semester','=', $semester )->where(
        //     'values.department','=', $department)->where('values.subject','=', $subject)
        
        ->get();
        return view('table', ['feedback' => $feedback]);
    }
}
