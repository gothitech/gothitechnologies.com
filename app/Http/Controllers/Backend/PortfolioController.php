<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Portfolio;

class PortfolioController extends Controller
{
    
    public function view(){
        $data['countBannar'] = Portfolio::count();
         $data['alldata'] = Portfolio::all();
         return view('backend.portfolio.portfolio-view', $data);
 }

public function add(){
   return view('backend.portfolio.add-portfolio');
}

public function store(Request $request){
   $data = new Portfolio();
   $data->created_by = Auth::user()->id;
   $data->title = $request->title;
   $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/portfolio_images'), $filename);
       $data['image'] = $filename;
       $data->save();
   return redirect()->route('portfolio.view')->with('success', 'Data add success');
}
}



public function edit($id){
 $editData = Portfolio::find($id);
 return view ('backend.portfolio.edit-portfolio', compact('editData'));
}

public function update(Request $request, $id){
   $data = Portfolio::find($id);
   $data->updated_by = Auth::user()->id;
 $data->title = $request->title;
 $data->short_title = $request->short_title;
   if ($request->file('image')) {
       $file = $request->file('image');
       @unlink(public_path('upload/portfolio_images/'.$data->image));
       $filename =date('YmdHi').$file->getClientORiginalName();
       $file->move(public_path('upload/portfolio_images'), $filename);
       $data['image'] = $filename;
    $data->save();
   return redirect()->route('portfolio.view')->with('success', 'Data update success');
}
}

public function delete($id){
        $data = Portfolio::find($id);
        if (file_exists('public/upload/portfolio_images/' .$portfolio->image) AND ! empty($portfolio->image)) {
             unlink('public/upload/portfolio_images/' . $portfolio->image);
         }
        $data->delete();
        return redirect()->route('portfolio.view')->with('success', 'Data deleted success');
}
}
