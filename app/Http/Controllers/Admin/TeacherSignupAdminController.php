<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\TeacherSignupDatatable;
use App\Http\Controllers\Controller;

use App\Model\TeacherSignup;
use Illuminate\Http\Request;
 use Storage;

class TeacherSignupAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(teachersignupDatatable $teachersignup) {
		return $teachersignup->render('admin.teachersignup.index', ['title' => trans('admin.teachersignup')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.teachersignup.create', ['title' => trans('admin.create_teachersignup')]);
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
 				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'teachersignup',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		TeacherSignup::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('teachersignup'));
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
		$teachersignup = TeacherSignup::find($id);
		$title   = trans('admin.edit');
		return view('admin.teachersignup.edit', compact('teachersignup', 'title'));
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
 				'icon'                => trans('admin.icon'),
				  
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'teachersignup',
					'upload_type' => 'single',
					'delete_file' => TeacherSignup::find($id)->icon,
				]);
		}

		TeacherSignup::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('teachersignup'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$teachersignup = TeacherSignup::find($id);
		Storage::delete($teachersignup->icon);
		$teachersignup->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('teachersignup'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$teachersignup = TeacherSignup::find($id);
				Storage::delete($teachersignup->icon);
				$teachersignup->delete();
			}
		} else {
			$teachersignup = TeacherSignup::find(request('item'));
			Storage::delete($teachersignup->icon);
			$teachersignup->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('teachersignup'));
	}
}
