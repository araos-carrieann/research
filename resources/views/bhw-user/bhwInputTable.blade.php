<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/pup.png">
  <link rel="icon" type="image/png" href="../assets/img/pup.png">
  <title>
    BHW-PGAMIS
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
          <a class="nav-link  " href="{{ url('/bhwDash') }}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
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
          <a class="nav-link active" href="{{ url('/bhwInputTable') }}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
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
            <span class="nav-link-text ms-1">Input</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{ url('/bhwRecordTable') }}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
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
          <h6 class="font-weight-bolder mb-0">INPUT PAGE</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input name="search" id="search" type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="{{ url('/insertNewChildRecord') }}">Insert
                New</a>
            </li>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Profile</span>
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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CHILDREN'S RECORD</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LAST NAME</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">FIRST NAME
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MIDDLE
                        NAME</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody class="allData">
                    @foreach ($combinedData as $combinedDatas)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $combinedDatas->lastname }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{ $combinedDatas->firstname }}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{ $combinedDatas->middlename }}</h6>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="badge badge-sm bg-gradient-secondary"
                          onclick="showDetailsModal({{ json_encode(['personalInfo' => $combinedDatas, 'healthRecords' => $combinedDatas]) }})">
                          View
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="badge badge-sm bg-gradient-secondary"
                          onclick="newHealthRecordDetailModal({{ json_encode(['personalInfo' => $combinedDatas, 'healthRecords' => $combinedDatas]) }})">
                          New Record
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tbody class="searched-data" id="Content">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- Modal for insert -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertModalLabel">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('ChildRecord.storeNewHealthRecord') }}" method="post">
      @csrf
      <input type="hidden" id="insert_child_id" name="child_id" value="">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_lastname">Last Name:</label>
              <div class="input-group mb-3">
                <p><span id="insert_lastname"></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_firstname">First Name:</label>
              <div class="input-group mb-3">
                <p><span id="insert_firstname"></span></p>
              </div>
            </div>
          </div>
        </div>

        <label for="insert_middlename">Middle Name:</label>
        <div class="input-group mb-3">
          <p><span id="insert_middlename"></span></p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_birthday">Birthdate:</label>
              <div class="input-group mb-3">
                <p><span id="insert_birthday"></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_age">Age (Month):</label>
              <div class="input-group mb-3">
                <input class="form-control" type="text" id="insert_age" name="age" readonly>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_weight">Weight:</label>
              <div class="input-group mb-3">
                <input type="text" id="insert_weight" name="weight" class="form-control"
                  placeholder="Weight">
                <select class="btn btn-outline-primary mb-0" id="insert_weight-unit">
                  <option value="kg">kg</option>
                  <option value="lbs">lbs</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_height">Height:</label>
              <div class="input-group mb-3">
                <input type="text" id="insert_height" name="height" class="form-control"
                  placeholder="Height">
                <select class="btn btn-outline-primary mb-0" id="insert_height-unit">
                  <option value="cm">cm</option>
                  <option value="ft">ft</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_bmi">BMI:</label>
              <input class="form-control" type="text" id="insert_bmi" name="bmi" readonly>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_bmi_classification">BMI Classification:</label>
              <input class="form-control" type="text" id="insert_bmi_classification" name="bmi_classification" readonly>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_medical_condition">Medical Condition:</label>
              <input class="form-control" type="text" id="insert_medical_condition" name="medical_condition">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="insert_vaccine_received">Vaccine Received:</label>
              <input class="form-control" type="text" id="insert_vaccine_received" name="vaccine_received">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-dark w-100">Save</button>

      </div>
</form>
    </div>
  </div>
