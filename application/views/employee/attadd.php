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
        h4 {
            color: #656565;
        }
        .form-row .col, .form-row .col-6 {
            padding: 5px;
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
        <div class="row justify-content-start">
            <h4 class="pr-2"><?php echo $employee->name; ?> History Absen</h4>
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
        <div class="row table-responsive mt-4 mb-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo form_open("employee/attupdate"); ?>
                    <?php 
                        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                        $arrIndex = 0;
                        for ($i = 1; $i <= $days; $i++) {
                            $weekday = date("l", strtotime(date($year . "-" . $month . "-" . $i)));
                            $date_current = $year . "-" . $month . "-" . (strlen($i) == 1 ? "0" . $i : $i);
                    ?>
                    <tr <?php echo $weekday == "Sunday" ? "class='text-danger'" : ""; ?>>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $weekday; ?></td>
                        <td>
                            <?php if (strcmp($date_current, @$attendances[$arrIndex]->attdate) == 0) { ?>
                                <select name="attstatus[]" class="custom-select <?php echo $weekday == 'Sunday' ? 'text-danger' : ''; ?>" id="inlineFormCustomSelectPref">
                                    <option value="">Select</option>
                                    <option value="P" <?php if (@$attendances[$arrIndex]->attstatus == "P") echo "selected"; ?>>Masuk</option>
                                    <option value="A" <?php if (@$attendances[$arrIndex]->attstatus == "A") echo "selected"; ?>>Tidak Masuk</option>
                                    <option value="H" <?php if (@$attendances[$arrIndex]->attstatus == "H") echo "selected"; ?>>Cuti</option>
                                </select>
                            <?php 
                                $arrIndex++;
                                } else { 
                            ?>
                                <select name="attstatus[]" class="custom-select <?php echo $weekday == 'Sunday' ? 'text-danger' : ''; ?>" id="inlineFormCustomSelectPref">
                                    <option value="">Select...</option>
                                    <option value="P">Masuk</option>
                                    <option value="A">Tidak Masuk</option>
                                    <option value="H" <?php echo $weekday == "Sunday" ? "selected" : ""; ?>>Cuti</option>
                                </select>
                            <?php } ?>
                        </td>
                        <td>
                            <button type="submit" name="save[]" value="<?php echo strlen($i) == 1 ? "0" . $i : $i; ?>" class="btn btn-success" style="border-radius:70px;"><i class="fas fa-check"></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                    <input type="hidden" name="empid" value="<?php echo $employee->id; ?>">
                    <input type="hidden" name="year" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <?php echo form_close(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
