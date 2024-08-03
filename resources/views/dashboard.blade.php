@extends('template.index')
@section('content')



<div class="card">
    {{-- {{$exporters}} --}}

    <div class="card-body">
        <div class="card-title">
            <h5>Template</h5>
        </div>
        
        
        
        
        
            {{-- {{$exporters}} --}}
        
            @php
                //print_r($audit);
            @endphp
            {{-- <h2>Audit SubCategory id : {{$audit_subcategory_id}}</h2> --}}
            <div class="row">
            @foreach ($audit as $audit)
            <div class="col-md-4">
            <div class="card " style="width: 18rem; background-color: rgba(238, 153, 153, 0.445);">
                <div class="card-body">
                    <h3>Audit</h3>
                    <h4>Category: {{$audit->audit_category->name}}</h4>
                    <h4>Sub-Category: {{$audit->audit_subcategory->name}}</h4>
                  <h5 class="card-title">Name: {{$audit->audit_name}}</h5>
                  <p class="card-text">Audit Date: {{$audit->audit_date}}</p>
                  <p class="card-text">HopLun Concern: {{$audit->hoplun_concern}}</p>
                  <p class="card-text ">Remainder Date: {{$audit->remainder_date}}</p>
                  <p class="card-text">Document Details: {{$audit->document_details}}</p>
                  <a href="{{route('auditdetails', ['id' => $audit->id])}}" class="btn btn-primary">Select</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
                
        
           
       
    </div>

    <div class="card-footer">
        <span>Developed By: Abu Sufiun - abu.sufiun@hoplun.com - BD IT </span>
    </div>
</div>

@endsection