<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Banner;


class BannarController extends Controller

{
     public function view(){
     	  $data['countBannar'] = Banner::count();
    		$data['alldata'] = Banner::all();
    		return view('backend.bannar.bannar-view', $data);
	}
  public function add(){
  	return view('backend.bannar.add-bannar');
  }
  public function store(Request $request){
  	$data = new Banner();
  	$data->created_by = Auth::user()->id;
      $data->title = $request->title;
	  $data->short_title = $request->short_title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/m_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('bannars.view')->with('success', 'Data add success');
  }
}

  public function edit($id){
    $editData = Banner::find($id);
    return view ('backend.bannar.edit-bannar', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = Banner::find($id);
  	$data->updated_by = Auth::user()->id;
    $data->title = $request->title;
    $data->short_title = $request->short_title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		@unlink(public_path('upload/m_images/'.$data->image));
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/m_images'), $filename);
        $data['image'] = $filename;
  	 $data->save();
  	return redirect()->route('bannars.view')->with('success', 'Data update success');
  }
}
  
  public function delete($id){
       	$data = Banner::find($id);
       	if (file_exists('public/upload/m_images/' .$data->image) AND ! empty($data->image)) {
    			unlink('public/upload/m_images/' . $data->image);
    		}
       	$data->delete();
       	return redirect()->route('bannars.view')->with('success', 'Data deleted success');
  }
}
