<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\audit_item;

class AuditItemController extends Controller
{
    public function index($audit_subcategory_id)
    {
        $audit = audit_item::where('audit_subcategory_id', $audit_subcategory_id)->get();
        
        
        return view('audit', compact('audit'));
    }

    public function auditdetails($audit_id)
    {
        $audit = audit_item::find($audit_id);
        
        return view('auditdetails', compact('audit'));
    }
}
