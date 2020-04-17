<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\FooterDatatable;
use App\Http\Controllers\Controller;

use App\Model\Footer;
use Illuminate\Http\Request;
 use Storage;

class FooterController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(footerDatatable $footer) {
		return $footer->render('admin.footer.index', ['title' => trans('admin.footer')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.footer.create', ['title' => trans('admin.create_footer')]);
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

	
				'payment_ar'             => 'sometimes|nullable',
				'payment_en'             => 'sometimes|nullable',
				'contact_ar'             => 'sometimes|nullable',
				'contact_en'             => 'sometimes|nullable',
				'callus_ar'             => 'sometimes|nullable',
				'callus_en'             => 'sometimes|nullable',
				'emaill'             => 'sometimes|nullable',
				'import_info_ar'             => 'sometimes|nullable',
				'import_info_en'             => 'sometimes|nullable',
				'aboutus_ar'             => 'sometimes|nullable',
				'aboutus_en'             => 'sometimes|nullable',
				'facebook'             => 'sometimes|nullable',
				'twitter'             => 'sometimes|nullable',
				'instagram'             => 'sometimes|nullable',
				'googel'             => 'sometimes|nullable',
				'youtube'             => 'sometimes|nullable',
				'link_appstore'             => 'sometimes|nullable',
				'link_googelplay'             => 'sometimes|nullable',
 				'img_appstore'         => 'sometimes|nullable|'.v_image(),
				'img_googelplay'         => 'sometimes|nullable|'.v_image(),
 
			], [], [
				
  				'payment_ar'                         => trans('admin.payment_ar'),
  				'payment_en'                         => trans('admin.payment_en'),
  				'contact_ar'                         => trans('admin.contact_ar'),
  				'contact_en'                         => trans('admin.contact_en'),
  				'callus_ar'                         => trans('admin.callus_ar'),
  				'callus_en'                         => trans('admin.callus_en'),
  				'emaill'                         => trans('admin.emaill'),
  				'import_info_ar'                         => trans('admin.import_info_ar'),
  				'import_info_en'                         => trans('admin.import_info_en'),
  				'aboutus_ar'                         => trans('admin.aboutus_ar'),
  				'aboutus_en'                         => trans('admin.aboutus_en'),
  				'facebook'                         => trans('admin.facebook'),
  				'twitter'                         => trans('admin.twitter'),
  				'instagram'                         => trans('admin.instagram'),
  				'googel'                         => trans('admin.googel'),
  				'youtube'                         => trans('admin.youtube'),
  				'link_appstore'                         => trans('admin.link_appstore'),
  				'link_googelplay'                         => trans('admin.link_googelplay'),
  				'img_appstore'                         => trans('admin.img_appstore'),
  				'img_googelplay'                         => trans('admin.img_googelplay'),
				 
			]);

 
		if (request()->hasFile('img_appstore')) {
			$data['img_appstore'] = up()->upload([
					'file'        => 'img_appstore',
					'path'        => 'img_appstore',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}		
		if (request()->hasFile('img_googelplay')) {
			$data['img_googelplay'] = up()->upload([
					'file'        => 'img_googelplay',
					'path'        => 'img_googelplay',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
 		}

		Footer::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('footer'));
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
		$footer = Footer::find($id);
		$title   = trans('admin.edit');
		return view('admin.footer.edit', compact('footer', 'title'));
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

	
				'payment_ar'             => 'sometimes|nullable',
				'payment_en'             => 'sometimes|nullable',
				'contact_ar'             => 'sometimes|nullable',
				'contact_en'             => 'sometimes|nullable',
				'callus_ar'             => 'sometimes|nullable',
				'callus_en'             => 'sometimes|nullable',
				'emaill'             => 'sometimes|nullable',
				'import_info_ar'             => 'sometimes|nullable',
				'import_info_en'             => 'sometimes|nullable',
				'aboutus_ar'             => 'sometimes|nullable',
				'aboutus_en'             => 'sometimes|nullable',
				'facebook'             => 'sometimes|nullable',
				'twitter'             => 'sometimes|nullable',
				'instagram'             => 'sometimes|nullable',
				'googel'             => 'sometimes|nullable',
				'youtube'             => 'sometimes|nullable',
				'link_appstore'             => 'sometimes|nullable',
				'link_googelplay'             => 'sometimes|nullable',
 				'img_appstore'         => 'sometimes|nullable|'.v_image(),
				'img_googelplay'         => 'sometimes|nullable|'.v_image(),
 
			], [], [
				
  				'payment_ar'                         => trans('admin.payment_ar'),
  				'payment_en'                         => trans('admin.payment_en'),
  				'contact_ar'                         => trans('admin.contact_ar'),
  				'contact_en'                         => trans('admin.contact_en'),
  				'callus_ar'                         => trans('admin.callus_ar'),
  				'callus_en'                         => trans('admin.callus_en'),
  				'emaill'                         => trans('admin.emaill'),
  				'import_info_ar'                         => trans('admin.import_info_ar'),
  				'import_info_en'                         => trans('admin.import_info_en'),
  				'aboutus_ar'                         => trans('admin.aboutus_ar'),
  				'aboutus_en'                         => trans('admin.aboutus_en'),
  				'facebook'                         => trans('admin.facebook'),
  				'twitter'                         => trans('admin.twitter'),
  				'instagram'                         => trans('admin.instagram'),
  				'googel'                         => trans('admin.googel'),
  				'youtube'                         => trans('admin.youtube'),
  				'link_appstore'                         => trans('admin.link_appstore'),
  				'link_googelplay'                         => trans('admin.link_googelplay'),
  				'img_appstore'                         => trans('admin.img_appstore'),
  				'img_googelplay'                         => trans('admin.img_googelplay'),
				 
			]);

 
		if (request()->hasFile('img_appstore')) {
			$data['img_appstore'] = up()->upload([
					'file'        => 'img_appstore',
					'path'        => 'footer',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}		
		if (request()->hasFile('img_googelplay')) {
			$data['img_googelplay'] = up()->upload([
					'file'        => 'img_googelplay',
					'path'        => 'footer',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
 		}

		Footer::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('footer'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$footer = Footer::find($id);
		Storage::delete($footer->footer);
		Storage::delete($footer->footer);
		$footer->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('footer'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$footer = Footer::find($id);
				Storage::delete($footer->footer);
				Storage::delete($footer->footer);
				$footer->delete();
			}
		} else {
			$footer = Footer::find(request('item'));
			Storage::delete($footer->footer);
			Storage::delete($footer->footer);
			$footer->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('footer'));
	}
}
