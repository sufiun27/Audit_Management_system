<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit_item;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        
        $site = auth()->user()->site;
        //select today date 
        $today = date("Y-m-d");
        // $audit = audit_item::where('remainder_date', '<', Carbon::now()->addDays(150)->startOfDay())
        //     ->get(); // inner join with audit_subcategory , on audit_subcategory_id = audit_subcategory.id
        //                 //also inner join with audit_categoty , on audit_subcategory.audit_category_id = audit_category.id
        //                 // where audit_category.site = $site

        $audit = audit_item::where('remainder_date', '<', Carbon::now()->addDays(15)->startOfDay())
    ->join('audit_subcategories', 'audit_items.audit_subcategory_id', '=', 'audit_subcategories.id')
    ->join('audit_categories', 'audit_subcategories.audit_category_id', '=', 'audit_categories.id')
    ->where('audit_categories.site', $site)
    ->get();
        
    return view('dashboard', compact('audit'));
    }
}
