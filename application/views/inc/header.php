<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Employee Attendance</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <style>
        .navbar {
            background: linear-gradient(to right, #007bff, #0056b3);
            padding: 15px 20px;
        }
        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
        }
        .navbar-nav .nav-item .nav-link {
            color: #fff;
            margin-right: 15px;
            transition: color 0.3s;
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #d1ecf1;
        }
        .btn-rounded {
            border-radius: 50px;
        }
        .btn-login {
            background-color: #28a745;
            color: white;
        }
        .btn-logout {
            background-color: #dc3545;
            color: white;
        }
        .btn-rounded:hover {
            opacity: 0.8;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <?php if ($this->session->has_userdata("username")) { ?>
					<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>home/index">Beranda</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>employee/dashboard">List Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>employee/attendance">History Absensi</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>user/logout"><button class="btn btn-danger btn-rounded btn-logout"><i class="fas fa-power-off"></i></button></a>
            </li>
        </ul>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
