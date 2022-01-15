<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\StudentServices;
use App\Models\Student;

class StudentController extends Controller
{
    protected $studentservices;

    public function __construct(StudentServices $studentservices){
        $this->studentservices=$studentservices;
    }
   

    public function index()
    {
        return view('student/index',['students'=>Student::orderBy('id','desc')->get()]);
    }

   
    public function create()
    {
        return view('student/create');
    }

   
    public function store(Request $request)
    {
      
        $student=new Student();
        $student->name=$request->name;
        $student->roll=$request->roll;
        $student->email=$request->email;
        $student->image="image";
               if($request->hasFile('image') && $request->file('image')->isValid()){

            $student->addMediaFromRequest('image')->toMediaCollection('images');

        }
        $student->save();
        echo "done";

    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
