<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\audit_item;
use App\Models\audit_subcategory;

class AuditItemController extends Controller
{
    public function index($audit_subcategory_id)
    {
        $audit = audit_item::where('audit_subcategory_id', $audit_subcategory_id)->get();
        
        
        return view('audit', compact('audit', 'audit_subcategory_id'));
    }

    public function auditdetails($audit_id)
    {
        $audit = audit_item::find($audit_id);
        
        return view('auditdetails', compact('audit'));
    }

    public function add_audit($audit_subcategory_id){
       $audit = audit_subcategory::find($audit_subcategory_id);
       //return $audit;
       return view('add_audit_details', compact('audit'));
       
    }
}
