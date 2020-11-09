<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\SoftwareDevelopmentService;

class softwareDevelopmentServiceController extends Controller
{
    public function view(){
        $data['countBannar'] = SoftwareDevelopmentService::count();
         $data['alldata'] = SoftwareDevelopmentService::all();
         return view('backend.softwareDevelopmentService.softwaredevelopment-view', $data);
 }

public function add(){
   return view('backend.softwareDevelopmentService.add-softwaredevelopment');
}

public function store(Request $request){
   $data = new SoftwareDevelopmentService();
   $data->created_by = Auth::user()->id;
   $data->title = $request->title;
   $data->description = $request->description;
   
   if ($request->file('logo')) {
       $file = $request->file('logo');
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/software_logos'), $filename);
       $data['logo'] = $filename;
       $data->save();
   return redirect()->route('software.view')->with('success', 'Data add success');
}
}



public function edit($id){
 $editData = SoftwareDevelopmentService::find($id);
 return view ('backend.softwareDevelopmentService.edit-softwaredevelopment', compact('editData'));
}

public function update(Request $request, $id){
   $data = SoftwareDevelopmentService::find($id);
   $data->updated_by = Auth::user()->id;
 $data->title = $request->title;
 $data->description = $request->description;
   if ($request->file('logo')) {
       $file = $request->file('logo');
       @unlink(public_path('upload/software_logos/'.$data->logo));
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/software_logos'), $filename);
       $data['logo'] = $filename;
    $data->save();
   return redirect()->route('software.view')->with('success', 'Data update success');
}
}

public function delete($id){
        $mission = SoftwareDevelopmentService::find($id);
        if (file_exists('public/upload/software_logos/' .$software->logo) AND ! empty($software->logo)) {
             unlink('public/upload/software_logos/' . $software->logo);
         }
        $mission->delete();
        return redirect()->route('software.view')->with('success', 'Data deleted success');
}
}
