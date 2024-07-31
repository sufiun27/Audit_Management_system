@extends('template.index')
@section('content')

@php
    $sites = App\Models\Site::all();
@endphp

<div class="card" >
    <div class="card-body">
      <h5 class="card-title">Audit Category</h5>
      
      <form action="{{ route('add_audit_category') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="siteInput">Site</label>
          <select class="form-control" id="siteInput" name="site" required>
            @foreach ($sites as $site)
            <option value="{{ $site->name }}">{{ $site->name }}</option>
            @endforeach
          </select>
        </div>
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