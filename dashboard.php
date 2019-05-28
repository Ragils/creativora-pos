<?php
    
    session_start();
    
    if($_SESSION['status'] != "login"){
        header("location:login.php?pesan=belum_login");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-light bg-white navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" height="30" alt="logo">
            </a> -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-2"><img src="assets/img/user.png" alt="user icon" class="rounded-circle mt-2" width="25"></li>
                <li class="text-bold nav-item dropdown dashboard-nav">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?></a>
                    <div class="dropdown-menu">
                        <a href="logout.php" class="dropdown-item">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="d-block position-fixed sidebar bg-white border-right">
        <ul class="pl-0 w-100 list-group text-center">
            <li class="list-group-item border-0 mb-3" style="padding-top: 13px;padding-bottom: 13px;">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-reorder"></i>
                </a>
            </li>
            <li class="list-group-item border-0">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-apps"></i>
                </a>
            </li>
            <li class="list-group-item border-0">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-list"></i>
                </a>
            </li>
            <li class="list-group-item border-0">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-stats"></i>
                </a>
            </li>
            <li class="list-group-item border-0">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-mail"></i>
                </a>
            </li>
            <li class="list-group-item border-0">
                <a href="#" class="text-dark font-20">
                    <i class="icon ion-md-settings"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="content mt-3">
        <div class="container-fluid">
            <div class="row slim-grid">
                <div class="col-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-3 p-custom-1 rounded-circle d-table mx-auto" style="background-color: hsla(233, 100%, 50%, 0.06);">
                                <i class="icon ion-md-filing font-16 text-blue"></i>
                            </div>
                            <h2 class="mb-0 font-weight-bold text-dark">200</h2>       
                            <p class="mb-0 font-12 text-secondary">Total Product</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-3 p-custom-1 rounded-circle d-table mx-auto" style="background-color: hsla(233, 100%, 50%, 0.06);">
                                <i class="icon ion-md-cart font-16 text-success"></i>
                            </div>
                            <h2 class="mb-0 font-weight-bold text-dark">85</h2>       
                            <p class="mb-0 font-12 text-secondary">Total transaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
