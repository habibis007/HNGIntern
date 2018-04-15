<?php
date_default_timezone_set("Africa/Lagos");
$time = date("h:i:sa");
$day = date("Y/m/d");

?>
<!doctype>
<html>

<head>
    <title>Available.me</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="body">
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <h3>
                        <href="#">Available.Me</href>
                    </h3>
                </div>
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4">
                    <h3>Date: <?php echo $day;?></h3>
                </div>
            </div>



        </div>


    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4"></div>
            <div class="col-md-4 col-xs-4">
                <center><img src="IMG_8263.JPG" class="img-circle img" alt="avatar" /></center>
                <p>
                    <h3 style="color: #2261B6">Current Time in Nigeria:</h3>
                </p>
                <p>
                    <center>
                        <h1 style="color: #2261B6;" class="time"><?php echo $time; ?></h1>
                    </center>
                </p>

            </div>
            <div class="col-md-4 col-xs-4"></div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-8">
                <p><h2>Call Time: <span class="time">8:00pm - 10:00pm</span></h2></p>
            <p><h2>Chat Time: <span class="time">9:00pm - 10:00pm</span> </h2></p>
        <p><h2>Business: <span style="color: red" class="time">Anytime</span></h2></p>
            </div>
            <div class="col-md-4 col-xs-4"></div>

        </div>

    </div>

</body>

</html>
