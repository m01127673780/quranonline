<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\TeachersDatatable;
use App\Http\Controllers\Controller;

use App\Model\Teachers;
use Illuminate\Http\Request;
 use Storage;

class TeachersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(teachersDatatable $teachers) {
		return $teachers->render('admin.teachers.index', ['title' => trans('admin.teachers')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.teachers.create', ['title' => trans('admin.create_teachers')]);
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
				'link'                 => 'required',
				'name_ar'                 => 'required',
				'name_en'                 => 'required',
				'head_ar'                 => 'required',
				'head_en'                 => 'required',
				'img'                 => 'sometimes|nullable|'.v_image(),

			], [], [
				'name_ar'                 => trans('admin.name_ar'),
				'name_en'                 => trans('admin.name_en'),
				'head_ar'                 => trans('admin.head_en'),
				'head_en'                 => trans('admin.head_en'),
				'link'                    => trans('admin.link'),
				'img'                     => trans('admin.img'),

			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'teachers',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Teachers::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('teachers'));
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
		$teachers = Teachers::find($id);
		$title   = trans('admin.edit');
		return view('admin.teachers.edit', compact('teachers', 'title'));
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
				'link'                 => 'required',
				'name_ar'                 => 'required',
				'name_en'                 => 'required',
				'head_ar'                 => 'required',
				'head_en'                 => 'required',
				'img'                 => 'sometimes|nullable|'.v_image(),

			], [], [
				'name_ar'                 => trans('admin.name_ar'),
				'name_en'                 => trans('admin.name_en'),
				'head_ar'                 => trans('admin.head_en'),
				'head_en'                 => trans('admin.head_en'),
				'link'                    => trans('admin.link'),
				'img'                     => trans('admin.img'),

			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'teachers',
					'upload_type' => 'single',
					'delete_file' => Teachers::find($id)->img,
				]);
		}

		Teachers::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('teachers'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$teachers = Teachers::find($id);
		Storage::delete($teachers->img);
		$teachers->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('teachers'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$teachers = Teachers::find($id);
				Storage::delete($teachers->img);
				$teachers->delete();
			}
		} else {
			$teachers = Teachers::find(request('item'));
			Storage::delete($teachers->img);
			$teachers->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('teachers'));
	}
}
