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
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        <?php include "core/nav.php"; ?>
        <div class="container">
            <!-- View Frame !-->
            <div class="col-md-9">
            <?php
              $action = $_GET['action'];
              $action = basename($action);
              include "views/view.homepage_loggedOut.php";
            ?>
            </div>
            
            <!-- PlugIn Frame !-->
            <div class="col-md-3">
                <?php include "views/view.profile.php"; ?>
            </div>
        </div>
    </body>
</html>