<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Value;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FeedbackExportView;
use App\Exports\BE3251;
use App\Exports\CS3251;
use App\Exports\CS3271;
use App\Exports\CS3401;
use App\Exports\CS3451;
use App\Exports\CS3452;
use App\Exports\CS3461;
use App\Exports\CS3481;
use App\Exports\CS3491;
use App\Exports\CS3492;
use App\Exports\CS8601;
use App\Exports\CS8602;
use App\Exports\CS8603;
use App\Exports\CS8611;
use App\Exports\CS8651;
use App\Exports\CS8661;
use App\Exports\CS8662;
use App\Exports\CS8691;
use App\Exports\CS8811;
use App\Exports\GE3251;
use App\Exports\GE3452;
use App\Exports\GE3271;
use App\Exports\GE3272;
use App\Exports\GE3252;
use App\Exports\GE3451;
use App\Exports\HS3251;
use App\Exports\HS8581;
use App\Exports\MA3251;
use App\Exports\PH3256;
use App\Exports\ProfessionalElectiveIV;
use App\Exports\ProfessionalElectiveV;








class ReportController extends Controller
{
    public function HS3251(){
        return Excel::download(new HS3251(), 'feedback.xlsx');
    }

    public function MA3251(){
        return Excel::download(new MA3251(), 'feedback.xlsx');
    }

    public function PH3256(){
        return Excel::download(new PH3256(), 'feedback.xlsx');
    }

    public function BE3251(){
        return Excel::download(new BE3251(), 'feedback.xlsx');
    }

    public function GE3251(){
        return Excel::download(new GE3251(), 'feedback.xlsx');
    }

    public function CS3251(){
        return Excel::download(new CS3251(), 'feedback.xlsx');
    }

    public function GE3252(){
        return Excel::download(new GE3252(), 'feedback.xlsx');
    }

    public function GE3271(){
        return Excel::download(new GE3271(), 'feedback.xlsx');
    }

    public function CS3271(){
        return Excel::download(new CS3271(), 'feedback.xlsx');
    }

    public function GE3272(){
        return Excel::download(new GE3272(), 'feedback.xlsx');
    }

    public function CS3452(){
        return Excel::download(new CS3452(), 'feedback.xlsx');
    }

    public function CS3491(){
        return Excel::download(new CS3491(), 'feedback.xlsx');
    }

    public function CS3492(){
        return Excel::download(new CS3492(), 'feedback.xlsx');
    }

    public function CS3401(){
        return Excel::download(new CS3401(), 'feedback.xlsx');
    }

    public function CS3451(){
        return Excel::download(new CS3451(), 'feedback.xlsx');
    }

    public function GE3451(){
        return Excel::download(new GE3451(), 'feedback.xlsx');
    }

    public function CS3461(){
        return Excel::download(new CS3461(), 'feedback.xlsx');
    }
    public function CS3481(){
        return Excel::download(new CS3481(), 'feedback.xlsx');
    }
    public function CS8651(){
        return Excel::download(new CS8651(), 'feedback.xlsx');
    }
    public function CS8691(){
        return Excel::download(new CS8691(), 'feedback.xlsx');
    }
    public function CS8601(){
        return Excel::download(new CS8601(), 'feedback.xlsx');
    }
    public function CS8602(){
        return Excel::download(new CS8602(), 'feedback.xlsx');
    }
    public function CS8603(){
        return Excel::download(new CS8603(), 'feedback.xlsx');
    }
    public function CS8661(){
        return Excel::download(new CS8661(), 'feedback.xlsx');
    }
    public function CS8662(){
        return Excel::download(new CS8662(), 'feedback.xlsx');
    }
    public function CS8611(){
        return Excel::download(new CS8611(), 'feedback.xlsx');
    }
    public function HS8581(){
        return Excel::download(new HS8581(), 'feedback.xlsx');
    }
    public function CS8811(){
        return Excel::download(new CS8811(), 'feedback.xlsx');
    }
    public function ProfessionalElectiveIV(){
        return Excel::download(new ProfessionalElectiveIV(), 'feedback.xlsx');
    }
    public function ProfessionalElectiveV(){
        return Excel::download(new ProfessionalElectiveV(), 'feedback.xlsx');
    }




    
}
