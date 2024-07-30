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
                  <h5 class="card-title">Employee</h5>
                  <div class="table-responsive">
                    <table  class="table table-striped table-bordered table-info">

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
                 
                        </tr>
                      </thead>
                      <tbody>
                        
                     
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

                            </tr>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>


            </div>
          </div>    
          <!-- end row -->
          <!-- ////user permission table -->
          <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Granted Permission List</h5>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm p-0 m-0">
                      <thead class="table-info">
                        <tr>
                        <th>Modeule</th>
                          <th>Name</th>
                          <th>status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        
                        @foreach($user_permissions as $user_permissions)
                            <tr>                            
                                <td>{{ $user_permissions->permission->module }}</td>   
                                <td>{{ $user_permissions->permission->name }}</td>   
                                <td
                                  @if($user_permissions->status == 1)
                                  class="table-success">
                                      Active
                                  @else
                                  class="table-danger">
                                      Deactive
                                  @endif
                                </td>
                                <td>
                                    
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-table-edit"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-success" href="{{ route('employee.permissions.activate', ['id' => $user_permissions->id]) }}">Active</a></li>
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-warning" href="{{ route('employee.permissions.deactivate', ['id' => $user_permissions->id]) }}">Deactive</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li class="text-center"><a class="dropdown-item btn btn-xs bg-danger" href="{{ route('employee.permissions.remove', ['id' => $user_permissions->id]) }}">Remove</a></li>
                                    </ul>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                      
                  </table>
                      
                    

          <!-- ////Give permission table -->
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Permission List</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead class="table-primary">
                        <tr>
                        <th>Modeule</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($permissions as $permissions)
                            <tr>
                                <td>{{ $permissions->module}}</td>
                                <td>{{ $permissions->name }}</td>
                                <td>{{ $permissions->description }}</td>
                                  <td><a href="{{ route('employee.permissions.add', ['e_id' => $employee->id, 'p_id' => $permissions->id]) }}" class="btn btn-success btn-xs">Add</a></td>
                                  
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Module</th>
                        <th>Name</th>
                        <th>Description</th>
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