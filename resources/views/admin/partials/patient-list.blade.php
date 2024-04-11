<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Patient records | Aglae provost-Fleury - podologue</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Datatable css -->
        <link href="/admin/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="/admin/assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="/admin/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

                <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
            .input-group-texte{
                font-size: 0.9rem!important;
            }
        </style>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">



            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/admin/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                    <span class="align-middle d-none d-lg-inline-block">{{ Config::get('languages')[App::getLocale()] }}</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                </a>
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
                </div>
            </li>

            {{-- <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line font-22"></i>
                    <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 font-16 fw-semibold"> {{ __('Notification') }}</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="px-3" style="max-height: 300px;" data-simplebar>

                        <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="/admin/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="/admin/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center">
                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                        </div>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li> --}}

            <li class="dropdown d-none d-sm-inline-block">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-apps-2-line font-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                   <a href="https://www.zoho.com/mail/" target="_blank"> <img src="/admin/assets/images/brands/mail.svg"  width="70" height="44" alt="Zoho Mail "></a>
                                    <span>Mail</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                   <a href="https://calendar.google.com/calendar/u/0/r/month" target="_blank"><img src="/admin/assets/images/brands/g-suite.png" width="50" height="44" alt="G Suite"></a> 
                                    <span>{{ __('Calendar') }}</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                   <a href="https://calendly.com/" target="_blank"> <img src="/admin/assets/images/brands/calendly.svg" width="50" height="44" alt="Calendly">
                                    <span>Calendly</span></a>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <i class="ri-settings-3-line font-22"></i>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>


            <li class="d-none d-md-inline-block">
                <a class="nav-link" href="" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line font-22"></i>
                </a>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="/admin/assets/images/users/aglae-provost-fleury-admin-avatar.png" alt="admin-image" width="32" class="rounded-circle">
                    </span>
                    <span class="d-lg-flex flex-column gap-1 d-none">
                        <h5 class="my-0">{{ Auth::user()->name }}</h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <!-- item-->
                    <a class="dropdown-item">
                        {{-- <i class="mdi mdi-account-circle me-1"></i> --}}
                        <a  class="dropdown-item" class="h-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout me-1"></i>     {{ __('Logout') }}
                            </a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>                       
                        </a>
                    <!-- item-->
                </div>
            </li>
        </ul>
    </div>
