<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\HourDatatable;
use App\Http\Controllers\Controller;

use App\Model\Hour;
use Illuminate\Http\Request;
 use Storage;

class HourController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(hourDatatable $hour) {
		return $hour->render('admin.hour.index', ['title' => trans('admin.hour')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.hour.create', ['title' => trans('admin.create_hour')]);
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
				'dateshow_ar'         => 'sometimes|nullable',
				'dateshow_en'         => 'sometimes|nullable',
				'content_ar'          => 'required',
				'content_en'          => 'required',	
				'descount3_en'        => 'sometimes|nullable',
				'descount3_ar'        => 'sometimes|nullable',
				'percentage3'         => 'sometimes|nullable',
				'descount6_en'        => 'sometimes|nullable',
				'descount6_ar'        => 'sometimes|nullable',
				'percentage6'         => 'sometimes|nullable',
				'descount12_en'       => 'sometimes|nullable',
				'descount12_ar'       => 'sometimes|nullable',
				'percentage12'        => 'sometimes|nullable',
				'icon'                => 'sometimes|nullable|'.v_image(),
				'number'              => 'sometimes|nullable',
 
			], [], [
				
				'head_ar'             => trans('admin.head_ar'),
				'head_en'             => trans('admin.head_en'),
				'dateshow_ar'         => trans('admin.dateshow_ar'),
				'dateshow_en'         => trans('admin.dateshow_en'),
				'content_ar'          => trans('admin.content_ar'),
				'content_en'          => trans('admin.content_en'),
				'number'              => trans('admin.number'),
				'descount3_en'        => trans('admin.descount3_en'),
				'descount3_ar'        => trans('admin.descount3_ar'),
				'percentage3'         => trans('admin.percentage3'),
				'descount6_en'        => trans('admin.descount6_en'),
				'descount6_ar'        => trans('admin.descount6_ar'),
				'percentage6'         => trans('admin.percentage6'),
				'descount12_en'       => trans('admin.descount12_en'),
				'descount12_ar'       => trans('admin.descount12_ar'),
				'percentage12'        => trans('admin.percentage12'),
				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'hour',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Hour::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('hour'));
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
		$hour = Hour::find($id);
		$title   = trans('admin.edit');
		return view('admin.hour.edit', compact('hour', 'title'));
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
				'dateshow_ar'         => 'sometimes|nullable',
				'dateshow_en'         => 'sometimes|nullable',
				'content_ar'          => 'required',
				'content_en'          => 'required',	
				'descount3_en'        => 'sometimes|nullable',
				'descount3_ar'        => 'sometimes|nullable',
				'percentage3'         => 'sometimes|nullable',
				'descount6_en'        => 'sometimes|nullable',
				'descount6_ar'        => 'sometimes|nullable',
				'percentage6'         => 'sometimes|nullable',
				'descount12_en'       => 'sometimes|nullable',
				'descount12_ar'       => 'sometimes|nullable',
				'percentage12'        => 'sometimes|nullable',
				'icon'                => 'sometimes|nullable|'.v_image(),
				'number'              => 'sometimes|nullable',
 
			], [], [
				
				'head_ar'             => trans('admin.head_ar'),
				'head_en'             => trans('admin.head_en'),
				'dateshow_ar'         => trans('admin.dateshow_ar'),
				'dateshow_en'         => trans('admin.dateshow_en'),
				'content_ar'          => trans('admin.content_ar'),
				'content_en'          => trans('admin.content_en'),
				'number'              => trans('admin.number'),
				'descount3_en'        => trans('admin.descount3_en'),
				'descount3_ar'        => trans('admin.descount3_ar'),
				'percentage3'         => trans('admin.percentage3'),
				'descount6_en'        => trans('admin.descount6_en'),
				'descount6_ar'        => trans('admin.descount6_ar'),
				'percentage6'         => trans('admin.percentage6'),
				'descount12_en'       => trans('admin.descount12_en'),
				'descount12_ar'       => trans('admin.descount12_ar'),
				'percentage12'        => trans('admin.percentage12'),
				'icon'                => trans('admin.icon'),
				 
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'hour',
					'upload_type' => 'single',
					'delete_file' => Hour::find($id)->icon,
				]);
		}

		Hour::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('hour'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$hour = Hour::find($id);
		Storage::delete($hour->icon);
		$hour->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('hour'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$hour = Hour::find($id);
				Storage::delete($hour->icon);
				$hour->delete();
			}
		} else {
			$hour = Hour::find(request('item'));
			Storage::delete($hour->icon);
			$hour->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('hour'));
	}
}
