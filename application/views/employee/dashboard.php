<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Karyawan</title>
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
        }
        h3 {
            color: #343a40;
            font-weight: bold;
        }
        .btn {
            border-radius: 30px;
            padding: 10px 20px;
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
        .btn-action {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row mb-3 align-items-center">
            <div class="col-12 col-md-8 text-left">
                <h3>List Karyawan</h3>
            </div>
            <div class="col-12 col-md-4 text-right">
                <a href="<?php echo base_url(); ?>employee/empadd" class="btn btn-success rounded-pill">
                    <i class="fas fa-plus-square"></i> Tambahkan Karyawan
                </a>
            </div>
        </div>
        <div class="row table-responsive">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count = 0;
                            foreach ($employees as $emp) { 
                        ?>
                        <tr>
                            <th scope="row"><?php echo ++$count; ?></th>
                            <td><?php echo $emp->name; ?></td>
                            <td><?php echo $emp->email; ?></td>
                            <td><?php echo $emp->mobile; ?></td>
                            <td><?php echo $emp->address; ?></td>
                            <td><?php echo $emp->doj; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/empedit/<?php echo $emp->id; ?>" class="btn btn-success rounded-pill btn-action">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>employee/empdelete/<?php echo $emp->id; ?>" class="btn btn-danger rounded-pill btn-action">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
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
