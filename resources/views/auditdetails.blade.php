@extends('template.index')
@section('content')



<div class="card">
    {{-- {{$exporters}} --}}

    @php
      //  print_r($audit);
    @endphp
    
        
    <div class="container mt-5">
      <form  method="POST" enctype="multipart/form-data" action="{{ route('update_audit_details') }}">
        {{-- action="{{ route('audit.update', $audit->id) }}" --}}
          @csrf

          <input type="text" name="audit_id" value="{{$audit->id}}" hidden>
        
          <div class="form-group">
            <label for="auditcategoryId">Audit category : {{$audit->audit_category->name}}</label>
            <input type="text" name="audit_category_name" value="{{$audit->audit_category->name}}" hidden>
            <input type="text" name="audit_category_id" value="{{$audit->audit_category->id}}" hidden>
            <p></p>
        </div>
  
          <div class="form-group">
              <label for="auditSubcategoryId">Audit Subcategory : {{$audit->audit_subcategory->name}}</label>
              <input type="text" name="audit_subcategory_name" value="{{$audit->audit_subcategory->name}}" hidden>
              <input type="text" name="audit_subcategory_id" value="{{$audit->audit_subcategory->id}}" hidden>
              <p></p>
          </div>
  
          <div class="form-group">
              <label for="userId">Created by User : {{$audit->user->name}}</label>
              
          </div>
  
          <div class="form-group">
              <label for="auditName">Audit Name</label>
              <input type="text" class="form-control" id="auditName" name="audit_name" value="{{ $audit->audit_name }}">
          </div>
  
          <div class="form-group">
              <label for="auditDate">Audit Date</label>
              <input type="date" class="form-control" id="auditDate" name="audit_date" value="{{ $audit->audit_date }}">
          </div>
  
          <div class="form-group">
              <label for="hoplunConcern">Hoplun Concern</label>
              <input type="text" class="form-control" id="hoplunConcern" name="hoplun_concern" value="{{ $audit->hoplun_concern }}">
          </div>
  
          <div class="form-group">
              <label for="documentDetails">Document Details</label>
              <textarea class="form-control" id="documentDetails" name="document_details">{{ $audit->document_details }}</textarea>
          </div>
  
          <div class="form-group">
              <label for="documentLink">Document Link : <a href="{{$audit->document_link}}" target="_blank">Open</a></label>
              <input type="url" class="form-control" id="documentLink" name="document_link" value="{{ $audit->document_link }}">
          </div>
  
          <div class="form-group">
              <label for="capNcFile">CAP NC File : <a href="{{asset('storage/'.$audit->cap_nc_file)}}" target="_blank">Download</a></label>
              <input type="file" class="form-control" id="capNcFile" name="cap_nc_file" value="{{ $audit->cap_nc_file }}" accept="application/pdf">
              <iframe src="{{asset('storage/'.$audit->cap_nc_file)}}" width="50%" height="50%" frameborder="0"></iframe>
          </div>

          
  
          <div class="form-group">
              <label for="responseFile">Response File : <a href="{{asset('storage/'.$audit->response_file)}}" target="_blank">Download</a></label>
              <input type="file" class="form-control" id="responseFile" name="response_file" value="{{ $audit->response_file }}" accept="application/pdf">
              <iframe src="{{asset('storage/'.$audit->response_file)}}" width="50%" height="50%" frameborder="0"></iframe>
          </div>
  
          <div class="form-group">
              <label for="auditResult">Audit Result</label>
              <textarea class="form-control" id="auditResult" name="audit_result">{{ $audit->audit_result }}</textarea>
          </div>
  
          <div class="form-group">
              <label for="certificateFile">Certificate File : <a href="{{asset('storage/'.$audit->certificate_file)}}" target="_blank">Download</a></label>
              <input type="file" class="form-control" id="certificateFile" name="certificate_file" value="{{ $audit->certificate_file }}" accept="application/pdf">
              <iframe src="{{asset('storage/'.$audit->certificate_file)}}" width="50%" height="50%" frameborder="0"></iframe>
          </div>
  
          <div class="form-group">
              <label for="remainderDate">Remainder Date</label>
              <input type="date" class="form-control" id="remainderDate" name="remainder_date" value="{{ $audit->remainder_date }}">
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
  
          <button type="submit" class="btn btn-danger">Update</button>
      </form>

      
  </div>
       
    </div>

    <form action="{{ route('delete_audit_details') }}" method="POST" class="form-inline flex d-flex justify-content-center">
       @csrf
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Email</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Type 'Delete' For Delete this.">
        </div>

        <input type="text" name="audit_subcategory_id" value="{{$audit->audit_subcategory->id}}" hidden>
        <input type="text" name="audit_id" value="{{$audit->id}}" hidden>
        
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
      </form>

    
</div>

@endsection