<!-- load.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">

        <?php include('menu.php'); ?>

        <?php
            echo "<meta http-equiv=\"refresh\" content=\"5,URL=/load.php\" />";
            $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');

            if ($idleCpu > 50) {
                echo '<a href="/load.php" class="button">Generate CPU Load</a>';
                echo exec('dd if=/dev/zero bs=100M count=500 | gzip | gzip -d  > /dev/null &');
            } else {
                echo '<p>Under High CPU Load!</p>';
            }
        ?>

    </div>
</body>
</html>
