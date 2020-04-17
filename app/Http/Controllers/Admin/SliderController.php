<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\SliderDatatable;
use App\Http\Controllers\Controller;

use App\Model\Slider;
use Illuminate\Http\Request;
 use Storage;

class SliderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(sliderDatatable $slider) {
		return $slider->render('admin.slider.index', ['title' => trans('admin.slider')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.slider.create', ['title' => trans('admin.create_slider')]);
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
				'link'                     => 'sometimes|nullable',
				'head_ar'                  => 'sometimes|nullable',
				'head_en'                  => 'sometimes|nullable',
				'title_en'                 => 'sometimes|nullable',
				'title_ar'                 => 'sometimes|nullable',
				'text1_ar'                 => 'sometimes|nullable',
				'text1_en'                 => 'sometimes|nullable',
				'text2_ar'                 => 'sometimes|nullable',
				'text2_en'                 => 'sometimes|nullable',
				'text3_en'                 => 'sometimes|nullable',
				'text3_ar'                 => 'sometimes|nullable',
				'img'                      => 'sometimes|nullable|'.v_image(),
				'link'                     => 'sometimes|nullable',
				'img'                      => 'sometimes|nullable|'.v_image(),
			], [], [
	'link'                     => trans('admin.link'),
				'head_ar'                  => trans('admin.head_ar'),
				'head_en'                  => trans('admin.head_en'),
				'title_en'                 => trans('admin.title_en'),
				'title_ar'                 => trans('admin.title_ar'),
				'text1_ar'                 => trans('admin.text1_ar'),
				'text1_en'                 => trans('admin.text1_en'),
				'text2_ar'                 => trans('admin.text2_ar'),
				'text2_en'                 => trans('admin.text2_en'),
				'text3_ar'                 => trans('admin.text3_ar'),
				'text3_ar'                 => trans('admin.text3_ar'),
				'img'                      => trans('admin.img'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'slider',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Slider::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('slider'));
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
		$slider = Slider::find($id);
		$title   = trans('admin.edit');
		return view('admin.slider.edit', compact('slider', 'title'));
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
				'link'                     => 'sometimes|nullable',
				'head_ar'                  => 'sometimes|nullable',
				'head_en'                  => 'sometimes|nullable',
				'title_en'                 => 'sometimes|nullable',
				'title_ar'                 => 'sometimes|nullable',
				'text1_ar'                 => 'sometimes|nullable',
				'text1_en'                 => 'sometimes|nullable',
				'text2_ar'                 => 'sometimes|nullable',
				'text2_en'                 => 'sometimes|nullable',
				'text3_en'                 => 'sometimes|nullable',
				'text3_ar'                 => 'sometimes|nullable',
				'img'                      => 'sometimes|nullable|'.v_image(),
				'link'                     => 'sometimes|nullable',
				'img'                      => 'sometimes|nullable|'.v_image(),
			], [], [
	            'link'                     => trans('admin.link'),
				'head_ar'                  => trans('admin.head_ar'),
				'head_en'                  => trans('admin.head_en'),
				'title_en'                 => trans('admin.title_en'),
				'title_ar'                 => trans('admin.title_ar'),
				'text1_ar'                 => trans('admin.text1_ar'),
				'text1_en'                 => trans('admin.text1_en'),
				'text2_ar'                 => trans('admin.text2_ar'),
				'text2_en'                 => trans('admin.text2_en'),
				'text3_ar'                 => trans('admin.text3_ar'),
				'text3_ar'                 => trans('admin.text3_ar'),
				'img'                      => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'slider',
					'upload_type' => 'single',
					'delete_file' => Slider::find($id)->img,
				]);
		}

		Slider::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('slider'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$slider = Slider::find($id);
		Storage::delete($slider->img);
		$slider->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('slider'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$slider = Slider::find($id);
				Storage::delete($slider->img);
				$slider->delete();
			}
		} else {
			$slider = Slider::find(request('item'));
			Storage::delete($slider->img);
			$slider->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('slider'));
	}
}
