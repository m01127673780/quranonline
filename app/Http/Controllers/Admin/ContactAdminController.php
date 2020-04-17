<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\ContactDatatable;
use App\Http\Controllers\Controller;

use App\Model\Contact;
use Illuminate\Http\Request;
 use Storage;

class ContactAdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(contactDatatable $contact) {
		return $contact->render('admin.contact.index', ['title' => trans('admin.contact')]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.contact.create', ['title' => trans('admin.create_contact')]);
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
					'path'        => 'contact',
					'upload_type' => 'single',
					'delete_file' => '',
				]);
		}

		Contact::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect(aurl('contact'));
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
		$contact = Contact::find($id);
		$title   = trans('admin.edit');
		return view('admin.contact.edit', compact('contact', 'title'));
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
					'path'        => 'contact',
					'upload_type' => 'single',
					'delete_file' => Contact::find($id)->icon,
				]);
		}

		Contact::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('contact'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$contact = Contact::find($id);
		Storage::delete($contact->icon);
		$contact->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('contact'));
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$contact = Contact::find($id);
				Storage::delete($contact->icon);
				$contact->delete();
			}
		} else {
			$contact = Contact::find(request('item'));
			Storage::delete($contact->icon);
			$contact->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect(aurl('contact'));
	}
}
