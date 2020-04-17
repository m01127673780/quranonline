<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\StudentDatatable;
use App\Http\Controllers\Controller;

use App\Model\Student;
use Illuminate\Http\Request;
 use Storage;

class StudentAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(studentDatatable $student) {
		return $student->render('admin.student.index', ['title' => trans('admin.student')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.student.create', ['title' => trans('admin.create_student')]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store() {

		$data = $this->validate(request(),
			[
				'name'                => 'sometimes|nullable',
				'email'               => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
				'how_aboutus'         => 'sometimes|nullable',
				'location'            => 'sometimes|nullable',
				'timezone'            => 'sometimes|nullable',
				'date'                => 'sometimes|nullable',
				'time'                => 'sometimes|nullable',
				'st1_name'            => 'sometimes|nullable',
				'st1_Gender'          => 'sometimes|nullable',
				'st1_course'          => 'sometimes|nullable',
				'st1_age'             => 'sometimes|nullable',
				'st2_name'            => 'sometimes|nullable',
				'st2_Gender'          => 'sometimes|nullable',
				'st2_course'          => 'sometimes|nullable',
				'st2_age'             => 'sometimes|nullable',
				'st3_name'            => 'sometimes|nullable',
				'st3_Gender'          => 'sometimes|nullable',
				'st3_course'          => 'sometimes|nullable',
				'st3_age'             => 'sometimes|nullable',
				'st4_name'            => 'sometimes|nullable',
				'st4_Gender'          => 'sometimes|nullable',
				'st4_course'          => 'sometimes|nullable',
				'st4_age'             => 'sometimes|nullable',
				'st5_name'            => 'sometimes|nullable',
				'st5_Gender'          => 'sometimes|nullable',
				'st5_course'          => 'sometimes|nullable',
				'st5_age'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
  
			], [], [
				'name'                => trans('admin.name'),
				'email'               => trans('admin.email'),
				'phone'               => trans('admin.phone'),
				'message'             => trans('admin.message'),
				'how_aboutus'         => trans('admin.how_aboutus'),
				'location'            => trans('admin.location'),
				'timezone'            => trans('admin.timezone'),
				'date'                => trans('admin.date'),
				'time'                => trans('admin.time'),
				'st1_name'            => trans('admin.Gender'),
				'st1_Gender'          => trans('admin.time'),
				'st1_course'          => trans('admin.course'),
				'st1_age'             => trans('admin.age'),
				'st2_Gender'          => trans('admin.time'),
				'st2_course'          => trans('admin.course'),
				'st2_age'             => trans('admin.age'),
				'st2_name'            => trans('admin.Gender'),
				'st3_Gender'          => trans('admin.time'),
				'st3_course'          => trans('admin.course'),
				'st3_age'             => trans('admin.age'),
				'st3_name'            => trans('admin.Gender'),
				'st4_Gender'          => trans('admin.time'),
				'st4_course'          => trans('admin.course'),
				'st4_age'             => trans('admin.age'),
				'st4_name'            => trans('admin.Gender'),
				'st5_Gender'          => trans('admin.time'),
				'st5_course'          => trans('admin.course'),
				'st5_age'             => trans('admin.age'),
				'st5_name'            => trans('admin.Gender'),
 				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'student',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Student::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('student'));
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$student = Student::find($id);
		$title   = trans('admin.edit');
		return view('admin.student.edit', compact('student', 'title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $r, $id) {

		
		$data = $this->validate(request(),
			[
				'name'                => 'sometimes|nullable',
				'email'               => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
				'how_aboutus'         => 'sometimes|nullable',
				'location'            => 'sometimes|nullable',
				'timezone'            => 'sometimes|nullable',
				'date'                => 'sometimes|nullable',
				'time'                => 'sometimes|nullable',
				'st1_name'            => 'sometimes|nullable',
				'st1_Gender'          => 'sometimes|nullable',
				'st1_course'          => 'sometimes|nullable',
				'st1_age'             => 'sometimes|nullable',
				'st2_name'            => 'sometimes|nullable',
				'st2_Gender'          => 'sometimes|nullable',
				'st2_course'          => 'sometimes|nullable',
				'st2_age'             => 'sometimes|nullable',
				'st3_name'            => 'sometimes|nullable',
				'st3_Gender'          => 'sometimes|nullable',
				'st3_course'          => 'sometimes|nullable',
				'st3_age'             => 'sometimes|nullable',
				'st4_name'            => 'sometimes|nullable',
				'st4_Gender'          => 'sometimes|nullable',
				'st4_course'          => 'sometimes|nullable',
				'st4_age'             => 'sometimes|nullable',
				'st5_name'            => 'sometimes|nullable',
				'st5_Gender'          => 'sometimes|nullable',
				'st5_course'          => 'sometimes|nullable',
				'st5_age'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'                => trans('admin.name'),
				'email'               => trans('admin.email'),
				'phone'               => trans('admin.phone'),
				'message'             => trans('admin.message'),
				'how_aboutus'         => trans('admin.how_aboutus'),
				'location'            => trans('admin.location'),
				'timezone'            => trans('admin.timezone'),
				'date'                => trans('admin.date'),
				'time'                => trans('admin.time'),
				'st1_name'            => trans('admin.Gender'),
				'st1_Gender'          => trans('admin.time'),
				'st1_course'          => trans('admin.course'),
				'st1_age'             => trans('admin.age'),
				'st2_Gender'          => trans('admin.time'),
				'st2_course'          => trans('admin.course'),
				'st2_age'             => trans('admin.age'),
				'st2_name'            => trans('admin.Gender'),
				'st3_Gender'          => trans('admin.time'),
				'st3_course'          => trans('admin.course'),
				'st3_age'             => trans('admin.age'),
				'st3_name'            => trans('admin.Gender'),
				'st4_Gender'          => trans('admin.time'),
				'st4_course'          => trans('admin.course'),
				'st4_age'             => trans('admin.age'),
				'st4_name'            => trans('admin.Gender'),
				'st5_Gender'          => trans('admin.time'),
				'st5_course'          => trans('admin.course'),
				'st5_age'             => trans('admin.age'),
				'st5_name'            => trans('admin.Gender'),
 				'icon'                => trans('admin.icon'),
				  
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'student',
					'upload_type' => 'single',
					'delete_file' => Student::find($id)->icon,
				]);
		}

		Student::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('student'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$student = Student::find($id);
		Storage::delete($student->icon);
		$student->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('student'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$student = Student::find($id);
				Storage::delete($student->icon);
				$student->delete();
			}
		} else {
			$student = Student::find(request('item'));
			Storage::delete($student->icon);
			$student->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('student'));
	}
}
