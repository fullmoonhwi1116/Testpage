<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the AWS IMD</title>
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">

        <?php include('menu.php'); ?>

        <?php include("get-index-meta-data.php"); ?>

        <hr />

        <?php include('get-cpu-load.php'); ?>

      <!-- LOAD TEST 버튼 추가 -->
      <a href="load.php" class="button">LOAD TEST</a>

      <!-- RDS 버튼 추가 -->
      <a href="rds.php" class="button">RDS</a>
    </div>
</body>
</html>