</div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2">{{ Auth::user()->name }}</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">{{ __('Navigation') }}</li>

                        <li class="side-nav-item">
                                <a href="{{ route('home') }}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                {{-- <span class="badge bg-success float-end">5</span> --}}
                                <span> {{ __('Dashboard') }} </span>
                            </a>

                        </li>

                        <li class="side-nav-title">Apps</li>

                        <li class="side-nav-item">
                        <a href="{{ route('calendar') }}" class="side-nav-link" target="_blank">
                                <i class="uil-calender"></i>
                                <span> {{ __('Calendar') }} </span>
                            </a>
                        </li>



                        <li class="side-nav-item">
                                <a href="{{ route('patient') }}" class="side-nav-link">
                                <i class="ri-group-fill"></i>
                                {{-- <span class="badge bg-success float-end">5</span> --}}
                                <span> {{ __('Patients') }} </span>
                            </a>

                        </li>

                            <li class="side-nav-item">
                                <a href="{{ route('service') }}" class="side-nav-link">
                                <i class=" ri-file-settings-line"></i>
                                {{-- <span class="badge bg-success float-end">5</span> --}}
                                <span> {{ __('Service') }} </span>
                            </a>

                        </li>

                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Aglaë </a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('Vue Patient') }}</a></li>
                                            <li class="breadcrumb-item active">{{ __('Patient') }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ __('Patient') }}</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#patientModal">
                                                    {{ __('Add Patient') }}
                                                </button>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="text-sm-end">
                                                    {{-- <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button> --}}
                                                    {{-- <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button> --}}
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <!-- ================Modal ============== -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="patientModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="patientModaltitle"></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div  class="modal-body">
                                                <div class="form-group mb-3">
                                                    <p class="p-sm input-header">{{ __('Name') }} &#42;</p>
                                                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="" id="name" required autocomplete="name" autofocus> 
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <p class="p-sm input-header">{{ __('Email') }}<span class="input-group-texte" data-toggle="tooltip" data-placement="top" title="{{ __("The email field is mandatory and distinct for each patient. It cannot be changed. If you do not have the email, please use the patient's first name, such as firstname@mail.com or firstname123@mail.com.") }}">
                                                                <i style="color: red" class="fas fa-info-circle"></i>
                                                            </span>  </p>
                                                    <div class="input-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" autocomplete="email">
                                                        <div class="input-group-append">

                                                        </div>
                                                    </div>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>                                                
                                                {{-- <div class="form-group mb-3">
                                                    <p  class="p-sm input-header">{{ __('Email') }}</p>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" autocomplete="email">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div> --}}
                                                    <div class="form-group mb-3">
                                                <p class="p-sm input-header">{{ __('Phone Number') }} &#42;</p>
                                                <input id="Phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="" required autocomplete="phone" autofocus>
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                <button type="button" class="btn btn-primary" id="saveBtn"></button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- ================ END Modal ============== -->
                
                                    <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="patient-datatable">
                                            <thead>
                                                <tr >
                                                    <th scope="col">Id</th>
                                                    <th scope="col">{{ __('Name') }}</th>
                                                    <th scope="col">{{ __('Phone') }}</th>
                                                    <th scope="col">{{ __('Email') }}</th>
                                                    <th style="width: 75px;" scope="col">{{ __('Actions') }}</th> <!-- New column for actions -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Table body will be dynamically populated -->
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                    @include('admin.partials.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
         @include('admin.partials.themesetting')

        <!-- Vendor js -->
        <script src="/admin/assets/js/vendor.min.js"></script>

        <!-- Datatable js -->
        <script src="/admin/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/admin/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="/admin/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/admin/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="/admin/assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <!-- App js -->
        <script src="/admin/assets/js/app.min.js"></script>

        <!-- Customers Demo App js -->
        <script>
    $(document).ready(function() {
        "use strict";



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#patientModaltitle').html('{{ __("Add Patient") }}');
        $('#saveBtn').html('{{ __("Save Patient") }}');
        $("#saveBtn").on("click", function() {
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var phone = $("input[name='phone']").val();

            // AJAX Request
            $.ajax({
                url: '/create-patient', // Route to create patient
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                },
                success: function(response) {
                    // Handle success response from the backend
                    //console.log(response.user); // Access the user data returned by the backend

                    // Show SweetAlert for success
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __("Success!") }}',
                        text: '{{ __("New patient added successfully!") }}',
                        showConfirmButton: false,
                        timer: 1500 // Close after 1.5 seconds
                    }); location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle errors here                   
                    // Swal.fire({
                    // icon: "error",
                    // title: "Oops...",
                    // text: "Something went wrong!",
                    // footer: 'Please make sure to avoid duplicate email or phone number!',
                    // timer: 3500 // Close after 1.5 seconds
                    // }); location.reload();
                }
            });
                
        });


        $('#patient-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/fetch-users', // Endpoint to fetch users from server
                type: 'GET'
            },
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'phone' },
                { data: 'email' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `<button class="edit-btn" data-id="${row.id}"><i class="mdi mdi-square-edit-outline"></i></button>
                                <button class="delete-btn" data-id="${row.id}"><i class="mdi mdi-delete"></i></button>
                                <button class="view-btn" data-id="${row.id}"><i class="mdi mdi-eye"></i></button>`;
                    }
                }
            ]
        });

        // Edit button click event handler
        $('#patient-datatable').on('click', '.edit-btn', function() {
            var userId = $(this).data('id');
            // Assuming you have a route like '/get-user/{id}' to fetch user details by ID
            $.ajax({
                url: '/get-user/' + userId,
                type: 'GET',
                success: function(response) {
                    // Populate the modal with the user details for editing
                    var user = response.user;
                    $('#name').val(user.name);
                    $('#email').val(user.email);
                    $('#Phone').val(user.phone);
                    // Show the modal for editing
                    $('#patientModaltitle').html('{{ __("Edit Patient") }}');
                    $('#saveBtn').html('{{ __("Update Patient") }}');
                    $('#patientModal').modal('show');
                    // Attach the user ID to the Save button in the modal for update operation
                    $('#saveBtn').data('userid', userId);


                }
                // error: function(xhr, status, error) {
                     
                // }
            }); 
            
            $('#patient-datatable').DataTable().ajax.reload();
        });

        // Delete button click event handler
        $('#patient-datatable').on('click', '.delete-btn', function() {
            var userId = $(this).data('id');

            // Show confirmation alert using SweetAlert2
            Swal.fire({
                title: '{{ __("Are you sure?") }}',
                text: '{{ __("You will not be able to retrieve this!") }}',
                icon: 'warning',
                //showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '{{ __("Yes, delete it!") }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with deletion
                    $.ajax({
                        url: '/delete-user/' + userId,
                        type: 'DELETE',
                        success: function(response) {
                            // Show a success message or update the UI accordingly
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ __("Patient deleted successfully!") }}',
                                showConfirmButton: false,
                                timer: 1500 // Close after 1.5 seconds
                            });
                            // Reload the DataTable after deletion
                            $('#patient-datatable').DataTable().ajax.reload();
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                        }
                    });
                }
            });
        });

            $('#saveBtn').on('click', function() {
            var userId = $(this).data('userid'); // Get the user ID from the Save button
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#Phone').val();
            // Make an AJAX call to update user details
            $.ajax({
                url: '/update-user/' + userId,
                type: 'PUT',
                data: {
                    name: name,
                    email: email,
                    phone: phone
                },
                success: function(response) {
                    // Show a success message or update the UI accordingly
                    
                       Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: ' {{ __("Patient Updated successfully!") }}',
                        showConfirmButton: false,
                        timer: 1500 // Close after 1.5 seconds
                    }); 
                    // Reload the DataTable after update
                    $('#patient-datatable').DataTable().ajax.reload();
                    // Close the modal after successful update
                    location.reload();
                }
                // error: function(xhr, status, error) {
                //     // Handle errors
                // }
            });
        });

        $('#patient-datatable tbody').on('click', '.view-btn', function() {
            var userId = $(this).data('id');
            if (userId) {
                window.location.href = '/user-details/' + userId; // Redirect to the user details view
            }
        });




    });


</script>



</body>
</html>








