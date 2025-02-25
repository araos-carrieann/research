<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/pup.png">
    <link rel="icon" type="image/png" href="../assets/img/pup.png">
    <title>
        SUPER ADMIN
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="../assets/img/pup.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">BHW-PGMAIS</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/superAdminDash') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/superAdminAccount') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>office</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="office" transform="translate(153.000000, 2.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('/superAdminRecordTable') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(453.000000, 454.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Records</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <img src="{{ asset(session('UserPic')) }}"
                                                            width="50" height="50"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                <span class="d-sm-inline d-none">  {{  session('UserLastName') }}
                                    </span>
                            </a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto avatar avatar-sm bg-gradient-dark  me-3 ">
                                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Settings</span>
                                                </h6>

                                            </div>
                                        </div>
                                    </a>
                                </li>


                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{ route('authlogout') }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto avatar avatar-sm bg-gradient-dark  me-3">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Logout</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">REGISTERED BNS</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $countRegisteredBNS }}

                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="fas fa-user text-lg opacity-10" aria-hidden="true"></i>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">REGISTERED BHW</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $countRegisteredBHW }}

                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">REGISTERED CHILD</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $countRegisteredChild }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="fas fa-child text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <div class="dropdown">
                                            <select id="muni-dd" class="btn bg-gradient-primary dropdown-toggle"
                                                name="municipality" aria-expanded="false">
                                                <option class="dropdown-item" value="">Select Municipality
                                                </option>
                                                @foreach ($muni as $data)
                                                    <option class="dropdown-item" value="{{ $data->id }}">
                                                        {{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <select id="brgy-dd" class="btn bg-gradient-primary dropdown-toggle"
                                            name="barangay">
                                            <option class="dropdown-item" value="">Select Barangay</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <button onclick="applyFilter()"
                                            class="btn btn-outline-primary btn-sm mb-0 me-3">Filter</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <a href="{{ route('superAdmin.reset') }}"
                                            class="btn btn-outline-primary btn-sm mb-0 me-3">Reset</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-xl-3 col-sm-3">
                    <div class="input-group">
                        <input name="start_date" id="start_date" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="input-group">
                        <input name="end_date" id="end_date" type="date" class="form-control">
                    </div>
                </div>

                <div class="col-xl-3 col-sm- ">
                    <div class="input-group">
                        <button class="btn btn-outline-primary btn-sm mb-0 me-3">Export</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <h6>NUTRITIONAL STATUS</h6>
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">

                            <div class="chart">
                                <canvas id="bar-chart-bmi" class="chart-canvas" height="300px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card h-100 p-3">
                    <div class="card mb-3">
                        <div class="card-body p-3">
                            <h6>CHART BY AGE (MONTHS)</h6>
                            <div class="chart">
                                <canvas id="doughnut-chart" class="chart-canvas" height="300px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card z-index-2">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                            <div class="chart">
                                <canvas id="doughnut-chart-sex" class="chart-canvas" height="300px"></canvas>
                            </div>
                        </div>
                        <div class="container border-radius-lg">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                    </div>
                    <div class="card mb-3">
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="mixed-chart-yearschilddata" class="chart-canvas" height="300px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">





            </div>
        </div>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
          var ctxBMI = document.getElementById('mixed-chart-yearschilddata').getContext('2d');
  
          var bmiChartData = {!! json_encode($bmiChartData) !!};
  
          if (bmiChartData.labels.length === 0 || bmiChartData.datasets.length === 0) {
              // Handle case where BMI chart data is empty or not available
              // For example, display an error message or fallback content
              console.error('BMI chart data is empty or not available.');
              return;
          }
  
          var myChartBMI = new Chart(ctxBMI, {
              type: 'bar',
              data: {
                  
                  datasets: bmiChartData.datasets,
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  scales: {
                      x: {
                          stacked: true,
                      },
                      y: {
                          stacked: true,
                          beginAtZero: true,
                      },
                  },
                  tooltips: {
                      callbacks: {
                          label: function(context) {
                              var label = context.label || '';
                              var value = context.parsed;
                              return label + ': ' + value;
                          },
                      },
                  },
              },
          });
      });
  </script>
  


    <script>
        var ctx = document.getElementById("doughnut-chart").getContext("2d");

        // Extract labels, counts, and percentages for Chart.js
        var ages = @json($countsByAge->pluck('age'));
        var countsByAge = @json($countsByAge->pluck('count'));
        var percentagesByAge = @json($countsByAge->pluck('percentage'));

        // Define colors for age groups
        var doughnutColors = [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            // Add more colors as needed
        ];

        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ages.map(age => age + ' months'),
                datasets: [{
                    data: countsByAge,
                    backgroundColor: doughnutColors,
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom', // You can adjust the position as needed
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed / context.dataset.data.reduce((a, b) => a + b) * 100;
                                var percentage = Math.round(value) + "%";
                                return label + ': ' + context.raw + ' (' + percentage + ')';
                            },
                        },
                    },
                },
            },
        });
    </script>


    <script>
        var ctx = document.getElementById("bar-chart-bmi").getContext("2d");

        // Define gradient colors
        var gradientColors = [
            createGradient(ctx, 'rgba(255, 99, 132, 0.7)', 'rgba(255, 99, 132, 0)'),
            createGradient(ctx, 'rgba(54, 162, 235, 0.7)', 'rgba(54, 162, 235, 0)'),
            createGradient(ctx, 'rgba(255, 206, 86, 0.7)', 'rgba(255, 206, 86, 0)'),
            // Add more gradients as needed
        ];

        // Create gradient function
        function createGradient(ctx, color1, color0) {
            var gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, color1);
            gradient.addColorStop(1, color0);
            return gradient;
        }

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: @json($countsByBMI->pluck('bmi_classification')), // Use the BMI classifications as labels
                datasets: [{
                    label: "Count",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: gradientColors,
                    data: @json($countsByBMI->pluck('count')), // Use the count of children for each BMI classification
                    maxBarThickness: 50
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: true,
                            color: "#fff",
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        },
                        title: {
                            display: true,
                            text: 'BMI Classifications',
                            color: '#fff',
                            font: {
                                size: 16,
                                family: "Open Sans",
                                style: 'normal',
                            },
                        }
                    },
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: true,
                            color: "#fff",
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        },
                        title: {
                            display: true,
                            text: 'Count',
                            color: '#fff',
                            font: {
                                size: 16,
                                family: "Open Sans",
                                style: 'normal',
                            },
                        },
                    },
                },
            },
        });
    </script>
    <script>
        var ctx = document.getElementById("doughnut-chart-sex").getContext("2d");

        // Extract labels, counts, and percentages for Chart.js
        var sexes = @json($countsBySex->pluck('sex'));
        var counts = @json($countsBySex->pluck('count'));
        var percentages = @json($countsBySex->pluck('percentage'));

        // Define colors for male and female
        var doughnutColors = ['#3498db', '#e74c3c'];

        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: sexes,
                datasets: [{
                    data: counts,
                    backgroundColor: doughnutColors,
                    hoverOffset: 4, // Adds a gap when hovering over the chart
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom', // You can adjust the position as needed
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed / context.dataset.data.reduce((a, b) => a + b) * 100;
                                var percentage = Math.round(value) + "%";
                                return label + ': ' + context.raw + ' (' + percentage + ')';
                            },
                        },
                    },
                },
            },
        });
    </script>





    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
