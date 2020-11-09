<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\DestopPortfolio;

class DesktopController extends Controller
{
    public function view(){
        $data['countBannar'] = DestopPortfolio::count();
         $data['alldata'] = DestopPortfolio::all();
         return view('backend.portfolio.desktopportfolio.desktopportfolio-view', $data);
 }

public function add(){
   return view('backend.portfolio.desktopportfolio.add-desktopportfolio');
}

public function store(Request $request){
   $data = new DestopPortfolio();
   $data->created_by = Auth::user()->id;
   $data->title = $request->title;
   $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/desktopportfolio_images'), $filename);
       $data['image'] = $filename;
       $data->save();
   return redirect()->route('desktopportfolio.view')->with('success', 'Data add success');
}
}



public function edit($id){
 $editData = DestopPortfolio::find($id);
 return view ('backend.portfolio.desktopportfolio.edit-desktopportfolio', compact('editData'));
}

public function update(Request $request, $id){
   $data = DestopPortfolio::find($id);
   $data->updated_by = Auth::user()->id;
 $data->title = $request->title;
 $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       @unlink(public_path('upload/desktopportfolio_images/'.$data->image));
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/desktopportfolio_images'), $filename);
       $data['image'] = $filename;
    $data->save();
   return redirect()->route('desktopportfolio.view')->with('success', 'Data update success');
}
}

public function delete($id){
        $mission = DestopPortfolio::find($id);
        if (file_exists('public/upload/desktopportfolio_images/' .$desktopportfolio->image) AND ! empty($desktopportfolio->image)) {
             unlink('public/upload/desktopportfolio_images/' . $desktopportfolio->image);
         }
        $mission->delete();
        return redirect()->route('desktopportfolio.view')->with('success', 'Data deleted success');
}
}
