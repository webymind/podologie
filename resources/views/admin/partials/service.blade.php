<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Service | Aglae Provost-fleury Podologue</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
                                    <img src="/admin/assets/images/brands/mail.svg"  width="auto" height="44" alt="Zoho Mail ">
                                    <span>Mail</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/admin/assets/images/brands/g-suite.png" alt="G Suite">
                                    <span>{{ __('Calendar') }}</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="/admin/assets/images/brands/calendly.svg" width="auto" height="44" alt="Calendly">
                                    <span>Calendly</span>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Aglae</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Vue Service</a></li>
                                            <li class="breadcrumb-item active">Service</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Type de consultation</h4>
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
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#serviceModal">
                                                    {{ __('Add Service') }}
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
                                <!-- Your modal structure -->
                                <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="serviceModaltitle"></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" id="serviceId" name="serviceId" value=""> 
                                                <div class="form-group mb-3">
                                                    <label for="serviceName">Service Name</label>
                                                    <input type="text" class="form-control" id="serviceName" placeholder="Enter service name">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="servicePrice">Service Price</label>
                                                    <input type="number" class="form-control" id="servicePrice" placeholder="Enter service price">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="saveServiceBtn"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                        <!-- ================ END Modal ============== -->                
                                    
                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="service-datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th style="width: 75px;" scope="col">Actions</th> <!-- New column for actions -->
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

                {{-- <!-- Footer Start -->
                    @include('admin.partials.footer')
                <!-- end Footer --> --}}

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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#serviceModaltitle').html('Add New Service');
        $('#saveServiceBtn').html('Save Service');
        $('#saveServiceBtn').on('click', function() {

            var serviceName = $('#serviceName').val();
            var servicePrice = $('#servicePrice').val();
            if (serviceName.trim() !== '' && servicePrice.trim() !== '') {
                // Prepare data to send via Ajax
                var data = {
                    name: serviceName,
                    price: servicePrice
                };

                // Send data to the backend using Ajax
                $.ajax({
                    type: 'POST',
                    url: '/services',
                    data: data,
                    success: function(response) {
                        // Display success message using SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Service created successfully!',
                            text: 'Service Name: ' + response.service.name + ', Price: ' + response.service.price,
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                // Close the modal programmatically
                                $('#serviceModal').modal('hide'); location.reload();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle errors with a SweetAlert2 error message (if needed)
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error creating the service.',
                        });
                        console.error('Error adding service:', error);
                    }
                });
            } else {
                // Show an error message or perform some action if fields are empty
                console.log('Service name and price are required.');
            }
        });



        $('#service-datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('services.getData') }}",
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "price" },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="edit-btn" data-id="${row.id}"><i class="mdi mdi-square-edit-outline"></i></button>
                                <button class="delete-btn" data-id="${row.id}"><i class="mdi mdi-delete"></i></button>`;
                    }
                }
            ]
        });



        // Edit Service - Open Modal with Service Details
        $('#service-datatable').on('click', '.edit-btn', function() {
            var serviceId = $(this).data('id');

            // Fetch service details via Ajax
            $.ajax({
                type: 'GET',
                url: '/services/' + serviceId,
                success: function(response) {
                    var service = response.service;

                    // Populate modal fields with service details
                    $('#serviceId').val(service.id); // Set the value of the hidden field
                    $('#serviceName').val(service.name);
                    $('#servicePrice').val(service.price);

                    // Update the modal title and button for edit
                    $('#serviceModaltitle').html('Edit Service');
                    $('#saveServiceBtn').off('click').on('click', function() {
                        updateService(serviceId);
                    });

                    // Show the modal
                    $('#serviceModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching service:', error);
                }
            });
        });

        // Save Service - Update or Create based on serviceId presence
        function updateService(serviceId) {
            var serviceName = $('#serviceName').val();
            var servicePrice = $('#servicePrice').val();

            var data = {
                name: serviceName,
                price: servicePrice
            };

            if (serviceId) {
                // Update Service
                $.ajax({
                    type: 'PUT',
                    url: '/services/' + serviceId,
                    data: data,
                    success: function(response) {
                        // Handle success
                        Swal.fire({
                            icon: 'success',
                            title: 'Service updated successfully!',
                            text: 'Service Name: ' + response.service.name + ', Price: ' + response.service.price,
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                $('#serviceModal').modal('hide');
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error('Error updating service:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error updating the service.',
                        });
                    }
                });
            } else {
                // Create Service
                $.ajax({
                    type: 'POST',
                    url: '/services',
                    data: data,
                    success: function(response) {
                        // Handle success
                        Swal.fire({
                            icon: 'success',
                            title: 'Service created successfully!',
                            text: 'Service Name: ' + response.service.name + ', Price: ' + response.service.price,
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                $('#serviceModal').modal('hide');
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error('Error adding service:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error creating the service.',
                        });
                    }
                });
            }
        }





        // Delete Service
        $('#service-datatable').on('click', '.delete-btn', function() {
            var serviceId = $(this).data('id');

            // Display SweetAlert2 confirmation modal
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send delete request to the backend using Ajax
                    $.ajax({
                        type: 'DELETE',
                        url: '/services/' + serviceId, // Replace with your route to delete a service
                        success: function(response) {
                            // Handle success
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message // Update with the success message received from the backend
                            });
                            // Reload the DataTable or remove the specific row
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Error deleting service!',
                                footer: 'Error: ' + error // Display the specific error message
                            });
                            console.error('Error deleting service:', error);
                        }
                    });
                }
            });
        });







    });
</script>


</body>
</html>








