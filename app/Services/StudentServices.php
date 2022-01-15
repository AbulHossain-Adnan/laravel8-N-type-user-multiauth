<?php 
namespace App\Services;
use App\Models\Student;

class StudentServices{
	public function createOrUpdate($data,$student=null){

$datas=$data['image'];
foreach ($datas as $data) {
	dd($data);
}


die();




		if(is_null($student)){
			$student=new Student;
		}
		$student->name=$data['name'];
		$student->roll=$data['roll'];
		$student->email=$data['email'];
		$student->image='image';
		if($data['image']){
		$student->addMedia($data['image'])->toMediaCollection('images');	
		}
        
		$student->save();
		return $student;

	}
}

 ?>