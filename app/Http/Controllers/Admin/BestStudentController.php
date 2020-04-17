<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\BestStudentDatatable;
use App\Http\Controllers\Controller;

use App\Model\BestStudent;
use Illuminate\Http\Request;
 use Storage;

class BestStudentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(beststudentDatatable $beststudent) {
		return $beststudent->render('admin.beststudent.index', ['title' => trans('admin.beststudent')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.beststudent.create', ['title' => trans('admin.create_beststudent')]);
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

				
				'name_ar'             => 'sometimes|nullable',
				'name_en'             => 'sometimes|nullable',
				'name_Teacher_ar'     => 'sometimes|nullable',
				'name_Teacher_en'     => 'sometimes|nullable',
				'date_ar'             => 'sometimes|nullable',
				'date_en'             => 'sometimes|nullable',
				'Lecture_ar'             => 'sometimes|nullable',
				'Lecture_en'             => 'sometimes|nullable',
				'job_ar'             => 'sometimes|nullable',
				'job_en'             => 'sometimes|nullable',
				'text_ar'             => 'sometimes|nullable',
				'text_en'             => 'sometimes|nullable',
				'img'                 => 'sometimes|nullable|'.v_image(),
				'img_Teacher'         => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name_ar'                     => trans('admin.name_ar'),
				'name_en'                     => trans('admin.name_en'),
				'name_Teacher_ar'             => trans('admin.name_Teacher_ar'),
				'name_Teacher_en'             => trans('admin.name_Teacher_en'),
				'date_ar'                     => trans('admin.date_ar'),
				'date_en'                     => trans('admin.date_en'),
				'Lecture_ar'                  => trans('admin.Lecture_ar'),
				'Lecture_en'                  => trans('admin.Lecture_en'),
				'job_ar'                      => trans('admin.job_ar'),
				'job_en'                      => trans('admin.job_en'),
				'text_ar'                     => trans('admin.text_ar'),
				'text_en'                     => trans('admin.text_en'),
  				'img'                         => trans('admin.img'),
  				'img_Teacher'                         => trans('admin.img_Teacher'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'beststudent',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}		
		if (request()->hasFile('img_Teacher')) {
			$data['img_Teacher'] = up()->upload([
					'file'        => 'img_Teacher',
					'path'        => 'img_Teacher',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		BestStudent::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('beststudent'));
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
		$beststudent = BestStudent::find($id);
		$title   = trans('admin.edit');
		return view('admin.beststudent.edit', compact('beststudent', 'title'));
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

				
				'name_ar'             => 'sometimes|nullable',
				'name_en'             => 'sometimes|nullable',
				'name_Teacher_ar'     => 'sometimes|nullable',
				'name_Teacher_en'     => 'sometimes|nullable',
				'date_ar'             => 'sometimes|nullable',
				'date_en'             => 'sometimes|nullable',
				'Lecture_ar'             => 'sometimes|nullable',
				'Lecture_en'             => 'sometimes|nullable',
				'job_ar'             => 'sometimes|nullable',
				'job_en'             => 'sometimes|nullable',
				'text_ar'             => 'sometimes|nullable',
				'text_en'             => 'sometimes|nullable',
				'img'                 => 'sometimes|nullable|'.v_image(),
				'img_Teacher'         => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name_ar'                     => trans('admin.name_ar'),
				'name_en'                     => trans('admin.name_en'),
				'name_Teacher_ar'             => trans('admin.name_Teacher_ar'),
				'name_Teacher_en'             => trans('admin.name_Teacher_en'),
				'date_ar'                     => trans('admin.date_ar'),
				'date_en'                     => trans('admin.date_en'),
				'Lecture_ar'                  => trans('admin.Lecture_ar'),
				'Lecture_en'                  => trans('admin.Lecture_en'),
				'job_ar'                      => trans('admin.job_ar'),
				'job_en'                      => trans('admin.job_en'),
				'text_ar'                     => trans('admin.text_ar'),
				'text_en'                     => trans('admin.text_en'),
  				'img'                         => trans('admin.img'),
  				'img_Teacher'                         => trans('admin.img_Teacher'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'beststudent',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}		
		if (request()->hasFile('img_Teacher')) {
			$data['img_Teacher'] = up()->upload([
					'file'        => 'img_Teacher',
					'path'        => 'beststudent',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
 		}

		BestStudent::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('beststudent'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$beststudent = BestStudent::find($id);
		Storage::delete($beststudent->img);
		$beststudent->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('beststudent'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$beststudent = BestStudent::find($id);
				Storage::delete($beststudent->img);
				$beststudent->delete();
			}
		} else {
			$beststudent = BestStudent::find(request('item'));
			Storage::delete($beststudent->img);
			$beststudent->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('beststudent'));
	}
}
