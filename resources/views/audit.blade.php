@extends('template.index')
@section('content')



<div class="card">
    {{-- {{$exporters}} --}}

    @php
        //print_r($audit);
    @endphp
    <div class="row">
        
    
    @foreach ($audit as $audit)
    <div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Audit Name: {{$audit->audit_name}}</h5>
          <p class="card-text">Audit Date: {{$audit->audit_date}}</p>
          <p class="card-text">HopLun Concern: {{$audit->hoplun_concern}}</p>
          <p class="card-text">Remainder Date: {{$audit->remainder_date}}</p>
          <p class="card-text">Document Details: {{$audit->document_details}}</p>
          <a href="{{route('auditdetails', ['id' => $audit->id])}}" class="btn btn-primary">Select</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
        

        
       
    </div>

    
</div>

@endsection