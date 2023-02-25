<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

//for generating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {

    // echo "con successful";

} else {
    echo "not success";
}


?>

<?php

if (!isset($_GET['catid'])) header('location:/');
$catid = $_GET['catid'];

$nsql = "SELECT * FROM `categories` WHERE `cat-id` = $catid";


$result = mysqli_query($conn, $nsql);
$row = mysqli_fetch_assoc($result);

$categoryName = $row['cat-name'];
$categorydesc = $row['cat-desc'];

?>

<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Discussion Forum Site</title>
    <link rel="icon" href="">

    <link rel="stylesheet" href="http://localhost/odfs/plugins/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="http://localhost/odfs/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/odfs/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <!-- Data-tables-link -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css.">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>

    <!-- jQuery -->
    <script src="http://localhost/odfs/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/odfs/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/odfs/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="http://localhost/odfs/plugins/toastr/toastr.min.js"></script>

</head>

<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm sidebar-collapse" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
        <style>
            .user-img {
                position: absolute;
                height: 27px;
                width: 27px;
                object-fit: cover;
                left: -7%;
                top: -12%;
            }

            .btn-rounded {
                border-radius: 50px;
            }
        </style>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light shadow text-sm">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://localhost/Forum2/#" class="nav-link">Online Discussion Forum Site - Admin</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <div class="btn-group nav-link">
                        <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span><img src="http://localhost/odfs/uploads/logo.png?v=1652665183" class="img-circle elevation-2 user-img" alt="User Image"></span>
                            <span class="ml-3">Gohar Ga</span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href=""><span class="fa fa-user"></span> My Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href=""><span class="fas fa-sign-out-alt"></span> Logout</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">

                </li>

            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/Forum2/" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">iDiscuss</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../userdeafult.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="./AdminDashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./commenthandel.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Comments
                                    <span class="right badge badge-danger">New</span>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./threadhandel.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Thread
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./category.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Categories
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>



                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

            <div class="sidebar-custom">
                <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
                <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
            </div>
            <!-- /.sidebar-custom -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Update the Reccord</h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="title" class="control-label mx-2 ">Category Title</label>
                        <input type="text" class="form-control rounded-0 mx-2" name="catname" id="catname" value="<?php echo "$categoryName" ?>">
                    </div>

                    <div class="form-group">
                        <label for="title" class="control-label mx-2 ">Category Description</label>
                        <textarea class="form-control" id="desc" rows="4" style="height: 209px;" name="catdesc"><?php echo "$categorydesc" ?></textarea>
                    </div>

                    <button class="btn btn-success btn-lg" type="submit" name="submit">UPDATE</button>
        </div>
        </form>
        <!-- /.card -->
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>





    <!-- /.content -->
    <footer class="main-footer text-sm">
        <strong>Copyright © 2023.
            <!-- <a href=""></a> -->
        </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        </div>
    </footer>
    <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> -->
    <!-- Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/odfs/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/odfs/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/odfs/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/odfs/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/odfs/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/odfs/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/odfs/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/odfs/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/odfs/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- for-alert-showing-when-update -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>


<!-- php wriiten for updating the reccord -->
<!-- 
   
// $sql = "SELECT * FROM ``categories``";
// $result = mysqli_query($conn, $sql);

// while ($row = mysqli_fetch_assoc($result)) {
//     $id = $row['cat-id'];
// }

// if (isset($_POST['submit'])) {
//     $catName = $_POST['catname'];
//     $catdesc = $_POST['catdesc'];



//     $sql = "UPDATE `categories` SET `cat-name` =  $catName  , `cat-desc` =  $catdesc  WHERE `cat-id ` = $catid";

//     $result = mysqli_query($conn, $sql);


//     if ($result) {
//         echo "
//         <script>
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Your work has been saved',
//             showConfirmButton: false,
//             timer: 1500
//         }).then(()=>{
//             window.location.href = '../category/category.php';
//         })
//         </script>
//         ";
//     } else {
//         echo "
//         <script>Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Something went wrong!',
//             footer: '<a href=''>Why do I have this issue?</a>'
//           })
//         </script>
//         ";
//     }
// } 
//
