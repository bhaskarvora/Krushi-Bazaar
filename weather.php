<?php
session_start();
if (!isset($_SESSION['mobile'])) {
  
header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166000335-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-166000335-1');
    </script>
    <meta charset="utf-8">
    <title>Weather App in JavaScript | CodingNepal</title>
	<link rel="stylesheet" href="style.css">
 	<?php include "assets/csslink.php"?>
 	<?php include "assets/jslink.php"?>
	<link rel="stylesheet" type="text/css" href="font.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Weather</title>
	<link rel="stylesheet" href="styleweather.css">
	<style>
        .download-btn-cn {
            position: fixed;
            bottom: 40px;
            left: 40px;
            z-index: 99999;
        }

        .download-btn-cn a {
            background: none;
            padding: 13px 22px;
            font-size: 16px;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            border: 2px solid #fff;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .download-btn-cn a:hover {
            color: #43AFFC;
            background: #fff;
        }

        @media screen and (max-width: 600px) {
            .download-btn-cn {
                left: 20px;
            }
            .download-btn-cn a {
                font-size: 13px;
                padding: 9px 15px;
            }
        }
    </style>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="wrapper" style="text-align: center;">
        <header><i class='bx bx-left-arrow-alt'></i> Weather</header>
        <section class="input-part">
            <p class="info-txt"></p>
            <div class="content">
                <input type="text" spellcheck="false" placeholder="Enter city name" required>
                <div class="separator"></div>
                <button class="btn btn-success">Get Current Location</button>
            </div>
        </section>
        <section class="weather-part">
            <img src="#" alt="Weather Icon">
            <div class="temp">
                <span class="numb">_</span>
                <span class="deg">°</span>C
            </div>
            <div class="weather">_ _</div>
            <div class="location">
                <i class='bx bx-map'></i>
                <span>_, _</span>
            </div>
            <div class="bottom-details">
                <div class="column feels">
                    <i class='bx bxs-thermometer'></i>
                    <div class="details">
                        <div class="temp">
                            <span class="numb-2">_</span>
                            <span class="deg">°</span>C
                        </div>
                        <p>Feels like</p>
                    </div>
                </div>
                <div class="column humidity">
                    <i class='bx bxs-droplet-half'></i>
                    <div class="details">
                        <span>_</span>
                        <p>Humidity</p>
                    </div>
                </div>
            </div>
        </section>
		
    </div>

	
    <script src="js/country-list.js"></script>
    <script src="js/script.js"></script>	
	<?php include "assets/jslink.php" ?>

</body>
</html>