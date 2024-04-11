<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Patient-details | Podologue.mu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Theme Config Js -->
        <script src="/admin/assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="/admin/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <style>
            .table-responsive table {
                white-space: nowrap; /* Prevent line breaks on table cells */
            }

            .table-responsive th,
            .table-responsive td {
                white-space: normal; 
                overflow: hidden;  
                text-overflow: ellipsis; 
            }

            #medicalHistoryTable_length{
                display: none!important;
            }
            #medicalHistoryTable_filter{
                display: none!important;
            }

            #consultationTable_length{
                display: none!important;
            }

            #consultationTable_filter{
                display: none!important;
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Aglae</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url('/patient-list') }}">{{ __('Patient Details') }}</a></li>
                                            <li class="breadcrumb-item active">{{ __('Patient Records') }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ $user->name }}</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="/admin/assets/images/users/avatar_3_2.png" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-3 mt-2">{{ $user->name }}</h4>
                                        <h5 class="mb-3 mt-2">Contact: {{ $user->phone }}</h5>
                                        <a class="btn btn-success btn-sm mb-3"  href="https://api.whatsapp.com/send?phone=230{{$user->phone}}&text=Welcome!%20Press%20send%20to%20start%20your%20conversation&utm_campaign=alwayson&utm_content=paid&lang=en" target="_blank">WhatsApp</a>
                                    

                                        <a class="btn btn-primary btn-sm mb-3"  href="mailto:{{$user->email}}?subject=Subject%20of%20the%20Email&body=Body%20of%20the%20Email">{{ __('Send Email') }}</a>

                                    


                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                                <!-- Messages-->

                            </div> <!-- end col-->

                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <ul class="mb-3 mt-3" style="float: left">
                                            <li>{{ __('Medical History') }}: <Strong style="color: rgb(21, 169, 214)">{{ $medicalHistoryCount }}</Strong> </li>

                                                    @if($user->consultations->isNotEmpty())
                                                        @php
                                                            $latestConsultation = $user->consultations->last(); // Fetching the latest consultation
                                                        @endphp
                                                        <li> 
                                                            {{ __('Consultation') }} : <Strong style="color: rgb(21, 169, 214)"> {{ $latestConsultation->consultation_name }}
                                                        </li></Strong> 
                                                        <li> 
                                                            {{ __('Payment Method') }} : <Strong style="color: rgb(21, 169, 214)"> {{ $latestConsultation->payment_method }}
                                                        </li></Strong> 
                                                    @else
                                                        <li>
                                                            {{ __('No consultations available') }}
                                                        </li>
                                                    @endif


                                            
                                            <Strong style="color: rgb(21, 169, 214)">    <li id="selectedStatus">{{ __('Invoice Status') }} :</li></Strong> 

                                            
                                        </ul>
                                        {{-- <a class="btn btn-success btn-sm mb-3"  href="https://api.whatsapp.com/send?phone=230{{$user->phone}}&text=Welcome!%20Press%20send%20to%20start%20your%20conversation&utm_campaign=alwayson&utm_content=paid&lang=en" target="_blank">WhatsApp</a>
                                    

                                        <a class="btn btn-primary btn-sm mb-3"  href="mailto:{{$user->email}}?subject=Subject%20of%20the%20Email&body=Body%20of%20the%20Email">Send Email</a> --}}

                                    

                                        {{-- <div class="text-start mt-3">
                                            <h4 class="font-13 text-uppercase">About Me :</h4>
                                            <p class="text-muted font-13 mb-3">
                                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type.
                                            </p>
                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Geneva
                                                    D. McKnight</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123)
                                                    123 1234</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">user@email.domain</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">USA</span></p>
                                        </div> --}}

                                        {{-- <ul class="social-list list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                                        class="mdi mdi-whatsapp"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                        class="mdi mdi-google"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                        class="mdi mdi-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                                        class="mdi mdi-github"></i></a>
                                            </li>
                                        </ul> --}}
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->



                            </div>                             

                            <div class="row">
                                <div >                                 
                                    <div class="card text-center">                                      
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#aboutme" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                                    {{ __('HISTORY') }}
                                                </a>
                                            </li>                                                 
                                            <li class="nav-item">
                                                <a href="#timeline" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 ">
                                                    {{ __('CONSULTATION') }} 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#invoice" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    {{ __('INVOICE') }}
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                    
                                            <div class="tab-pane show active"  id="aboutme">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                    {{ __('Medical History') }}</h5> 
                                                    
                                                    {{-- <i style="color: blue;" class="uil-book-medical"  data-bs-toggle="modal" data-bs-target="#medicalHistoryModal"></i> --}}

                                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#medicalHistoryModal"><i class="uil-book-medical"></i> {{ __('Add Medical History') }}</button> 


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="medicalHistoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="medicalHistoryTitle"></h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label style="float: left;" for="historyTitle" class="form-label">{{ __('Title') }}</label>
                                                                        <input type="text" class="form-control" value="" id="historyTitle" name="title">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label style="float: left;" for="historyDescription" class="form-label">{{ __('Description') }}</label>
                                                                        <textarea class="form-control" aria-valuetext="" id="historyDescription" rows="4" name="description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                                    <button type="button" class="btn btn-primary" id="saveMHBtn"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->


                                                <div class="timeline-alt pb-0">

                                                </div>
                                                <!-- end timeline -->        

                                                {{-- <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                                    Invoice history</h5> --}}
                                                <div class="table-responsive">
                                                    <table id="medicalHistoryTable" class="table table-borderless table-nowrap mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">{{ __("Title") }}</th>
                                                                <th scope="col">{{ __("Description") }}</th>
                                                                <th scope="col">{{ __("Date") }}</th>
                                                                <th scope="col">{{ __("Time") }}</th>
                                                                <th scope="col">{{ __("Action") }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        


                                                        </tbody>
                                                    </table>
                                                </div>
    
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section HISTORY -->

                                            <!--=======START CONSULTATION  ========= -->
                                            <div class="tab-pane" id="timeline">
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                Service</h5> 
                                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#consultationModal"><i class="uil-book-medical"></i> {{ __('Add Service') }}</button>     


                                                <!-- CONSULTATION Modal -->
                                                <div class="modal fade" id="consultationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="consultationTitle"></h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                        <!-- Input field for consultation ID (hidden) -->
                                                        <input type="hidden" id="consultationId">                                                                
                                                                <div class="mb-3">
                                                                    <!-- Dropdown for services -->
                                                                    <select class="form-control" id="consultationName" name="consultationName">
                                                                        <option value="">{{ __("Select a service") }}</option>
                                                                        <option value="Pédicurie médicale">Pédicurie médicale</option>
                                                                        <option value="Bilan podologique/Semelles">Bilan podologique/Semelles</option>
                                                                        <option value="Urgence pédicurie médicale">Urgence pédicurie médicale</option>
                                                                        <option value="Verrue plantaire">Verrue plantaire</option>
                                                                        <option value="Orthonyxies">Orthonyxies</option>
                                                                        <option value="Traitement des vertiges">Traitement des vertiges</option>
                                                                        <option value="Remise de semelles orthopédiques">Remise de semelles orthopédiques</option>
                                                                        <option value="Vérification semelles orthopédiques">Vérification semelles orthopédiques</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label style="float: left" for="Price">{{ __('Price') }}</label>
                                                                    <input type="number" class="form-control" id="price" placeholder="Enter service price">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <!-- Dropdown for payment methods -->
                                                                    <div class="form-group">
                                                                        <label style="float: left" for="paymentMethodDropdown">{{ __("Payment Method") }}</label>
                                                                        <select class="form-control" id="paymentMethodDropdown" name="paymentmethod">
                                                                            <option value="">{{ __("Select Payment Method") }}</option>
                                                                            <option value="Juice Pay">MCB Juice Pay</option>
                                                                            <option value="cash">Cash</option>
                                                                            <option value="card">Card visa/Maestro</option>
                                                                            <option value="check">Cheque</option>               
                                                                            <option value="bank_transfer">Virement Bancaire</option>
                                                                            <!-- Add more payment methods as needed -->
                                                                        </select>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __("Close") }}</button>
                                                                <button type="button" class="btn btn-primary" id="saveCBtn"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <!-- END CONSULTATION Modal -->

                                                <div class="table-responsive">
                                                    <table id="consultationTable" class="table table-borderless table-nowrap mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Nom</th>
                                                                <th scope="col">prix</th>
                                                                <th scope="col">Payment</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>


                                            </div>
                                            <!-- end timeline CONSULTATION-->
                                        <!--=======END CONSULTATION  ========= -->

                                            <!--=======Start FACTURATION  ========= -->
                                            <div class="tab-pane" id="invoice">
                                <div class="container mt-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="invoice-title">
                                                <!-- Invoice Status Dropdown -->
                                                <h4 class="float-end font-size-15">{{ __("Invoice Status") }}
                                                    <span class="font-size-12 ms-2">
                                                        <select id="invoiceStatus" class="form-control">
                                                            <option value="">{{ __("Select Statu") }}s</option>
                                                            <option value="{{ __('Paid') }}">{{ __("Paid") }}</option>
                                                            <option value="{{ __('Unpaid') }}">{{ __("Unpaid") }}</option>
                                                            <option value="{{ __('Pending') }}">{{ __("Pending") }}</option>
                                                            <option value="{{ __('Cancel') }}">{{ __("Cancel") }}</option>
                                                        </select>
                                                    </span>
                                                </h4>

                                                <!-- Seller Information -->
                                                <div class="float-start">
                                                    <h5>Aglae Provost-Fleury<br>Cabinet de podologie Ltd</h5>
                                                    <p class="mb-1">Business Park Endémika A5, petit Raffray</p>
                                                    <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> rdv@podologue.mu</p>
                                                    <p class="mb-1"><i class="uil uil-phone me-1"></i> 55059367</p>
                                                </div>
                                            </div>
                                            
                                            <hr class="my-4">

                                            <div class="row">
                                                <!-- Buyer Information -->
                                                <div class="col-sm-6">
                                                    <div>
                                                        <h5 class="font-size-16 mb-3">{{ __("Bill To:") }}</h5>
                                                        <h5 class="font-size-15 mb-2" id="username">{{ __('Name') }} : {{ $user->name }}</h5>
                                                        <p id="useremail">{{ __('Email') }} : {{ $user->email }}</p>
                                                        <p id="userphone">{{ __('Phone') }} : {{ $user->phone }}</p>
                                                    </div>
                                                </div>
                                                <!-- Invoice Details -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        {{-- <div>
                                                            <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                                            <p id="invoiceNumber"></p>
                                                        </div> --}}
                                                            <!-- Add this where you want to display the formatted date -->
                                                            <div class="mt-4">
                                                                @if($user->consultations->isNotEmpty())
                                                                        @php
                                                                            $latestConsultation = $user->consultations->last(); // Fetching the latest consultation
                                                                            $formattedDate = $latestConsultation->created_at->format('d-m-Y'); // Format the date as DD-MM-YYYY
                                                                        @endphp
                                                                        <h5 class="font-size-15 mb-1"> {{ __("Date :") }} {{ $formattedDate }} </h5>
                                                                    @else
                                                                        {{ __('No consultations available') }}
                                                                
                                                                <h5 class="font-size-15 mb-1">C{{ __("onsultation Date:") }} </h5>
                                                            @endif
                                                            </div>
                                                        <div class="mt-4">
                                                            <h5 class="font-size-15 mb-1">{{ __("Consultation No:") }}</h5>
                                                            <p id="consultationNumber">#APF {{ $user->id }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Invoice Summary -->
                                            <div class="py-2">
                                                <h5 class="font-size-15"> {{ __("Invoice Summary") }}</h5>
                                                <div class="table-responsive">
                                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                                        <!-- Table Headers -->
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 70px;">No.</th>
                                                                <th>{{__("Consultation Name")}}</th>
                                                                <th>{{__("Price")}}</th>
                                                                <th>{{__("Quantity")}}</th>
                                                                <th class="text-end" style="width: 120px;">{{__("Total")}}</th>
                                                            </tr>
                                                        </thead>
                                                        <!-- Table Body -->
                                                        <tbody id="invoiceTableBody">
                                                            <td>#</td>
                                                            @if($user->consultations->isNotEmpty())
                                                            @php
                                                            $latestConsultation = $user->consultations->last(); // Fetching the latest consultation
                                                            @endphp
                                                            <td>{{ $latestConsultation->consultation_name }}</td>
                                                            
                                                            <td>Rs {{ $latestConsultation->price }}</td>
                                                        
                                                        </tbody>
                                                        <!-- Grand Total -->
                                                        <tfoot>
                                                            <tr>
                                                                <th scope="row" colspan="4" class="border-0 text-end">{{__("Grand Total")}}</th>
                                                                <td class="border-0 text-end" id="grandTotal">Rs {{ $latestConsultation->price }}</td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                @else
                                                <li>
                                                {{ __('No consultations available') }}
                                                </li>
                                                @endif
                                                <!-- Print and Send Buttons -->
                                                <div class="d-print-none mt-4">
                                                    <div class="float-end">
                                                        <button onclick="window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i> {{__("Print")}}</button>
                                                        {{-- <button id="sendInvoice" class="btn btn-primary w-md">Send</button> --}}
                                                        <!-- Use JavaScript to handle sending the invoice -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                               
                                                    {{-- <div class="row">
                                                    <div class="container">
                                                    <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="invoice-title">
                                                                            <h4 class="float-end font-size-15">Invoice Status
                                                                                <span  class="font-size-12 ms-2">
                                                                    <select class="form-control">
                                                                        <option value="">Select Status</option>
                                                                        <option value="Paid">Paid</option>
                                                                        <option value="Unpaid">Unpaid</option>
                                                                        <option value="Pending">Pending</option>
                                                                        <option value="Cancel">Cancel</option>
                                                                    </select>
                                                                </span></h4> 
                                                                        
                                                                            <div style="float: left">
                                                                            <h5 >Aglae Provost-Fleury<br><br>Cabinet de podologie Ltd</h5>
                                                                            </div>
                                                                            <div class="text-muted">
                                                                                <p class="mb-1">Business Park Endémika A5, petit Raffray</p>
                                                                                <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> rdv@podologue.mu</p>
                                                                                <p class="mb-1"><i class="uil uil-phone me-1"></i> 55059367</p>
                                                                            </div>
                                                                        </div>

                                                                        <hr class="my-4">

                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                            <div class="text-muted">
                                                                                <h5 class="font-size-16 mb-3">Bill TO:</h5>
                                                                                <h5 class="font-size-15 mb-2">{{ $user->name }}</h5>
                                                                                <p class="mb-1">{{ $user->email }}</p>
                                                                                <p>{{ $user->phone }}</p>
                                                                            </div>
                                                                            </div>
                                                                            <!-- end col -->
                                                                            <div class="col-sm-6">
                                                                                <div class="text-muted text-sm-end">
                                                                                    <div>
                                                                                        <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                                                                        <p>#DZ0112</p> <!-- Dynamically generate invoice  ramdom code-->
                                                                                    </div>
                                                                                    <div class="mt-4">
                                                                                        <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                                                                        <p>{{ $latestConsultation->created_at}}</p> <!-- Print the date only-->
                                                                                    </div>
                                                                                    <div class="mt-4">
                                                                                        <h5 class="font-size-15 mb-1">Consultation No:</h5>
                                                                                        <p>#1123456</p> <!-- Dynamically generate consultation ramdom code-->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col -->
                                                                        </div>
                                                                        <!-- end row -->
                                                                        
                                                                        <div class="py-2">
                                                                            <h5 class="font-size-15"> Invoice Summary</h5>

                                                                            <div class="table-responsive">
                                                                                <table class="table align-middle table-nowrap table-centered mb-0">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="width: 70px;">No.</th>
                                                                                            <th>ConsultationName</th>
                                                                                            <th>prix</th>
                                                                                            <th>Quantity</th>
                                                                                            <th class="text-end" style="width: 120px;">Total</th>
                                                                                        </tr>
                                                                                    </thead><!-- end thead -->
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row"></th>
                                                                                            <td>
                                                                                                <div>
                                                                                                    <h5 class="text-truncate font-size-14 mb-1">{{ $latestConsultation->consultation_name }}</h5>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>Rs {{ $latestConsultation->price }}</td>
                                                                                            <td>1</td> <!-- Dynamically increase or decrese the quantity number --> 
                                                                                            <td class="text-end">cal</td> <!-- Dynamically base in the quantity number make addition on the consultation price --> 
                                                                                        </tr>
                                                                                        <!-- end tr -->
                                                                                        <tr>
                                                                                            <th scope="row" colspan="4" class="border-0 text-end">Grand Total</th> <!-- Dynamically base in the quantity number grab the final total --> 
                                                                                            <td class="border-0 text-end"><h4 class="m-0 fw-semibold">Cal</h4></td><!-- final grand total price here --> 
                                                                                        </tr>
                                                                                        <!-- end tr -->
                                                                                    </tbody><!-- end tbody -->
                                                                                </table><!-- end table -->
                                                                            </div><!-- end table responsive -->
                                                                            <div class="d-print-none mt-4">
                                                                                <div class="float-end">
                                                                                    <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print">Print</i></a>
                                                                                    <a href="#" class="btn btn-primary w-md">Send</a> 
                                                                                    <!--Use User email to sent and attacht the invoice to sent-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>  --}}
                                </div>


                                            <!--=======END FACTURATION  ========= -->

    
                                        </div> <!-- end tab-content HISTORY -->
                                       
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

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

        <script>
            $(document).ready(function() {

                            $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Extract user ID from the URL
                    var userId = window.location.pathname.split('/').pop();
                // Function to handle saving medical history
                $('#medicalHistoryTitle').html('{{ __("Add Medical History") }}'); 
                $('#saveMHBtn').html('{{ __("Enregistrer l\'historique médical") }}');
                $('#saveMHBtn').on('click', function() {
                    var title = $('#historyTitle').val();
                    var description = $('#historyDescription').val();

                    // Make an AJAX call to save medical history
                    $.ajax({
                        url: '/store-medical-history/' + userId,
                        type: 'POST',
                        data: {
                            title: title,
                            description: description
                        },
                        success: function(response) {
                            // If the save operation is successful
                            // You can show a success message or handle UI updates
                                Swal.fire({
                                    icon: 'success',
                                    title: 'success !',
                                    text: ' {{ __("Medical History created successfully!") }}',
                                    showConfirmButton: false,
                                    timer: 2000 // Close after 2 seconds
                                });
                            
                            // Close the modal
                            $('#medicalHistoryModal').modal('hide'); location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: 'Error: ' + error // Display the specific error message from AJAX
                            });
                        }
                    });
                });



                    //Function to convert date to a desired format for the Medical history Table
                    function formatDate(date) {
                        return new Date(date).toLocaleDateString();
                    }

                    $.ajax({
                        url: '/fetch-medical-history/' + userId,
                        type: 'GET',
                        success: function(response) {
                            var table = $('.table').DataTable({
                                data: response.medicalHistory,
                                columns: [
                                    { data: 'id' }, // Replace 'id' with the appropriate key from the medical history object
                                    { data: 'title' },
                                    { data: 'description' },
                                    {
                                        data: null,
                                        render: function(data, type, row) {
                                            var timestamp = row.updated_at ? row.updated_at : row.created_at;
                                            return formatDate(timestamp); // Render the correct timestamp
                                        }
                                    },
                                    {
                                        data: null,
                                        render: function(data, type, row) {
                                            var timestamp = row.updated_at ? row.updated_at : row.created_at;
                                            return new Date(timestamp).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }); // Render the correct time
                                        }
                                    },
                                    {
                                        data: null,
                                        render: function(data, type, row) {
                                            var editButton = '<button class="edit-history-btn" data-id="' + row.id + '"><i class="ri-pencil-fill"></i></button>';
                                            var deleteButton = '<button class="delete-history-btn" data-id="' + row.id + '"><i class="ri-delete-bin-2-line"></i></button>';
                                            return editButton + ' ' + deleteButton; // Return both buttons in the same column
                                        }
                                    }
                                ]
                            });
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                        }
                    });


                    // Function to handle editing medical history
                    $(document).on('click', '.edit-history-btn', function() {
                        var historyId = $(this).data('id'); // Get the history ID from the button data attribute
                        
                        // Make an AJAX call to fetch specific medical history
                        $.ajax({
                            url: '/fetch-medical-history/' + userId + '/' + historyId, // Assuming you have a route for fetching specific history
                            type: 'GET',
                            success: function(response) {
                                // Update the modal with fetched data
                                $('#medicalHistoryModal').modal('show');
                                $('#medicalHistoryTitle').html('{{ __("Edit Medical History") }}');
                                $('#historyTitle').val(response.medicalHistory.title);
                                $('#historyDescription').val(response.medicalHistory.description);

                                // Change Save button to Update
                                $('#saveMHBtn').html('{{ __("Update Medical History") }}');
                                $('#saveMHBtn').off('click').on('click', function() {
                                    var title = $('#historyTitle').val();
                                    var description = $('#historyDescription').val();

                                    // Make an AJAX call to update medical history
                                    $.ajax({
                                        url: '/update-medical-history/' + historyId, // Replace with your update route
                                        type: 'PUT', // Use PUT method for update
                                        data: {
                                            title: title,
                                            description: description
                                        },
                                        success: function(updateResponse) {
                                            // Show success message
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success!',
                                                text: '{{ __("Medical History Updated sucessfully") }}',
                                                showConfirmButton: false,
                                                timer: 2000 // Close after 2 seconds
                                            });

                                            // Reload the modal after successful update
                                            $('#medicalHistoryModal').modal('hide');
                                            location.reload();
                                        },
                                        error: function(updateXhr, updateStatus, updateError) {
                                            // Handle errors
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Update failed!',
                                                footer: 'Error: ' + updateError // Display the specific error message from AJAX
                                            });
                                        }
                                    });
                                });
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Fetch failed!',
                                    footer: 'Error: ' + error // Display the specific error message from AJAX
                                });
                            }
                        });
                    });


                    // Perfrom delete Medical Histroy class 'delete-history-btn' for each history row

                    $(document).on('click', '.delete-history-btn', function() {
                        var historyId = $(this).data('id'); // Get the history ID from the button data attribute

                        // Use SweetAlert for confirmation
                        Swal.fire({
                            title: '{{ __("Are you sure?") }}',
                            text: '{{ __("Once deleted, you will not be able to recover this record!") }}',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: '{{ __("Yes, Delete it!") }}',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // User confirmed, make AJAX call to delete
                                $.ajax({
                                    url: '/delete-medical-history/' + historyId, // Replace with your delete route
                                    type: 'DELETE', // Use DELETE method for deletion
                                    success: function(deleteResponse) {
                                        // Show success message
                                        Swal.fire({
                                            icon: 'success',
                                            title: '{{ __("Deleted!") }}',
                                            text: '{{ __("Medical History has been deleted sucessfully") }}',
                                        });
                                        location.reload();
                                    },
                                    error: function(deleteXhr, deleteStatus, deleteError) {
                                        // Handle errors
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Deletion failed!',
                                            footer: 'Error: ' + deleteError // Display the specific error message from AJAX
                                        });
                                    }
                                });
                            }
                        });
                    });


                    // ADD SERVICE FUNCTION
                    $('#consultationTitle').html('{{ __("Add Services") }}');
                    $('#saveCBtn').html('{{ __("Save Service") }}');

                    $('#saveCBtn').click(function(info) {
                                                
                        $('#saveCBtn').click(function() {
                            var url = window.location.pathname;
                            var userId = url.split('/')[2]; // Assuming userId is the third segment in the URL

                            var consultationName = $('#consultationName').val();
                            var price = $('#price').val();
                            var paymentMethod = $('#paymentMethodDropdown').val();

                            $.ajax({
                                url: '/user-details/' + userId + '/store-consultation',
                                type: 'POST',
                                data: {
                                    user_id: userId,
                                    consultationName: consultationName,
                                    price: price,
                                    payment_method: paymentMethod,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: '{{ __("Success!") }}',
                                        text: '{{ __("Consultation stored successfully!") }}',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    location.reload();
                                },
                                error: function(error) {
                                    // Handle error if needed
                                    console.error('Error storing consultation:', error);
                                }
                            });
                        });

                    });



                    var url = window.location.pathname;
                    var userId = url.split('/')[2]; // Extract userId from the URL

                    $.ajax({
                        url: '/user-details/' + userId + '/consultations',
                        type: 'GET',
                        success: function(response) {
                            // Assuming response is an array of consultations
                            var consultations = response;

                            var tableBody = $('#consultationTable tbody');

                            // Loop through the consultations and populate the table
                            consultations.forEach(function(consultation) {
                                var row = '<tr>' +
                                    '<td>' + consultation.id + '</td>' +
                                    '<td>' + consultation.consultation_name + '</td>' +
                                    '<td>' + consultation.price + '</td>' +
                                    '<td>' + consultation.payment_method + '</td>' +
                                    '<td>' +
                                    '<button type="button" class="btn btn-outline-primary btn-sm edit-btn" data-id="' + consultation.id + '" title="Edit">' +
                                    '<i class="ri-pencil-line"></i>' +
                                    '</button>' +
                                    '<button type="button" class="btn btn-outline-danger btn-sm delete-btn" data-id="' + consultation.id + '" title="Delete">' +
                                    '<i class="ri-delete-bin-line"></i>' +
                                    '</button>' +
                                    '</td>' +
                                    '</tr>';

                                tableBody.append(row);
                            });

                            // Optional: Add event listeners for edit and delete buttons
                            tableBody.on('click', '.edit-btn', function() {
                                var consultationId = $(this).data('id');
                                // Perform edit action with consultationId
                                // For example: Redirect to edit page or trigger edit functionality
                            });

                            tableBody.on('click', '.delete-btn', function() {
                                var consultationId = $(this).data('id');
                                // Perform delete action with consultationId
                                // For example: Show confirmation modal or trigger deletion
                            });
                        },
                        error: function(error) {
                            console.error('Error fetching consultations:', error);
                        }
                    });
                                

                    var tableBody = $('#consultationTable tbody');

                    // Add event listener for edit button click
                    tableBody.on('click', '.edit-btn', function() {
                        var consultationId = $(this).data('id');
                        $('#consultationTitle').html('{{ __("Edit Service") }}');
                        $('#saveCBtn').html('{{ __("Update Service") }}');

                        // Fetch the consultation details using its ID
                        $.ajax({
                            url: '/consultations/' + consultationId, // Update the endpoint to fetch a single consultation
                            type: 'GET',
                            success: function(response) {
                                var consultation = response;

                                // Populate modal fields with consultation details
                                $('#consultationId').val(consultation.id);
                                $('#consultationName').val(consultation.consultation_name);
                                $('#price').val(consultation.price);
                                $('#paymentMethodDropdown').val(consultation.payment_method);

                                // Show the modal
                                $('#consultationModal').modal('show');
                            },
                            error: function(error) {
                                console.error('Error fetching consultation details:', error);
                            }
                        });
                    });

                    // Add event listener for delete button click
                    tableBody.on('click', '.delete-btn', function() {
                        var consultationId = $(this).data('id');
                        // Perform delete action with consultationId
                        // For example: Show confirmation modal or trigger deletion
                    });

                    // Update save button click event for both add and update actions
                    $('#saveCBtn').click(function() {
                        var consultationId = $('#consultationId').val(); // Retrieve consultation ID
                        var consultationName = $('#consultationName').val();
                        var price = $('#price').val();
                        var paymentMethod = $('#paymentMethodDropdown').val();

                        // Determine the endpoint based on whether it's an edit or add action
                        var url = consultationId ? '/consultations/' + consultationId + '/update' : '/user-details/' + userId + '/store-consultation';

                        // Define the request type based on whether it's an edit or add action
                        var requestType = consultationId ? 'PUT' : 'POST';

                        $.ajax({
                            url: url,
                            type: requestType,
                            data: {
                                user_id: userId,
                                consultation_id: consultationId,
                                consultationName: consultationName,
                                price: price,
                                payment_method: paymentMethod,
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: '{{ __("Success!") }}',
                                    text: 'Consultation ' + (consultationId ? 'updated' : 'stored') + ' successfully!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error ' + (consultationId ? 'updating' : 'storing') + ' consultation:', error);
                            }
                        });
                    });


                    var tableBody = $('#consultationTable tbody');

                    // Add event listener for edit button click
                    tableBody.on('click', '.edit-btn', function() {
                        // ... (existing edit button code)
                    });

                    // Add event listener for delete button click
                    tableBody.on('click', '.delete-btn', function() {
                        var consultationId = $(this).data('id');

                        // Show a confirmation modal using SweetAlert before deletion
                        Swal.fire({
                            title: '{{ __("Are you sure?") }}',
                            text: '{{ __("Once deleted, you will not be able to recover this record!") }}',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                             cancelButtonColor: '#3085d6',
                            confirmButtonText: '{{ __("Yes, delete it!") }}'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Perform delete action with consultationId
                                // For example: Trigger deletion via AJAX
                                $.ajax({
                                    url: '/consultations/' + consultationId + '/delete', // Update the endpoint for deletion
                                    type: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {
                                        // On successful deletion, show success message with SweetAlert
                                        Swal.fire({
                                            icon: 'success',
                                            title: '{{ __("Deleted!") }}',
                                            text: '{{ __("Consultation has been deleted.") }}',
                                            showConfirmButton: false,
                                            timer: 1500
                                        });

                                        // Optionally remove the deleted row from the table
                                        // $(this).closest('tr').remove();
                                        // For now, just reload the page after deletion
                                        location.reload();
                                    },
                                    error: function(error) {
                                        console.error('Error deleting consultation:', error);
                                    }
                                });
                            }
                        });
                    });                                                                    


                    // Function to update selected status
                    function updateSelectedStatus() {
                        var selectElement = document.getElementById('invoiceStatus');
                        var selectedValue = selectElement.value;

                        // Update the content of the element with the selected status
                        var selectedStatusElement = document.getElementById('selectedStatus');
                        selectedStatusElement.textContent = "{{ __('Invoice Status') }} : " + selectedValue;

                        // Store the selected value in localStorage
                        localStorage.setItem('selectedStatus', selectedValue);
                    }

                    // Add an event listener to the invoiceStatus select element
                    document.getElementById('invoiceStatus').addEventListener('change', updateSelectedStatus);

                    // Function to get and set the selected status on page load
                    function setPageSelectedStatus() {
                        var storedStatus = localStorage.getItem('selectedStatus');
                        if (storedStatus) {
                            var selectedStatusElement = document.getElementById('selectedStatus');
                            selectedStatusElement.textContent = "{{ __('Invoice Status') }} : " + storedStatus;
                        }
                    }

                    // Call the function to set the selected status when the page loads
                    setPageSelectedStatus();

            });

        </script>

    </body>
</html>






