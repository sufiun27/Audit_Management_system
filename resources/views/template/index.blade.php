<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Hop Lun</title>


    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://www.hoplun.com/storage/app/uploads/public/5ca/4d6/3d4/5ca4d63d4d92b995796472.jpg"
    />




    <!-- //////basic table css////////////// -->
    @yield('basic_table_css')
    @yield('yajra_datatable_css')

    
    <!-- Custom CSS -->
    <link href="{{asset('matrix/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('matrix/dist/css/style.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- boostrap 5 links -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script> -->
      <!-- boostrap 5 links -->
      
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}




  </head>

  <body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{route('dashboard')}}">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="https://www.hoplun.com/storage/app/uploads/public/5ca/4d6/3d4/5ca4d63d4d92b995796472.jpg"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                {{-- <img
                  src="{{asset('matrix/assets/images/logo-text.png')}}"
                  alt="homepage"
                  class="light-logo"
                /> --}}
                <b><h1>Hop Lun</h1></b>
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <span class="text-light">{{ auth()->user()->name }}</span>
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{asset('matrix/assets/images/users/1.jpg')}}"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('logout')}}"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              
              {{-- <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Style Analysis</span></a
                >
              </li> --}}

              <!-- New step style//////////////////// -->
              {{-- @can('policy', [App\Models\User::class, 'emp_manage']) --}}
              <li class="sidebar-item">
               <a
                 class="sidebar-link has-arrow waves-effect waves-dark"
                 href="javascript:void(0)"
                 aria-expanded="false"
                 ><i class="mdi mdi-format-wrap-inline"></i
                 ><span class="hide-menu">Audit </span></a
               >
               <ul aria-expanded="false" class="collapse first-level">

                {{-- <li class="sidebar-item">
                   <a href="{{route('styleComparison.styleComparisonStart')}}" class="sidebar-link">
                     <i class="mdi">C</i>
                     <span class="hide-menu"> Comparison </span></a
                   >
                </li> --}}

                 {{-- <li class="sidebar-item">
                   <a href="{{route('styleComparison.select')}}" class="sidebar-link"
                     ><i class="mdi">A N</i
                     ><span class="hide-menu"> Analysis </span></a
                   >
                 </li> --}}

                 @php
                 $site = auth()->user()->site;
                  $categorys = \App\Models\audit_category::where('site', $site)->get();
                  //print_r($categorys);
                 @endphp

                @can('policy', [App\Models\User::class, 'add_audit_category'])
                <li class="sidebar-item">
                  <a href="{{route('add_audit_category')}}" class="sidebar-link"> 
                    {{-- {{route('style.style')}} --}}
                    <i class="mdi">A </i>
                    <span class="hide-menu"> Add </span></a
                  >
                </li>
                @endcan
                

                  @foreach ($categorys as $category)
                  <li class="sidebar-item">
                    <a href="{{route('home', ['category' => $category->id])}}" class="sidebar-link"> 
                      {{-- {{route('style.style')}} --}}
                      <i class="mdi">{{substr($category->name,0,1)}} </i>
                      <span class="hide-menu"> {{$category->name}} </span></a
                    >
                  </li>
                  @endforeach

               </ul>
             </li>
           {{-- @endcan --}}


           



            {{-- </ul>
          </li> --}}
     <!-- Employees//////////////////// -->

               <!-- Employees//////////////////// have to enable this whenever setup it  --> 
               @can('policy', [App\Models\User::class, 'emp_manage'])
               <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Employees </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">

                <li class="sidebar-item">
                    <a href="{{route('employee.list')}}" class="sidebar-link">
                      <i class="mdi">L</i>
                      <span class="hide-menu"> List </span></a
                    >
                  </li>

                  <li class="sidebar-item">
                    <a href="{{route('employee.register')}}" class="sidebar-link"
                      ><i class="mdi">A N</i
                      ><span class="hide-menu"> Add  New </span></a
                    >
                  </li>



                </ul>
              </li>
            @endcan
      <!-- Employees//////////////////// -->

      {{--mdi-wrench--}}
      <li class="sidebar-item">
        <a
          class="sidebar-link  waves-effect waves-dark"
          href="javascript:void(0)"
          aria-expanded="false"
          ><i class="mdi mdi-wrench"></i
          ><span class="hide-menu" style="font-size: smaller;">Software Developed by<br>BD-IT: Abu Sufiun</span></a
        >
      </li>

          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ==Sub nav bar============================================================ -->
        
        <div class="bg-light">
          <div class="row">
              <div class="col text-end">
                  <a href="{{route('dashboard')}}">Dashboard</a> <span> &nbsp;&nbsp;&nbsp; </span>
                  {{-- <a href="{{route('home')}}">Home</a> <span> &nbsp;&nbsp;&nbsp; </span> --}}
                  {{-- <a href="{{route('style.styleCompare')}}">Comparison</a> <span> &nbsp;&nbsp;&nbsp; </span>
                  <a href="{{route('style.analysis')}}">Matrix Analysis</a> <span> &nbsp;&nbsp;&nbsp; </span>
                  <a href="{{route('style.lineSimple')}}">Sequential Analysis</a> <span> &nbsp; &nbsp;&nbsp; </span>
                  <a href="{{route('style.line')}}">Heretical Analysis</a> <span> &nbsp; &nbsp;&nbsp; </span>
                  <a href="{{route('style.sequence')}}">All Heretical Analysis</a> <span> &nbsp; &nbsp;&nbsp; </span>
                  <a href="{{route('style.multiLine')}}">Lines Wise Heretical Analysis</a> <span> &nbsp; &nbsp;&nbsp; </span> --}}
              </div>
          </div>
      </div>
        @yield('content')



        
        
    </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->

    <!-- ============================================================== -->
    <script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('matrix/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('matrix/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('matrix/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('matrix/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('matrix/dist/js/pages/chart/chart-page-init.js')}}"></script>

    @yield('yajra_datatable_js')
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script> -->


    @yield('basic_table')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
