<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get CPU Load</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">

        <?php
            $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');
            echo "<br /><p>Current CPU Load: <b>"; 
            echo 100 - $idleCpu;
            echo "%</b></p>";
        ?>

    </div>
</body>
</html>