</div>


      <!-- Modal for details -->
      <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailsModalLabel">Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><span id="municipality"></span></p>
              <p><span id="barangay"></span></p>
              <p><span id="sitio"></span></p>
              <p><span id="lastname"></span></p>
              <p><span id="firstname"></span></p>
              <p><span id="middlename"></span></p>
              <p><span id="birthday"></span></p>
              <p><span id="age"></span></p>
              <p><span id="sex"></span></p>
              <p><span id="weight"></span> kg</p>
              <p> <span id="height"></span> cm</p>
              <p> <span id="bmi"></span></p>
              <p><span id="medical_condition"></span></p>
              <p><span id="vaccine_received"></span></p>
              <p><span id="mother_name"></span></p>
              <p><span id="mother_birthday"></span></p>
              <p> <span id="mother_occupation"></span></p>
              <p><span id="father_name"></span></p>
              <p><span id="father_birthday"></span></p>
              <p> <span id="father_occupation"></span></p>
              <p> <span id="contact_number"></span></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Edit</button>
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
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">BHW-PGAMIS</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">PGAMIS</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
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
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
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
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <!-- ... (Previous code remains unchanged) ... -->
  <!-- Ensure jQuery is included before Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Your existing modal script -->

  <script>
    function calculateAge(birthdate) {
        var birthDate = new Date(birthdate);
        var today = new Date();

        var ageInMonths = (today.getMonth() - birthDate.getMonth()) +
            (12 * (today.getFullYear() - birthDate.getFullYear()));

        // Display the age in the input field
        document.getElementById('insert_age').value = ageInMonths;
    }

    function newHealthRecordDetailModal(childRecord) {
        // Extract values from the childRecord object
        var personalInfo = childRecord.personalInfo;
        var healthRecords = childRecord.healthRecords;
        console.log(healthRecords);
        console.log('Health Records:', healthRecords);
        console.log('Age:', healthRecords.age);

        // Set modal content based on the clicked row's data
        document.getElementById('insert_child_id').value = healthRecords.child_id;
        document.getElementById('insert_lastname').innerText =  personalInfo.lastname;
        document.getElementById('insert_firstname').innerText = personalInfo.firstname;
        document.getElementById('insert_middlename').innerText = personalInfo.middlename;
        document.getElementById('insert_birthday').innerText = personalInfo.birthday;

        // Call calculateAge function to update the age
        calculateAge(personalInfo.birthday);
    
        // Show the modal
        $('#insertModal').modal('show');
    }

    function calculateBMI() {
            // Log to check if the function is called
            console.log('calculateBMI function called');

            // Get values from the form
            var height = parseFloat(document.getElementById('insert_height').value);
            var weight = parseFloat(document.getElementById('insert_weight').value);
            var heightUnit = document.getElementById('insert_height-unit').value;
            var weightUnit = document.getElementById('insert_weight-unit').value;

            // Log to check the values
            console.log('Height:', height);
            console.log('Weight:', weight);
            console.log('Height Unit:', heightUnit);
            console.log('Weight Unit:', weightUnit);

            // Convert height to meters
            if (heightUnit === 'cm') {
                height = height / 100; // Convert cm to meters
            } else if (heightUnit === 'ft') {
                height = height * 0.3048; // Convert feet to meters
            }

            // Convert weight to kilograms
            if (weightUnit === 'lbs') {
                weight = weight * 0.453592; // Convert pounds to kilograms
            }

            // Log to check the converted values
            console.log('Converted Height:', height);
            console.log('Converted Weight:', weight);

            // Calculate BMI
            var BMI = weight / (height * height);

            // Log to check the calculated BMI
            console.log('Calculated BMI:', BMI);

            // Display BMI
            document.getElementById('insert_bmi').value = BMI.toFixed(2);

            // Determine BMI classification
            var classification;
            if (BMI < 18.5) {
                classification = 'Underweight';
            } else if (BMI >= 18.5 && BMI < 24.9) {
                classification = 'Normal weight';
            } else if (BMI >= 25 && BMI < 29.9) {
                classification = 'Overweight';
            } else {
                classification = 'Obese';
            }

            // Log to check the classification
            console.log('BMI Classification:', classification);

            // Display BMI classification
            document.getElementById('insert_bmi_classification').value = classification;

        }

        // Attach event listeners to height and weight inputs
        document.getElementById('insert_height').addEventListener('input', calculateBMI);
        document.getElementById('insert_weight').addEventListener('input', calculateBMI);
        document.getElementById('insert_height-unit').addEventListener('change', calculateBMI);
        document.getElementById('insert_weight-unit').addEventListener('change', calculateBMI);
