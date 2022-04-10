<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Portfolio</title>
    <link rel="icon" href="" type="png" sizes="16x16">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
    <link href="./style/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="./style/responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./main.js" type="text/javascript"></script>
</head>

<body onload="loadPost('home')">
<div id="wrapper">
    <?php include 'layout/header.php';?>
    <!-- end #header -->
    <?php include 'layout/sidebar.php';?>

    <div id="loadPost">
    </div>

    <!-- end #sidebar -->
    <!-- end #page -->
    <!-- end #footer -->
</div>
</body>
</html>
