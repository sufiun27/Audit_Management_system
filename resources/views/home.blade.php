@extends('template.index')
@section('content')



<div class="card">
    {{-- {{$exporters}} --}}

    @php
       // print_r($audit_subcategories);
    @endphp
    <div class="row">
        
    
    @foreach ($audit_subcategories as $audit_subcategorie)
    <div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$audit_subcategorie->name}}</h5>
          <p class="card-text">{{$audit_subcategorie->description}}</p>
          <a href="{{route('audit', ['audit_subcategory_id' => $audit_subcategorie->id])}}" class="btn btn-primary">Select</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
        

        
       
    </div>

    
</div>

@endsection