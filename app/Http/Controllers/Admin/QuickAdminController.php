<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\QuickDatatable;
use App\Http\Controllers\Controller;

use App\Model\Quick;
use Illuminate\Http\Request;
 use Storage;

class QuickAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(quickDatatable $quick) {
		return $quick->render('admin.quick.index', ['title' => trans('admin.quick')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.quick.create', ['title' => trans('admin.create_quick')]);
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
				'subject'             => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'email'             => trans('admin.email'),
				'subject'             => trans('admin.subject'),
				'phone'             => trans('admin.phone'),
				'message'             => trans('admin.message'),
 				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'quick',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Quick::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('quick'));
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
		$quick = Quick::find($id);
		$title   = trans('admin.edit');
		return view('admin.quick.edit', compact('quick', 'title'));
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
				'subject'             => 'sometimes|nullable',
				'phone'               => 'sometimes|nullable',
				'message'             => 'sometimes|nullable',
 				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'email'             => trans('admin.email'),
				'subject'             => trans('admin.subject'),
				'phone'             => trans('admin.phone'),
				'message'             => trans('admin.message'),
 				'icon'                => trans('admin.icon'),
				 
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'quick',
					'upload_type' => 'single',
					'delete_file' => Quick::find($id)->icon,
				]);
		}

		Quick::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('quick'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$quick = Quick::find($id);
		Storage::delete($quick->icon);
		$quick->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('quick'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$quick = Quick::find($id);
				Storage::delete($quick->icon);
				$quick->delete();
			}
		} else {
			$quick = Quick::find(request('item'));
			Storage::delete($quick->icon);
			$quick->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('quick'));
	}
}
