<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>History Absensi</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background 0.5s;
        }
        h3 {
            color: #343a40;
            font-weight: bold;
        }
        .form-row .col, .form-row .col-5 {
            padding: 5px;
        }
        .btn {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .input-group-text {
            border-radius: 30px;
            background-color: #28a745;
            color: white;
        }
        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #343a40;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        .table-responsive {
            margin-top: 20px;
        }
    </style>
    <script>
        function handleFilterClick() {
            var container = document.querySelector('.container');
            container.style.background = '#e2e6ea';
            setTimeout(() => {
                container.style.background = '#ffffff';
            }, 500);
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <div class="row d-flex mb-2 justify-content-between">
            <div class="col-12 col-md-8">
                <h3>History Absensi</h3>
            </div>
            <div class="col-12 col-md-4">
                <?php echo form_open("employee/attendance"); ?>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tahun</span>
                            </div>
                            <input type="text" name="Tahun" class="form-control" placeholder="YYYY" value="<?php echo $year != '' ? $year : date('Y'); ?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Bulan</span>
                            </div>
                            <input type="text" name="Bulan" class="form-control" placeholder="MM" value="<?php echo $month != '' ? $month : date('m'); ?>" readonly>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row table-responsive">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Masuk</th>
                            <th scope="col">Tidak Masuk</th>
                            <th scope="col">Cuti</th>
                            <th scope="col">Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count = 0;
                            for ($i = 0; $i < count($data[0]); $i++) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo ++$count; ?></th>
                            <td><?php echo $data[1][$i]; ?></td>
                            <td><?php echo $data[2][$i]; ?></td>
                            <td><?php echo $data[3][$i]; ?></td>
                            <td><?php echo $data[4][$i]; ?></td>
                            <td><a href="<?php echo base_url(); ?>employee/attadd/<?php echo $data[0][$i]; ?>/<?php echo $year; ?>/<?php echo $month; ?>"><button class="btn btn-warning btn-sm">Manage</button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
