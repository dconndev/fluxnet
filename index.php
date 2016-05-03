<!--
fluxnet PHP website template
Version 1.0 by Dean Connolly
This project and all associated files are
Copyright Apple Inc. 2016, All Rights Reserved.
!-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>fluxnet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include "core/nav.php"; ?>
        <div class="container">
            <!-- Action Frame !-->
            <div class="col-md-9">
                <?php
              $action = $_GET['action'];
              $action = basename($action);
              include "actions/$action.php";
            ?>
            </div>

            <!-- PlugIn Frame !-->
            <div class="col-md-3">
                <?php include "actions/action.profile.php"; ?>
            </div>
        </div>

        <!-- Scripts !-->
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>