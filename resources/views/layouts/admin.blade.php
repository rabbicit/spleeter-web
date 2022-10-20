<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Sample Split Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('backend/vendors/feather/feather.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendors/ti-icons/css/themify-icons.css')}}" />
        <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css')}}" />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />
        <link rel="stylesheet" href="{{ asset('backend/vendors/ti-icons/css/themify-icons.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/select.dataTables.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css')}}" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('backend/css/vertical-layout-light/style.css')}}" />
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png')}}" />
    </head>
    <body class="expansion-alids-init sidebar-dark">
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="{{route('admin.dashboard')}}"><img src="{{asset('front/img/logo-1.png')}}" class="mr-2" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard')}}"><img src="{{asset('front/img/logo-1.png')}}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav mr-lg-2">

                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="{{ asset('backend/images/faces/face28.jpg')}}" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="{{route('settings')}}">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                <i class="icon-layout menu-icon"></i>
                                <span class="menu-title">Music</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('music.upload')}}">Upload music</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('music')}}">View music</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="icon-columns menu-icon"></i>
                                <span class="menu-title">Analytics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('settings')}}">
                                <i class="icon-bar-graph menu-icon"></i>
                                <span class="menu-title">Admin Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                                <i class="icon-grid-2 menu-icon"></i>
                                <span class="menu-title">Blog</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('admin.allblog')}}">All Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('admin.adblog')}}">Add new post</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>


                @yield('content')

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                                Copyright © 2022 SimpleSplit, All right reserved.
                            </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made with <i class="ti-heart text-danger ml-1"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{ asset('backend/js/dataTables.select.min.js')}}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('backend/js/off-canvas.js')}}"></script>
        <script src="{{ asset('backend/js/hoverable-collapse.js')}}"></script>
        <script src="{{ asset('backend/js/template.js')}}"></script>
        <script src="{{ asset('backend/js/settings.js')}}"></script>
        <script src="{{ asset('backend/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('backend/js/dashboard.js')}}"></script>
        <script src="{{ asset('backend/js/Chart.roundedBarCharts.js')}}"></script>
        <!-- End custom js for this page-->
    </body>
</html>
