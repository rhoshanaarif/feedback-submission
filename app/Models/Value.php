<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
    protected $table="values";

    protected $fillable = [
        'name',
        'registernumber', 
        'department',
        'semester',
        'subject',
        'subjectcode',
        'punctuality',
        'availability', 
        'discipline',
        'explanation',
        'subjectknowledge',
        'methodofteaching',
        'completionofsyllabus',
        'practice',
        'tests',
        'professionalism',
        'motivation',
        'overallfeedback',
        'updated_at',
        'created_at',
    ];
}
