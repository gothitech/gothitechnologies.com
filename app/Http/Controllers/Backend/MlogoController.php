<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Mlogo;
use Auth;

class MlogoController extends Controller
{
            public function view(){
                $data['countlogo'] = Mlogo::count();
                $data['alldata'] = Mlogo::all();
                return view('backend.mlogo.mlogo-view', $data);
            }
            public function add(){
            return view('backend.mlogo.add-mlogo');
            }

            public function store(Request $request){
            $data = new Mlogo();
            $data->created_by = Auth::user()->id;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename =date('YmdHi').$file->getClientORiginalName();
                $file->move(public_path('upload/mlogo_images'), $filename);
                $data['image'] = $filename;
            $data->save();
            return redirect()->route('mlogos.view')->with('success', 'Data add success');
            }
            }


            public function edit($id){
            $editData = Mlogo::find($id);
            return view ('backend.mlogo.edit-mlogo', compact('editData'));
            }

            public function update(Request $request, $id){
            $data = Mlogo::find($id);
            $data->updated_by = Auth::user()->id;
            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('upload/mlogo_images/'.$data->image));
                $filename =date('YmdHi').$file->getClientORiginalName();
                $file->move(public_path('upload/mlogo_images'), $filename);
                $data['image'] = $filename;
                $data->save();
            return redirect()->route('mlogos.view')->with('success', 'Data update success');
            }
            }
            public function delete($id){
                $logo = Mlogo::find($id);
                if (file_exists('public/upload/mlogo_images/' .$logo->image) AND ! empty($logo->image)) {
                        unlink('public/upload/mlogo_images/' . $logo->image);
                    }
                $logo->delete();
                return redirect()->route('mlogos.view')->with('success', 'Data deleted success');
            }

}
