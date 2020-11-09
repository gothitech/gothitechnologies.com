<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Mission;

class MissionController extends Controller
{
     public function view(){
     	  $data['countMission'] = Mission::count();
    		$data['alldata'] = Mission::all();
    		return view('backend.mission.mission-view', $data);
	}

  public function add(){
  	return view('backend.mission.add-mission');
  }

  public function store(Request $request){
  	$data = new Mission();
  	$data->created_by = Auth::user()->id;
  	$data->title = $request->title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/mission_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('missions.view')->with('success', 'Data add success');
  }
}


  public function edit($id){
    $editData = Mission::find($id);
    return view ('backend.mission.edit-mission', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = Mission::find($id);
  	$data->updated_by = Auth::user()->id;
    $data->title = $request->title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		@unlink(public_path('upload/mission_images/'.$data->image));
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/mission_images'), $filename);
  		$data['image'] = $filename;
  	 $data->save();
  	return redirect()->route('missions.view')->with('success', 'Data update success');
  }
}
  public function delete($id){
       	$mission = Mission::find($id);
       	if (file_exists('public/upload/mission_images/' .$mission->image) AND ! empty($mission->image)) {
    			unlink('public/upload/mission_images/' . $mission->image);
    		}
       	$mission->delete();
       	return redirect()->route('missions.view')->with('success', 'Data deleted success');
  }
}
