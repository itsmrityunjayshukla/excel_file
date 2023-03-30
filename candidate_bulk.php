<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="nav2nd.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="pop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1577ac0209.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<!-- <body> -->

<body class="skin-blue-black">
    <div class="wrapper">
        <header class="main-header col-lg-12">
            <span class="logo-mid"><img
                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1818275/profile/profile-80.jpg?1520571742" />Admin
                Pro</span>
            <div class="fa fa-bars" id="menu_bar"></div>
            <!--<div class="fa fa-search" id="search_bar"></div> -->
            <div class="fa fa-gears" id="settings_bar"></div>
            <div class="user-profile">
                <span>Urbanites</br>Technologies</span>
                <div class="mini-user fa fa-user-circle"></div>
            </div>
            <!--
                    <div class="fa fa-flag-o" id="icon_bar">
                        <span class="label bg-red">4</span>
                    </div> -->
            <div class="fa fa-bell-o notification-icon" id="icon_bar">
                <span class="label bg-orange">2</span>
            </div>
            <!--
                    <div class="fa fa-envelope-o" id="icon_bar">
                        <span class="label bg-yellow">7</span>
                    </div> -->
        </header>
        <div class="leftMenu">
            
            <ul class="leftMenuList">
                <!-- <li class="active tooltip_nav point01">
                    <a href="#">
                        <i class="fa fa-dashboard" aria-hidden="true"></i>
                        <span>ADMIN PANNEL</span>
                        <h4>ADMIN PANNEL</h4>
                    </a>
                </li> -->

                <!-- <li class="tooltip_nav point02">
                    <input type="text" class="form-control">
                </li> -->
                <li class="tooltip_nav point03">
                    <a href="#" class="dropdown">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span>Basic Forms</span>
                        <p>Basic Forms</p>
                    </a>
                    <ul class="dropdownlist">
                        <li>
                            <a href="#">
                                <span> Manage Sector</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Job Role</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage NOS</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Scheme</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Question Bank</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tooltip_nav point03">
                    <a href="#" class="dropdown">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <span>User Management</span>
                        <p>User Management</p>
                    </a>
                    <ul class="dropdownlist">
                        <li>
                            <a href="#">
                                <span> Manage Assessor</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Tech Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Bulk Upload</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Candidate</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Attendance</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tooltip_nav point03">
                    <a href="#" class="dropdown">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        <span>Assessment</span>
                        <p>Assessment</p>
                    </a>
                    <ul class="dropdownlist">
                        <li>
                            <a href="#">
                                <span> Batch Upload</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Manage Batch</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Scheduled Batch</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Current Batch</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Assessment Completed</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Batch Uploaded on SIP</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tooltip_nav point03">
                    <a href="#" class="dropdown">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>Monitoring</span>
                        <p>Monitoring</p>
                    </a>
                    <ul class="dropdownlist">
                        <li>
                            <a href="#">
                                <span> Batch Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Evidence</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Batch Evidence Record</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tooltip_nav point03">
                    <a href="#" class="dropdown">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        <span>Reports</span>
                        <p>Reports</p>
                    </a>
                    <ul class="dropdownlist">
                        <li>
                            <a href="#">
                                <span> MIS Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Batch Result</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span> Batch Report</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="tooltip_nav point04">
                    <a href="#">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <span>Companies</span>
                        <p>Companies</p>
                    </a>
                </li> -->
                <!-- <li class="tooltip_nav point05">
                    <a href="#">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span>Documents</span>
                        <p>Documents</p>
                    </a>
                </li> -->
                <!-- <li class="tooltip_nav point06">
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>MailBox</span>
                        <p>MailBox</p>
                    </a>
                </li> -->
                <!-- <li class="tooltip_nav point07">
                    <a href="#">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span>Reports</span>
                        <p>Reports</p>
                    </a>
                </li> -->
                <!-- <li class="tooltip_nav point08">
                    <a href="#">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                        <span>Settings</span>
                        <p>Settings</p>
                    </a>
                </li> -->
            </ul>
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header content-wrapper">
                <div class="section_content_header d-flex">
                    <h3>
                        Candidate
                        <span class="section_manage_span">Manage Candidate Bulk Upload</span>
                    </h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="container">
                        <div class="row">
                          <button class="btn btn-success popbtn" id="btnOpenForm"><i class="fa-solid fa-plus"></i>Add New</button>
                    
                          <div class="form-popup-bg">
                            <div class="form-container">
                              <button id="btnCloseForm" class="close-button">X</button>
                              <h1>Register Assessor</h1>

                              <?php
                                    if(isset($_SESSION['status']))
                                    {
                                        echo "<h5>".$_SESSION['status']."</h5>";
                                        unset($_SESSION['status']);
                                    }
                                ?>

                              <form action="code2.php" method="POST" enctype="multipart/form-data">
                                <!-- <div class="container">
                                  <div class="row">
                                    <div class="col-md-6 m-auto d-block">
                                        <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <label for="">Excel Upload</label>
                                            <input type="file" name="import_file" id="" class="form-control">
                                            <div class="adm_btn">
                                                <button type="submit" class="btn btn-primary" name="import_file_btn">Upload / Import</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                  </div>
                                </div> -->
                                <label for="">Excel Upload</label>
                                            <input type="file" name="import_file" id="" class="form-control">
                                            <div class="adm_btn">
                                                <button type="submit" class="btn btn-primary" name="import_file_btn">Upload / Import</button>
                                            </div>
                                
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-success"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;Download Template</button>
                </div>
                <ol class="breadcrumb">
                    <li class="divider"><a href="#"><i class="fa fa-dashboard"></i>Agency</a></li>
                    <li class="active">Assessor</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <div class="notification-hover">
            <span>Layout Option <i>02 new</i></span>
            <li>
                <p>Profile Vistors<i class="bg-red">06</i></p>
            </li>
            <li>
                <p>Uploads<i class="bg-green">+76</i></p>
            </li>
            <li>
                <p>Matches<i class="bg-orange">+56</i></p>
            </li>
            <li>
                <p>Favourites<i class="bg-purple">+32</i></p>
            </li>
            <li>
                <p>Blocked<i class="bg-grey">+23</i></p>
            </li>
        </div>
        <div class="profile-hover">
            <div class="user-profile-icon fa fa-user-circle"></div>
            <div class="user-profile">
                <span class="">Urbanites</span></br>
                <span class="">Technologies</span>
                <h1>LogOut</h1>
            </div>
        </div>
        <nav class="navigation">
            <div class="menu">
                <span>Layout Option</span>
                <li>
                    <p>Control Theme</p><label class="switch units"><input id="switch" type="checkbox" value="" />
                        <div class="slider round"></div>
                    </label>
                </li>
                <li>
                    <p>Set Activity</p><label class="switch units"><input id="switch" type="checkbox" value="" />
                        <div class="slider round"></div>
                    </label>
                </li>
            </div>
        </nav>

        <div class="popup-overlay"></div>
        <div class="popup-overlay-bell"></div>
    </div>
    <section>
        <div class="manage_assesor_content content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <form action="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 firt_select_drop_down">
                                        <label for=""><strong>sector</strong></label>
                                        <select class="form-select mt-2" aria-label="Default select example">
                                            <option selected>10</option>
                                            <option value="1">25</option>
                                            <option value="2">50</option>
                                            <option value="3">100</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4 firt_select_drop_down">
                                        <label for=""><strong>Job Role</strong></label>
                                        <select class="form-select mt-2" aria-label="Default select example">
                                            <option selected>10</option>
                                            <option value="1">25</option>
                                            <option value="2">50</option>
                                            <option value="3">100</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4 firt_select_drop_down">
                                        <label for=""><strong>Batch</strong></label>
                                        <select class="form-select mt-2" aria-label="Default select example">
                                            <option selected>10</option>
                                            <option value="1">25</option>
                                            <option value="2">50</option>
                                            <option value="3">100</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="candidate_btn_login text-center mt-3">
                                            <button class="btn btn-primary"><strong>Move</strong></button>
                                            <button class="btn btn-primary"><strong>Delete</strong></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 d-flex">
                                    <h6>Show Entries</h6>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>10</option>
                                        <option value="1">25</option>
                                        <option value="2">50</option>
                                        <option value="3">100</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-primary"><i class="fa-solid fa-file-excel"></i></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="">
                            <div class="manage_search_box d-flex float-end mt-3">
                                <label for=""><strong>Search:&nbsp;</strong></label>
                                <input type="text" class="form-control manage_form_size">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-5">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">EE Candidate ID</th>
                                <th scope="col">Candidate Code</th>
                                <th scope="col">Enrollment Number</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Gender</th>
                                <th scope="col">DOB</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                    include 'database.php';

                    $selectquery = "SELECT * FROM `excel_data`";

                    $query = mysqli_query($conn,$selectquery);

                    // $result = mysqli_fetch_array($query);

                    while($result = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $result['candidate_id']; ?>
                            </td>
                            <td>
                                <?php echo $result['candidate_name']; ?>
                            </td>
                            <td>
                                <?php echo $result['enroll']; ?>
                            </td>
                            <td>
                                <?php echo $result['father_name']; ?>
                            </td>
                            <td>
                                <?php echo $result['contact_no']; ?>
                            </td>
                            <td>
                                <?php echo $result['email']; ?>
                            </td>
                            <td>
                                <?php echo $result['gender']; ?>
                            </td>
                            <td>
                                <?php echo $result['dob']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    
                    
                    ?>
                    </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        $(document).ready(function () {
            document.querySelector("#menu_bar").onclick = function () {
                var element = document.querySelector(".leftMenu");
                element.classList.toggle("openMenu");

                var closeAccordion = document.getElementsByClassName('dropdown');
                var i = 0;
                for (i = 0; i < closeAccordion.length; i++) {
                    closeAccordion[i].classList.remove('active');
                }
            }

            var dropdown = document.getElementsByClassName('dropdown');
            var i = 0;
            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].onclick = function () {
                    this.classList.toggle('active');
                }
            }

            $("#menu_bar").click(function () {
                $(".main-header span:first").toggleClass("first border");
                $(".content-wrapper").toggleClass("content-wrapper-mid");
                $(".tooltip_nav p").toggleClass("hide");
            });


            jQuery(function ($) {
                $("#settings_bar").click(function () {
                    $(".navigation").toggleClass("open");
                })
            });

            $("#color01").click(function () {
                $("body").addClass("skin-green")
            });

        });

        $(document).ready(function () {
            $(".user-profile").on("click", function (e) {
                $(".profile-hover").toggle();
                $(".popup-overlay").toggle();
                e.preventDefault();
            });

            $(".popup-overlay").click(function () {
                $(".popup-overlay").toggle();
                $(".profile-hover").toggle();
            });

            $(".notification-icon").on("click", function (e) {
                $(".notification-hover").toggle();
                $(".popup-overlay-bell").toggle();
                e.preventDefault();
            });

            $(".popup-overlay-bell").click(function () {
                $(".popup-overlay-bell").toggle();
                $(".notification-hover").toggle();
            });
        });	
    </script>
    <script src="popp.js"></script>
</body>
<!-- </body> -->

</html>