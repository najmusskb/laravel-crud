<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class category_controller extends Controller
{

 public function index()
   {

    $categories = category::get();
    // return  $categories;
    return view('category.index',compact('categories'));
   }
//    create 
 public function create()
    {
    return view('category.create');
   }
 public function store(Request $request)
  {
   $request->validate([
    'name'=>'required|max:191|string',
    'description'=>'required|max:191|string',
    'is_active'=>'sometimes'
   ]);
   category::create([
    'name'=>$request->name,
    'description'=>$request->description,
    'is_active'=>$request->is_active==true ? 1:0,
   ]);
   return redirect('categories/create')-> with('status','category created');
   }

// for edit ----------------------------------------------------------------
   public function edit(int $id){
   $category = category::findOrFail($id);
   return view('category.edit', compact('category'));
   // return $category;
   }


// For update------------------------------------------------------------
   public function update( Request $request, int $id){

   $request->validate([
    'name'=>'required|max:191|string',
    'description'=>'required|max:191|string',
    'is_active'=>'sometimes'
   ]);
   category::findOrFail($id)->update([
    'name'=>$request->name,
    'description'=>$request->description,
    'is_active'=>$request->is_active==true ? 1:0,
   ]);
   return redirect('categories')-> with('status','category Updated');

   }
// delete -------------------------------------------------------
public function destroy(int $id)
{
    $category = category::findOrFail($id);
    $category->delete();
    return redirect()->back()->with('status', 'Category Deleted');
}

}
