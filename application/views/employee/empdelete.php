<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Hapus List Karyawan</title>
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
        }
        .box {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #343a40;
            font-weight: bold;
        }
        h5 {
            color: #dc3545;
        }
        .form-group b {
            color: #007bff;
        }
        .btn-danger, .btn-dark {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .alert {
            width: 100%;
            text-align: center;
        }
        .text-left {
            text-align: left !important;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="box text-left">
                    <h3 class="text-center">Hapus List Karyawan</h3>
                    <br>
                    <h5 class="text-center">Apakah Anda yakin ingin menghapus data ini?</h5>
                    <?php if ($this->session->flashdata("empdelete")) { ?>
                    <div class="alert alert-success mt-4">
                        <?php echo $this->session->flashdata("empdelete"); ?>
                    </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata("empdeletenot")) { ?>
                    <div class="alert alert-danger mt-4">
                        <?php echo $this->session->flashdata("empdeletenot"); ?>
                    </div>
                    <?php } ?>
                    <?php echo form_open_multipart("employee/empremove"); ?>
                    <div class="form-group">
                        <b>Nama:</b>&nbsp;&nbsp;<?php echo $employee->name; ?>
                    </div>
                    <div class="form-group">
                        <b>Alamat:</b>&nbsp;&nbsp;<?php echo $employee->address; ?>
                    </div>
                    <div class="form-group">
                        <b>Email:</b>&nbsp;&nbsp;<?php echo $employee->email; ?>
                    </div>
                    <div class="form-group">
                        <b>Kontak:</b>&nbsp;&nbsp;<?php echo $employee->mobile; ?>
                    </div>
                    <div class="form-group">
                        <b>Tanggal Lahir:</b>&nbsp;&nbsp;<?php echo $employee->dob; ?>
                    </div>
                    <div class="form-group">
                        <b>Jabatan:</b>&nbsp;&nbsp;<?php echo $employee->doj; ?>
                    </div>
                    <div class="form-group">
                        <b>Status:</b>&nbsp;&nbsp;<?php echo $employee->status == '1' ? 'Active' : 'Not Active'; ?>
                    </div>
                    <div class="form-group text-center">
                        <input type="hidden" name="id" value="<?php echo $employee->id; ?>">
                        <button type="submit" class="btn btn-danger">Confirm</button>
                        <a href="<?php echo base_url(); ?>employee/dashboard" class="btn btn-dark">Go Back</a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
