<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\TestimonialDatatable;
use App\Http\Controllers\Controller;

use App\Model\Testimonial;
use Illuminate\Http\Request;
 use Storage;

class TestimonialController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(testimonialDatatable $testimonial) {
		return $testimonial->render('admin.testimonial.index', ['title' => trans('admin.testimonial')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.testimonial.create', ['title' => trans('admin.create_testimonial')]);
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

				'name_ar'                      => 'sometimes|nullable',
				'name_en'                      => 'sometimes|nullable',
				'job_ar'                       => 'sometimes|nullable',
				'job_en'                       => 'sometimes|nullable',
				'text_ar'                      => 'sometimes|nullable',
				'text_en'                      => 'sometimes|nullable',
				'country_ar'                   => 'sometimes|nullable',
				'country_en'                   => 'sometimes|nullable',
				'img'                          => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name_ar'                      => trans('admin.name_ar'),
				'name_en'                      => trans('admin.name_en'),
				'job_ar'                       => trans('admin.job_ar'),
				'job_en'                       => trans('admin.job_en'),
				'text_ar'                      => trans('admin.text_ar'),
				'text_en'                      => trans('admin.text_en'),
				'country_ar'                   => trans('admin.country_ar'),
				'country_en'                   => trans('admin.country_en'),
				'img'                          => trans('admin.img'),
				 
			]);

		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'testimonial',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Testimonial::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('testimonial'));
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
		$testimonial = Testimonial::find($id);
		$title   = trans('admin.edit');
		return view('admin.testimonial.edit', compact('testimonial', 'title'));
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

				'name_ar'                      => 'sometimes|nullable',
				'name_en'                      => 'sometimes|nullable',
				'job_ar'                       => 'sometimes|nullable',
				'job_en'                       => 'sometimes|nullable',
				'text_ar'                      => 'sometimes|nullable',
				'text_en'                      => 'sometimes|nullable',
				'country_ar'                   => 'sometimes|nullable',
				'country_en'                   => 'sometimes|nullable',
				'img'                          => 'sometimes|nullable|'.v_image(),
 
			], [], [
				'name_ar'                      => trans('admin.name_ar'),
				'name_en'                      => trans('admin.name_en'),
				'job_ar'                       => trans('admin.job_ar'),
				'job_en'                       => trans('admin.job_en'),
				'text_ar'                      => trans('admin.text_ar'),
				'text_en'                      => trans('admin.text_en'),
				'country_ar'                   => trans('admin.country_ar'),
				'country_en'                   => trans('admin.country_en'),
				'img'                          => trans('admin.img'),
				 
			]);
		if (request()->hasFile('img')) {
			$data['img'] = up()->upload([
					'file'        => 'img',
					'path'        => 'testimonial',
					'upload_type' => 'single',
					'delete_file' => Testimonial::find($id)->img,
				]);
		}

		Testimonial::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('testimonial'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$testimonial = Testimonial::find($id);
		Storage::delete($testimonial->img);
		$testimonial->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('testimonial'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$testimonial = Testimonial::find($id);
				Storage::delete($testimonial->img);
				$testimonial->delete();
			}
		} else {
			$testimonial = Testimonial::find(request('item'));
			Storage::delete($testimonial->img);
			$testimonial->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('testimonial'));
	}
}
