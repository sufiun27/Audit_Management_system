@extends('template.index')
@section('content')

<div class="main-wrapper">
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
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        "
      >
        <div class="auth-box bg-dark border-top border-secondary">
          <div>
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="{{asset('matrix/assets/images/logo.png')}}" alt="logo"
              /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal mt-3" method="POST" action="{{route('employee.update',$employee->id)}}">
                @csrf
    <div class="row pb-4">
        <div class="col-12">
            <!-- Username -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                        <i class="mdi mdi-account fs-4"></i>
                    </span>
                </div>
                <input
                    name="name"
                    type="text"
                    class="form-control form-control-lg"
                    Value="{{$employee->name}}"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Employee ID -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white h-100" id="basic-addon1">
                        <i class="mdi mdi-email fs-4"></i>
                    </span>
                </div>
                <input
                    name="emp_id"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->emp_id}}"
                    aria-label="Employee ID"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Email Address -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white h-100" id="basic-addon1">
                        <i class="mdi mdi-email fs-4"></i>
                    </span>
                </div>
                
                <input class="bg-danger"
                    name="email"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->email}}"
                    aria-label="Email Address"
                    aria-describedby="basic-addon1"
                    required
                />
                
                
            </div>

            <!-- Site -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="site"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->site}}"
                    aria-label="Site"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>
            <!-- DEpartment -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="department"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->department}}"
                    aria-label="Department"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Designation -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="designation"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->designation}}"
                    aria-label="Designation"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Address -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="address"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->address}}"
                    aria-label="Address"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Remarks -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="remarks"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->remarks}}"
                    aria-label="Remarks"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>

            <!-- Phone -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                    </span>
                </div>
                <input
                    name="phone"
                    type="text"
                    class="form-control form-control-lg"
                    value="{{$employee->phone}}"
                    aria-label="Phone"
                    aria-describedby="basic-addon1"
                    required
                />
            </div>
        </div>
    </div>
    <div class="row border-top border-secondary">
        <div class="col-12">
            <div class="form-group">
                <div class="pt-3 d-grid">
                    <button class="btn btn-block btn-lg btn-success" type="submit">
                        Update User
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
    </script>
@endsection