@extends('template.index')
@section('content')



<div class="card">
    {{-- {{$exporters}} --}}

    @php
      //  print_r($audit);
    @endphp
        {{-- <h4>category : {{$audit->audit_category->name}}</h4>
        <h4>subcategory : {{$audit->name}}</h4> --}}

        
        <div class="container mt-5">
          <form action="{{ route('store_audit_details') }}" method="POST" enctype="multipart/form-data">
            {{-- action="{{ route('store_audit_details') }}" --}}
              @csrf
             
              <div class="form-group">
                <label for="auditcategoryId">Audit category : {{$audit->audit_category->name}}</label>
                <input type="text" class="form-control"  name="audit_category_name" value="{{$audit->audit_category->name}}" hidden >
                <input type="text" class="form-control" id="auditcategoryId" name="audit_category_id" value="{{$audit->audit_category->id}}" hidden >
                <p></p>
            </div>
      
              <div class="form-group">
                  <label for="auditSubcategoryId">Audit Subcategory : {{$audit->name}}</label>
                  <input type="text" class="form-control"  name="audit_subcategory_name" value="{{$audit->name}}" hidden >
                  <input type="text" class="form-control" id="auditSubcategoryId" name="audit_subcategory_id" value="{{$audit->id}}" hidden >
                  <p></p>
              </div>
      
              
      
              <div class="form-group">
                  <label for="auditName">Audit Name</label>
                  <input type="text" class="form-control" id="auditName" name="audit_name" old="{{ $audit->audit_name }}">
              </div>
      
              <div class="form-group">
                  <label for="auditDate">Audit Date</label>
                  <input type="date" class="form-control" id="auditDate" name="audit_date" old="{{ $audit->audit_date }}">
              </div>
      
              <div class="form-group">
                  <label for="hoplunConcern">Hoplun Concern</label>
                  <input type="text" class="form-control" id="hoplunConcern" name="hoplun_concern" old="{{ $audit->hoplun_concern }}">
              </div>
      
              <div class="form-group">
                  <label for="documentDetails">Document Details</label>
                  <textarea class="form-control" id="documentDetails" name="document_details">{{ $audit->document_details }}</textarea>
              </div>
      
              <div class="form-group">
                  <label for="documentLink">Document Link</label>
                  <input type="url" class="form-control" id="documentLink" name="document_link" old="{{ $audit->document_link }}">
              </div>
      
              <div class="form-group">
                  <label for="capNcFile">CAP NC File</label>
                  <input type="file" class="form-control" id="capNcFile" name="cap_nc_file" old="{{ $audit->cap_nc_file }}" accept="application/pdf">
              </div>
      
              <div class="form-group">
                  <label for="responseFile">Response File</label>
                  <input type="file" class="form-control" id="responseFile" name="response_file" old="{{ $audit->response_file }}" accept="application/pdf">
              </div>
      
              <div class="form-group">
                  <label for="auditResult">Audit Result</label>
                  <textarea class="form-control" id="auditResult" name="audit_result">{{ $audit->audit_result }}</textarea>
              </div>
      
              <div class="form-group">
                  <label for="certificateFile">Certificate File</label>
                  <input type="file" class="form-control" id="certificateFile" name="certificate_file" old="{{ $audit->certificate_file }}" accept="application/pdf">
              </div>
      
              <div class="form-group">
                  <label for="remainderDate">Remainder Date</label>
                  <input type="date" class="form-control" id="remainderDate" name="remainder_date" old="{{ $audit->remainder_date }}">
              </div>
      
              <div class="form-group">
                  <label for="creation">Creation</label>
                  <textarea class="form-control" id="creation" name="creation">{{ $audit->creation }}</textarea>
              </div>
      
              <div class="form-group">
                  <label for="findings">Findings</label>
                  <textarea class="form-control" id="findings" name="findings">{{ $audit->findings }}</textarea>
              </div>
      
              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description">{{ $audit->description }}</textarea>
              </div>
      
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    
    
</div>

@endsection