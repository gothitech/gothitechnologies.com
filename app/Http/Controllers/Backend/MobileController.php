<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\MobilePortfolio;

class MobileController extends Controller
{
    public function view(){
        $data['countBannar'] = MobilePortfolio::count();
         $data['alldata'] = MobilePortfolio::all();
         return view('backend.portfolio.mobilePortfolio.mobilePortfolio-view', $data);
 }

public function add(){
   return view('backend.portfolio.mobilePortfolio.add-mobilePortfolio');
}

public function store(Request $request){
   $data = new MobilePortfolio();
   $data->created_by = Auth::user()->id;
   $data->title = $request->title;
   $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/mobileportfolio_images'), $filename);
       $data['image'] = $filename;
       $data->save();
   return redirect()->route('mobileportfolio.view')->with('success', 'Data add success');
}
}



public function edit($id){
 $editData = MobilePortfolio::find($id);
 return view ('backend.portfolio.mobilePortfolio.edit-mobilePortfolio', compact('editData'));
}

public function update(Request $request, $id){
   $data = MobilePortfolio::find($id);
   $data->updated_by = Auth::user()->id;
 $data->title = $request->title;
 $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       @unlink(public_path('upload/mobileportfolio_images/'.$data->image));
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/mobileportfolio_images'), $filename);
       $data['image'] = $filename;
    $data->save();
   return redirect()->route('mobileportfolio.view')->with('success', 'Data update success');
}
}

public function delete($id){
        $mission = MobilePortfolio::find($id);
        if (file_exists('public/upload/mobileportfolio_images/' .$mobileportfolios->image) AND ! empty($mobileportfolios->image)) {
             unlink('public/upload/mobileportfolio_images/' .$mobileportfolios->image);
         }
        $mission->delete();
        return redirect()->route('mobileportfolio.view')->with('success', 'Data deleted success');
}
}
