<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Student extends Model
{
    use HasFactory; 
    protected $fillable =[
        'name', 'address', 'email',
        'number', 'gender' ,'subject_id'
    ];
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
 
}
