<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit_subcategory;

class AuditCategoryController extends Controller
{
    public function index($category){
        
        $audit_subcategories = audit_subcategory::where('audit_category_id', $category)->get();
      //  dd($audit_subcategories);
       return view('home', compact('audit_subcategories'));
       // return $category;

    }
}
