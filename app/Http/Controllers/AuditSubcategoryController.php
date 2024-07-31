<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit_subcategory;

class AuditSubcategoryController extends Controller
{
    //add_audit_subcategory
    public function add_audit_subcategory($audit_category_id){
        return view('add_audit_subcategory', compact('audit_category_id'));
    }

    public function store(Request $request){
       // dd($request->all());
        $subcategory = new audit_subcategory();
        $subcategory->user_id = auth()->user()->id;
        $subcategory->audit_category_id = $request->audit_category_id;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->save();
        return redirect()->back();
    }
}
