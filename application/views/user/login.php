<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login To Continue...</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #1d2b64, #f8cdda);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            padding: 15px;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-title {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .btn-login {
            background-color: #1d2b64;
            color: #ffffff;
            border-radius: 50px;
            transition: background-color 0.3s;
        }
        .btn-login:hover {
            background-color: #14213d;
            color: #ffffff;
        }
        .alert {
            margin-bottom: 20px;
        }
        .input-group-text {
            background-color: #f8cdda;
            border: none;
        }
        .form-control {
            border-left: 0;
        }
        .form-group .input-group {
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Added margin for spacing */
        }
        .form-group .form-control {
            border-radius: 0;
            border: none;
            box-shadow: none;
        }
        .form-group .input-group-prepend .input-group-text {
            border-radius: 50px 0 0 50px;
        }
        .footer {
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }
        .spacer {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <div class="spacer"></div>
        <?php if ($this->session->flashdata("userlogin")) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata("userlogin"); ?>
            </div>
        <?php } ?>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php echo form_open('user/signin'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Enter Username">
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Enter Password">
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-dark btn-login btn-block">Login</button>
        </div>
        <?php echo form_close(); ?>
        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> Your Company. All Rights Reserved.</p>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
