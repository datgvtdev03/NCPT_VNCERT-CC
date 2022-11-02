<?php 
    session_start();
    if( empty($_SESSION["email"]) ){
        header("Location: login.php?login-first");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Nhân viên</title>

    <link href="./resorce/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

    <style>
    .hidden {
        display: none;
    }
    </style>

</head>

<body>


    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>









    <div id="main-wrapper">


        <div class="nav-header">

            <div class="brand-logo">
                <a>
                    <span class="brand-title">

                    </span>
                </a>
            </div>
        </div>

        <div class="header">
            <div class="header-content clearfix">


                <div class="nav-control">
                    <div class="hamburger">
                        <a href="./../news.php" class="toggle-icon"><i class="icon-home"></i></a>
                    </div>
                </div>
                <div class="text-center">
                    <h2 class="pt-3"> VNCERT </h2>
                </div>

            </div>
        </div>

        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <br> <br>
                    <li>
                        <a href="./index.php">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Tổng quan</span>
                        </a>
                    </li>

                    <li><a href="./add-post-desc.php"> <i class="icon-plus menu-icon"></i>Thêm tin tức</a></li>
                    <li><a href="./manage-post-desc.php"><i class="fa fa-cog menu-icon"></i>Quản lý tin tức</a></li>
                    </li>


                    <li>
                        <a href="#">
                            <i class="icon-list menu-icon"></i><span class="nav-text">Nhiệm vụ</span>
                        </a>
                    </li>

                    <li>
                        <a href="./logout.php">
                            <i class="icon-logout menu-icon"></i><span class="nav-text">Đăng xuất</span>
                        </a>
                    </li>
                    <li>
                        <a href="./profile.php">
                            <i class="fa fa-user menu-icon"></i><span class="nav-text">Thông tin cá nhân</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">




            <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div id="modalHead" class="modal-header">
                            <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="addMsg" class="text-center font-weight-bold"></p>
                        </div>
                        <div class="modal-footer ">
                            <div class="mx-auto">
                                <a type="button" id="linkBtn" href="#" class="btn btn-primary">Add Expense For the
                                    Day</a>
                                <a type="button" id="closeBtn" href="#" data-dismiss="modal"
                                    class="btn btn-primary">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">