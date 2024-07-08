<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Karyawan</title>
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
        h2 {
            color: #343a40;
            font-weight: bold;
        }
        .form-group label {
            margin-top: 10px;
            color: #656565;
            font-weight: bold;
        }
        .btn {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .alert {
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="text-center">Tambah Karyawan</h2>
                <?php if ($this->session->flashdata("empinsert")) { ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata("empinsert"); ?>
                </div>
                <?php } ?>
                <?php if ($this->session->flashdata("empinsertnot")) { ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata("empinsertnot"); ?>
                </div>
                <?php } ?>
                <?php if (validation_errors()) { ?>
                <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                </div>
                <?php } ?>
                <?php echo form_open_multipart("employee/empinsert"); ?>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="<?php echo set_value('name'); ?>">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" value="<?php echo set_value('address'); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                </div>
                <div class="form-group">
                    <label for="mobile">Kontak</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Kontak" value="<?php echo set_value('mobile'); ?>">
                </div>
                <div class="form-group">
                    <label for="dob">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Tanggal Lahir" value="<?php echo set_value('dob'); ?>">
                </div>
                <div class="form-group">
                    <label for="doj">Tanggal Bergabung</label>
                    <input type="date" class="form-control" id="doj" name="doj" placeholder="Tanggal Bergabung" value="<?php echo set_value('doj'); ?>">
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="status" value="1" checked>
                    <label class="custom-control-label" for="customCheck">Set As Active</label>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="dashboard" class="btn btn-dark">Kembali</a>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
