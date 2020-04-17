<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\StatDatatable;
use App\Http\Controllers\Controller;

use App\Model\Stat;
use Illuminate\Http\Request;
 use Storage;

class StatController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(statDatatable $stat) {
		return $stat->render('admin.stat.index', ['title' => trans('admin.stat')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.stat.create', ['title' => trans('admin.create_stat')]);
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
				'number'                       => 'required',
				'head_ar'                      => 'required',
				'head_en'                      => 'required',
				'img'                          => 'sometimes|nullable|'.v_image(),
				'font_awesome'                 => 'sometimes|nullable',
 
			], [], [
				'head_ar'                      => trans('admin.head_en'),
				'head_en'                      => trans('admin.head_en'),
				'number'                       => trans('admin.number'),
				'font_awesome'                 => trans('admin.font_awesome'),
				'img'                          => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'stat',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Stat::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('stat'));
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
		$stat = Stat::find($id);
		$title   = trans('admin.edit');
		return view('admin.stat.edit', compact('stat', 'title'));
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
				'number'                       => 'required',
				'head_ar'                      => 'required',
				'head_en'                      => 'required',
				'img'                          => 'sometimes|nullable|'.v_image(),
				'font_awesome'                 => 'sometimes|nullable',
 
			], [], [
				'head_ar'                      => trans('admin.head_en'),
				'head_en'                      => trans('admin.head_en'),
				'number'                       => trans('admin.number'),
				'font_awesome'                 => trans('admin.font_awesome'),
				'img'                          => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'stat',
					'upload_type' => 'single',
					'delete_file' => Stat::find($id)->img,
				]);
		}

		Stat::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('stat'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$stat = Stat::find($id);
		Storage::delete($stat->img);
		$stat->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('stat'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$stat = Stat::find($id);
				Storage::delete($stat->img);
				$stat->delete();
			}
		} else {
			$stat = Stat::find(request('item'));
			Storage::delete($stat->img);
			$stat->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('stat'));
	}
}
