@extends('template.index')
@section('content')

@php
    $sites = App\Models\Site::all();
@endphp

<div class="card" >
    <div class="card-body">
        @php
        // echo $audit_category_id;
            $categorys_name = App\Models\audit_category::where('id', $audit_category_id)->pluck('name');
            // print_r($categorys_name);
        @endphp
      <h5 class="card-title">Audit Category : {{$categorys_name}}</h5>
      
      <form  action="{{ route('add_audit_subcategory') }}" method="POST">
        {{-- {{ route('add_audit_subcategory') }} --}}
        @csrf
        <input type="text" name="audit_category_id" value="{{$audit_category_id}}" hidden="true">
        <div class="form-group">
          <label  for="nameInput">Name</label>
          <input name="name" type="text" class="form-control" id="nameInput" placeholder="Enter name" required>
        </div>
        <div class="form-group">
          <label for="descriptionInput">Description</label>
          <textarea name="description" class="form-control" id="descriptionInput" placeholder="Enter description (optional)"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>
  </div>
</div>
        

        
       
 

@endsection