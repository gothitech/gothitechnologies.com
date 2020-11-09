<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Technologies;
use Auth;

class TechnologyController extends Controller
{
    public function view(){
        $data['countBannar'] = Technologies::count();
         $data['alldata'] = Technologies::all();
         return view('backend.technology.technology-view', $data);
 }

            public function add(){
            return view('backend.technology.add-technology');
            }

            public function store(Request $request){
            $data = new Technologies();
            $data->created_by = Auth::user()->id;
            $data->title = $request->title;
            $data->description = $request->description;
            
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename =date('YmdHi').$file->getClientORiginalName();
                $file->move(public_path('upload/technologies_logos'), $filename);
                $data['image'] = $filename;
                $data->save();
            return redirect()->route('technologies.view')->with('success', 'Data add success');
            }
            }



            public function edit($id){
            $editData = Technologies::find($id);
            return view ('backend.technology.edit-technology', compact('editData'));
            }

            public function update(Request $request, $id){
            $data = Technologies::find($id);
            $data->updated_by = Auth::user()->id;
            $data->title = $request->title;
            $data->description = $request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('upload/technologies_logos/'.$data->logo));
                $filename =date('YmdHi').$file->getClientORiginalName();
                $file->move(public_path('upload/technologies_logos'), $filename);
                $data['image'] = $filename;
                $data->save();
            return redirect()->route('technologies.view')->with('success', 'Data update success');
            }
            }

 public function delete($id){
        $data = Technologies::find($id);
        if (file_exists('public/upload/technologies_logos/' .$data->image) AND ! empty($data->image)) {
             unlink('public/upload/technologies_logos/' . $data->image);
         }
        $data->delete();
        return redirect()->route('technologies.view')->with('success', 'Data deleted success');
}
}
