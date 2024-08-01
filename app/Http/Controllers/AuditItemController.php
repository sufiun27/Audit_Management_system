<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\audit_item;
use App\Models\audit_subcategory;
use App\Models\audit_category;

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

    public function store_audit_details(Request $request)
    {
        $request->validate([
            'audit_category_id' => 'required|exists:audit_categories,id',
            'audit_category_name' => 'required|string|max:255',
            'audit_subcategory_id' => 'required|exists:audit_subcategories,id',
            'audit_subcategory_name' => 'required|string|max:255',
            'audit_name' => 'required|string|max:255',
            'audit_date' => 'required|date',
            'hoplun_concern' => 'nullable|string|max:255',
            'document_details' => 'nullable|string|max:255',
            'document_link' => 'nullable|url|max:255',
            'response_file' => 'nullable|file|mimes:pdf|max:10240', // 10MB limit for PDF
            'audit_result' => 'nullable|string|max:255',
            'certificate_file' => 'nullable|file|mimes:pdf|max:10240', // 10MB limit for PDF
            'remainder_date' => 'nullable|date',
            'creation' => 'nullable|string|max:255',
            'findings' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'cap_nc_file' => 'nullable|file|mimes:pdf|max:10240', // 10MB limit for PDF
        ]);
    
        // Check if the files are present in the request and store them
        $filePaths = [
            'cap_nc_file' => null,
            'response_file' => null,
            'certificate_file' => null,
        ];
    
        $auditCategory = audit_category::find($request->audit_category_id);
        $site = $auditCategory->site;
        $audit_name = $request->audit_name;
    
        if ($request->hasFile('cap_nc_file')) {
            $capNcFile = $request->file('cap_nc_file');
            $capNcFileName = $this->generateFileName($capNcFile, $request, 'cap_nc_file', $site, $audit_name);
            $filePaths['cap_nc_file'] = $capNcFile->storeAs($this->generateFilePath($request, $site), $capNcFileName, 'public');
        }
    
        if ($request->hasFile('response_file')) {
            $responseFile = $request->file('response_file');
            $responseFileName = $this->generateFileName($responseFile, $request, 'response_file', $site, $audit_name);
            $filePaths['response_file'] = $responseFile->storeAs($this->generateFilePath($request, $site), $responseFileName, 'public');
        }
    
        if ($request->hasFile('certificate_file')) {
            $certificateFile = $request->file('certificate_file');
            $certificateFileName = $this->generateFileName($certificateFile, $request, 'certificate_file', $site, $audit_name);
            $filePaths['certificate_file'] = $certificateFile->storeAs($this->generateFilePath($request, $site), $certificateFileName, 'public');
        }
    
        $audit = audit_item::create([
            'audit_subcategory_id' => $request->audit_subcategory_id,
            'user_id'=>auth()->user()->id,
            'audit_name' => $request->audit_name,
            'audit_date' => $request->audit_date,
            'hoplun_concern' => $request->hoplun_concern,
            'document_details' => $request->document_details,
            'document_link' => $request->document_link,
            'cap_nc_file' => $filePaths['cap_nc_file'],
            'response_file' => $filePaths['response_file'],
            'audit_result' => $request->audit_result,
            'certificate_file' => $filePaths['certificate_file'],
            'remainder_date' => $request->remainder_date,
            'creation' => $request->creation,
            'findings' => $request->findings,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Audit item created successfully.');
    }
    
    private function generateFileName($file, $request, $type, $site, $audit_name)
    {
        $timestamp = now()->format('Ymd_His');
        $fileExtension = $file->getClientOriginalExtension();
        return "{$site}-{$request->audit_category_name}-{$request->audit_subcategory_name}-{$audit_name}-{$type}-{$timestamp}.{$fileExtension}";
    }
    
    private function generateFilePath($request, $site)
    {
        return "{$site}/{$request->audit_category_name}/{$request->audit_subcategory_name}";
    }

    
    
}
