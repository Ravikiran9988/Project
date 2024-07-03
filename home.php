<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>TravelEase Bus and Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
    <link rel="stylesheet" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">
        body {
            background-image: url(image/1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .home_details {
            color: #fff;
            font-family: inherit;
            font-size: 74px;
            padding: 162px 5px 5px 185px;
        }
        .font {
            color: #F9522E;
        }
        .btnHome {
            font-family: inherit;
            background-color: #F9522E;
            padding: 13px 44px 13px 44px;
            font-size: 18px;
            border-style: none;
        }
        .btnHome:hover {
            background-color: orange;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <!-- Include the navigation -->
        <?php include("nav.php"); ?>

        <h1 class="home_details">Your Bus Pass. Anytime. <br><font class="font">Anywhere..</font><br>
            <a href="signUp.php"><button class="btnHome">SIGN UP NOW</button></a>
        </h1>
    </div>

    <div class="section">
        <video autoplay loop muted class="section">
            <source src="video/video.mp4" type="video/mp4">
        </video>
    </div><!--section-->

    <!-- Include the footer -->
    <?php include("footer.php"); ?>
</body>
</html>
