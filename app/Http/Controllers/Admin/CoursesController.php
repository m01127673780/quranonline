<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\CoursesDatatable;
use App\Http\Controllers\Controller;

use App\Model\Courses;
use Illuminate\Http\Request;
 use Storage;

class CoursesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(coursesDatatable $courses) {
		return $courses->render('admin.courses.index', ['title' => trans('admin.courses')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.courses.create', ['title' => trans('admin.create_courses')]);
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
				'head_ar'             => 'required',
				'head_en'             => 'required',
				'text_ar'             => 'required',
				'text_en'             => 'required',
				'color_diffe_ar'      => 'required',
				'color_diffe_en'      => 'required',
				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'head_ar'             => trans('admin.head_ar'),
				'head_en'             => trans('admin.head_en'),
				'text_ar'             => trans('admin.text_ar'),
				'text_en'             => trans('admin.text_en'),
				'color_diffe_ar'      => trans('admin.color_diffe_ar'),
				'color_diffe_en'      => trans('admin.color_diffe_en'),
				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'courses',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Courses::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('courses'));
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
		$courses = Courses::find($id);
		$title   = trans('admin.edit');
		return view('admin.courses.edit', compact('courses', 'title'));
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
				'head_ar'             => 'required',
				'head_en'             => 'required',
				'text_ar'             => 'required',
				'text_en'             => 'required',
				'color_diffe_ar'      => 'required',
				'color_diffe_en'      => 'required',
				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'head_ar'             => trans('admin.head_ar'),
				'head_en'             => trans('admin.head_en'),
				'text_ar'             => trans('admin.text_ar'),
				'text_en'             => trans('admin.text_en'),
				'color_diffe_ar'      => trans('admin.color_diffe_ar'),
				'color_diffe_en'      => trans('admin.color_diffe_en'),
				'icon'                => trans('admin.icon'),
				 
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'courses',
					'upload_type' => 'single',
					'delete_file' => Courses::find($id)->icon,
				]);
		}

		Courses::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('courses'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$courses = Courses::find($id);
		Storage::delete($courses->icon);
		$courses->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('courses'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$courses = Courses::find($id);
				Storage::delete($courses->icon);
				$courses->delete();
			}
		} else {
			$courses = Courses::find(request('item'));
			Storage::delete($courses->icon);
			$courses->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('courses'));
	}
}
