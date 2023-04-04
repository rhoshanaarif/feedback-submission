<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Value;

class SubjectController extends Controller
{
    private $registernumber;
    public function show(Request $request){
        $registernumber = $request->get('registernumber');
        $user = User::where('registernumber', $registernumber)->first();

        $subjects = Subject::select('subjects', 'subjectcode')->where('department', $user->department)->where('semester', $user->semester)->get();
        return view('show', ['subjects' => $subjects, 'registernumber'=>$registernumber]);
    
        
    }

    public function subjects(Request $request){
        return view('question');
    }

    public function feedback(Request $request){
        $registernumber = $request->get('registernumber');
        $user = User::where('registernumber', $registernumber)->first();

        $values = new Value();

        $values->registernumber = $registernumber;
        $values->name = $user->name;
        $values->email = $user->email;
        
        
        $values->department = $user->department;
        $values->semester = $user->semester;
        $values->subject = $request->get('subject');
        $values->subjectcode = $request->get('subjectcode');
        $values->punctuality = $request->get('answer');
        $values->availability = $request->get('answer-1');
        $values->discipline = $request->get('answer-2');
        $values->explanation = $request->get('answer-3');
        $values->subjectknowledge = $request->get('answer-4');
        $values->methodofteaching = $request->get('answer-5');
        $values->completionofsyllabus = $request->get('answer-6');
        $values->practice = $request->get('answer-7');
        $values->tests = $request->get('answer-8');
        $values->professionalism = $request->get('answer-9');
        $values->motivation = $request->get('answer-10');
        $values->overallfeedback = $request->get('answer-11');
        $values->save();

        return view('success');

    }
    

}
