@extends('template.index')

@section('basic_table_css')
   
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('matrix/assets/extra-libs/multicheck/multicheck.css')}}"
    />
    <link
      href="{{asset('matrix/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"
      rel="stylesheet"
    />
@endsection


@section('content')
<!-- ==================================================== -->
<!-- Include this in your Blade view where you want to display messages -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Employee List
                    <p>can out side</p>
                   
                  </h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                        <th>ID</th>
                          <th>Name</th>
                          
                          <th>Designation</th>
                          <th>Department</th>
                          <th>site</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>remarks</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->emp_id }}</td>
                                <td>{{ $employee->name }}</td>                               
                                <td>{{ $employee->designation}}</td>
                                <td>{{ $employee->department}}</td>
                                <td>{{ $employee->site}}</td>
                                <td>{{ $employee->email}}</td>
                                <td>{{ $employee->phone}}</td>
                                <td>{{ $employee->address}}</td>
                                <td>{{ $employee->remarks}}</td>
                                <td
                                @if($employee->status == 1)
                                 class="table-success">
                                    Active
                                @else
                                class="table-danger">
                                    Deactive
                                @endif
                                </td>
                                <!-- Add more columns as needed -->
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-success" href="{{ route('employee.activate', ['id' => $employee->id]) }}">Active</a></li>
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-warning" href="{{ route('employee.deactivate', ['id' => $employee->id]) }}">Deactive</a></li>
                                     
                                        <li><hr class="dropdown-divider"></li>
                                      
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-primary" href="{{ route('employee.edit', ['id' => $employee->id]) }}">Edit</a></li>
                                     
                                        
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-danger" href="{{ route('employee.delete', ['id' => $employee->id]) }}">Delete</a></li>
                                       
                                        <li><hr class="dropdown-divider"></li>   
                                        @can('policy', [App\Models\User::class, 'emp_permissions'])                             
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-info" href="{{ route('employee.permissions', ['id' => $employee->id]) }}">Permissions</a></li>
                                       @endcan
                                      </ul>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                          
                          <th>Designation</th>
                          <th>Department</th>
                          <th>site</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>remarks</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
       
@endsection

@section('basic_table')
    <!-- this page js -->
    <script src="{{asset('matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
@endsection