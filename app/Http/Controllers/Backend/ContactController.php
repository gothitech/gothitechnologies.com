<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Communicate;

class ContactController extends Controller
{
    public function view(){
    		$data['alldata'] = Contact::all();
    		return view('backend.contact.contact-view', $data);
	}

  public function add(){
  	return view('backend.contact.add-contact');
  }

  public function store(Request $request){
  	$data = new Contact();
	  $data->created_by = Auth::user()->id;
	  $data->address = $request->address;
	  $data->mobile = $request->mobile;
	  $data->facebook = $request->facebook;
	  $data->twtter = $request->twtter;
	  $data->youtube = $request->youtube;
	  $data->linkedin = $request->linkedin;

  	$data->save();
  	return redirect()->route('contacts.view')->with('success', 'Data add success');
  }



  public function edit($id){
    $editData = Contact::find($id);
    return view ('backend.contact.edit-contact', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = Contact::find($id);
  	$data->updated_by = Auth::user()->id;
  	$data->contact_name = $request->contact_name;
	  $data->contact_email = $request->contact_email;
	  $data->contact_subject = $request->contact_subject;
	  $data->contact_textarea = $request->contact_textarea;
	  $data->contact_file = $request->contact_file;
	  $data->address = $request->address;
	  $data->mobile = $request->mobile;
	  $data->facebook = $request->facebook;
	  $data->twtter = $request->twtter;
	  $data->youtube = $request->youtube;
	  $data->linkedin = $request->linkedin;

  	 $data->save();
  	return redirect()->route('contacts.view')->with('success', 'Data update success');
  }

  public function delete($id){
       	$contact = Contact::find($id);
       	$contact->delete();
       	return redirect()->route('contacts.view')->with('success', 'Data deleted success');
  }

  public function viewCommunicate (){
    $alldata = Communicate::orderBy('id', 'desc')->get();
    return view ('backend.contact.view_commicate', compact('alldata'));
  }

  public function Communicatedelete($id){
     $commicate = Communicate::find($id);
     $commicate->delete();
     return redirect()->route('contacts.communicate')->with('success', 'Data Deleted Successfully');
  }
}
