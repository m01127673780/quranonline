<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\NewsDatatable;
use App\Http\Controllers\Controller;

use App\Model\News;
use Illuminate\Http\Request;
 use Storage;

class NewsAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(newsDatatable $news) {
		return $news->render('admin.news.index', ['title' => trans('admin.news')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.news.create', ['title' => trans('admin.create_news')]);
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
				'name'             => 'required',
				'password'             => 'required',
				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'password'             => trans('admin.password'),
				'icon'                => trans('admin.icon'),
				 
			]);

		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'news',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		news::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('news'));
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
		$news = news::find($id);
		$title   = trans('admin.edit');
		return view('admin.news.edit', compact('news', 'title'));
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
				'name'             => 'required',
				'password'             => 'required',
				'icon'                => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name'             => trans('admin.name'),
				'password'             => trans('admin.password'),
				'icon'                => trans('admin.icon'),
				 
			]);
		if (request()->hasFile('icon')) {
			$data['icon'] = up()->upload([
					'file'        => 'icon',
					'path'        => 'news',
					'upload_type' => 'single',
					'delete_file' => news::find($id)->icon,
				]);
		}

		news::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('news'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$news = news::find($id);
		Storage::delete($news->icon);
		$news->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('news'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$news = news::find($id);
				Storage::delete($news->icon);
				$news->delete();
			}
		} else {
			$news = news::find(request('item'));
			Storage::delete($news->icon);
			$news->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('news'));
	}
}
