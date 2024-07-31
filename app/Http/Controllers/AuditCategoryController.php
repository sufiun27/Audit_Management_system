<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit_subcategory;
use App\Models\audit_category;

class AuditCategoryController extends Controller
{
    public function index($category){
        
        $audit_subcategories = audit_subcategory::where('audit_category_id', $category)->get();
      //  dd($audit_subcategories);
       return view('home', compact('audit_subcategories', 'category'));
       // return $category;

    }

    public function store(Request $request){
        //dd($request->all());
        $category = new audit_category();
        $category->user_id = auth()->user()->id;
        $category->site = $request->site;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back();
    }
}
