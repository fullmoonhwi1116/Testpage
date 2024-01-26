<!-- rds.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">

        <?php include('menu.php'); ?>

        <?php
            include 'rds.conf.php';

            if ($RDS_URL == "") {
                include 'rds-config.php';
            } else {
                include 'rds-read-data.php';
            }
        ?>

    </div>
</body>
</html>
