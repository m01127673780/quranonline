<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\VideosDatatable;
use App\Http\Controllers\Controller;

use App\Model\Videos;
use Illuminate\Http\Request;
 use Storage;

class VideosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(videosDatatable $videos) {
		return $videos->render('admin.videos.index', ['title' => trans('admin.videos')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.videos.create', ['title' => trans('admin.create_videos')]);
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
				'img'                 => 'required|'.v_image(),
 
			], [], [
				'link'                 => trans('admin.link'),
				'img'                  => trans('admin.img'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'videos',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Videos::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('videos'));
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
		$videos = Videos::find($id);
		$title   = trans('admin.edit');
		return view('admin.videos.edit', compact('videos', 'title'));
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
				'img'                 => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'link'                 => trans('admin.link'),
				'img'                  => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'videos',
					'upload_type' => 'single',
					'delete_file' => Videos::find($id)->img,
				]);
		}

		Videos::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('videos'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$videos = Videos::find($id);
		Storage::delete($videos->img);
		$videos->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('videos'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$videos = Videos::find($id);
				Storage::delete($videos->img);
				$videos->delete();
			}
		} else {
			$videos = Videos::find(request('item'));
			Storage::delete($videos->img);
			$videos->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('videos'));
	}
}
