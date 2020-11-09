<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\WebPortfolio;

class WebController extends Controller
{
    public function view(){
        $data['countBannar'] = WebPortfolio::count();
         $data['alldata'] = WebPortfolio::all();
         return view('backend.portfolio.webportfolio.webportfolio-view', $data);
 }

public function add(){
   return view('backend.portfolio.webportfolio.add-webportfolio');
}

public function store(Request $request){
   $data = new WebPortfolio();
   $data->created_by = Auth::user()->id;
   $data->title = $request->title;
   $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/webportfolio_images'), $filename);
       $data['image'] = $filename;
       $data->save();
   return redirect()->route('webportfolio.view')->with('success', 'Data add success');
}
}



public function edit($id){
 $editData = WebPortfolio::find($id);
 return view ('backend.portfolio.webportfolio.edit-webportfolio', compact('editData'));
}

public function update(Request $request, $id){
   $data = WebPortfolio::find($id);
   $data->updated_by = Auth::user()->id;
 $data->title = $request->title;
 $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       @unlink(public_path('upload/webportfolio_images/'.$data->image));
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/webportfolio_images'), $filename);
       $data['image'] = $filename;
    $data->save();
   return redirect()->route('webportfolio.view')->with('success', 'Data update success');
}
}

public function delete($id){
        $mission = WebPortfolio::find($id);
        if (file_exists('public/upload/webportfolio_images/' .$webportfolio->image) AND ! empty($webportfolio->image)) {
             unlink('public/upload/webportfolio_images/' . $webportfolio->image);
         }
        $mission->delete();
        return redirect()->route('webportfolio.view')->with('success', 'Data deleted success');
}
}