</script>


  <script>
    function showDetailsModal(childRecord) {
      // Extract values from the childRecord object
      var personalInfo = childRecord.personalInfo;
      var healthRecords = childRecord.healthRecords;
      console.log(healthRecords);
      console.log('Health Records:', healthRecords);
      console.log('Age:', healthRecords.age);

      // Set modal content based on the clicked row's data
      document.getElementById('municipality').innerText = 'Municipality: ' + personalInfo.municipality;
      document.getElementById('barangay').innerText = 'Barangay: ' + personalInfo.barangay;
      document.getElementById('sitio').innerText = 'Sitio: ' + personalInfo.sitio;

      document.getElementById('lastname').innerText = 'Last Name: ' + personalInfo.lastname;
      document.getElementById('firstname').innerText = 'First Name: ' + personalInfo.firstname;
      document.getElementById('middlename').innerText = 'Middle Name: ' + personalInfo.middlename;
      document.getElementById('birthday').innerText = 'Birthday: ' + personalInfo.birthday;
      document.getElementById('age').innerText = 'Age: ' + healthRecords.age;
      document.getElementById('sex').innerText = 'Sex: ' + personalInfo.sex;
      document.getElementById('weight').innerText = 'Weight: ' + healthRecords.weight + ' kg';
      document.getElementById('height').innerText = 'Height: ' + healthRecords.height + ' cm';
      document.getElementById('bmi').innerText = 'BMI: ' + healthRecords.bmi + ' (' + healthRecords.bmi_classification + ')';
      document.getElementById('medical_condition').innerText = 'Medical Condition: ' + (healthRecords.medical_condition ? healthRecords.medical_condition : 'N/A');
      document.getElementById('vaccine_received').innerText = 'Vaccine Received: ' + (healthRecords.vaccine_received ? healthRecords.vaccine_received : 'N/A');
      document.getElementById('mother_name').innerText = 'Mother: ' + personalInfo.mother_firstname + ' ' + personalInfo.mother_middlename + ' ' + personalInfo.mother_lastname;
      document.getElementById('mother_birthday').innerText = 'Mother Birthday: ' + personalInfo.mother_birthday;
      document.getElementById('mother_occupation').innerText = 'Mother Occupation: ' + (personalInfo.mother_occupation ? personalInfo.mother_occupation : 'N/A');
      document.getElementById('father_name').innerText = 'Father: ' + personalInfo.father_firstname + ' ' + personalInfo.father_middlename + ' ' + personalInfo.father_lastname;
      document.getElementById('father_birthday').innerText = 'Father Birthday: ' + personalInfo.father_birthday;
      document.getElementById('father_occupation').innerText = 'Father Occupation: ' + (personalInfo.father_occupation ? personalInfo.father_occupation : 'N/A');
      document.getElementById('contact_number').innerText = 'Contact Number: ' + personalInfo.contact_number;

      // Show the modal
      $('#detailsModal').modal('show');
    }
    
  </script>

  <script type="text/javascript">
    $('#search').on('keyup', function () {
      $value = $(this).val();

      if ($value) {
        $('.allData').hide();
        $('.searched-data').show();
      } else {
        $('.allData').show();
        $('.searched-data').hide();
      }
      $.ajax({
        type: 'get',
        url: '{{ url('search') }}',
        data: { 'search': $value },
        success: function (data) {
          console.log(data);
          $('#Content').html(data);
        }
      });
    });
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function calculateBMI() {
            // Log to check if the function is called
            console.log('calculateBMI function called');

            // Get values from the form
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);
            var heightUnit = document.getElementById('height-unit').value;
            var weightUnit = document.getElementById('weight-unit').value;

            // Log to check the values
            console.log('Height:', height);
            console.log('Weight:', weight);
            console.log('Height Unit:', heightUnit);
            console.log('Weight Unit:', weightUnit);

            // Convert height to meters
            if (heightUnit === 'cm') {
                height = height / 100; // Convert cm to meters
            } else if (heightUnit === 'ft') {
                height = height * 0.3048; // Convert feet to meters
            }

            // Convert weight to kilograms
            if (weightUnit === 'lbs') {
                weight = weight * 0.453592; // Convert pounds to kilograms
            }

            // Log to check the converted values
            console.log('Converted Height:', height);
            console.log('Converted Weight:', weight);

            // Calculate BMI
            var BMI = weight / (height * height);

            // Log to check the calculated BMI
            console.log('Calculated BMI:', BMI);

            // Display BMI
            document.getElementById('bmi').value = BMI.toFixed(2);

            // Determine BMI classification
            var classification;
            if (BMI < 18.5) {
                classification = 'Underweight';
            } else if (BMI >= 18.5 && BMI < 24.9) {
                classification = 'Normal weight';
            } else if (BMI >= 25 && BMI < 29.9) {
                classification = 'Overweight';
            } else {
                classification = 'Obese';
            }

            // Log to check the classification
            console.log('BMI Classification:', classification);

            // Display BMI classification
            document.getElementById('bmi_classification').value = classification;

        }

        // Attach event listeners to height and weight inputs
        document.getElementById('height').addEventListener('input', calculateBMI);
        document.getElementById('weight').addEventListener('input', calculateBMI);
        document.getElementById('height-unit').addEventListener('change', calculateBMI);
        document.getElementById('weight-unit').addEventListener('change', calculateBMI);
    </script>

  <!-- Bootstrap JS and jQuery -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>