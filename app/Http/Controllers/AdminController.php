<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\Value;


class AdminController extends Controller
{
    public function adminview(){
        return view('admindashboard');
    }

    public function adminsubjectview(Request $request){
        $department = $request->get('department');
        $semester = $request->get('semester');
        $subjects = Subject::select('subjects', 'subjectcode')->where('department', $department)->where('semester', $semester)->get();
    
        return view('adminsubjectsview', ['subjects' => $subjects]);
        
    }



}
