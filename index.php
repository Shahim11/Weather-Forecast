<?php
    require 'php\weather.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Weather Forecast</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="./css/styles.css" />

</head>

<body>
    <!-- navbar-->
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light navbar-bg py-3 fixed-top">
                <div class="container ">
                    <a class=" logo" href="#">
                        <img src="./image/logo.png" class="img-fluid" alt="Logo" width="300px" height="40px" />
                    </a>
                </div>
            </nav>
        </header>
    </div>

    <!-- search bar -->
    <div class="container">
        <form class="col-md-12 m-auto pt-4 pb-1 msg" action="" method="POST">
            <div class="input-group mb-3 searchbox">
                <input id="city" type="text" name="city" class="form-control text-white" placeholder="  Enter a location for Weather Forecast . . .">
                <div class="input-group-append ps-3">
                    <button type="submit" name="submit" class="btn text-white">Search</button>
                </div>
            </div>
            
            <?php if ($errormsg) { ?>
                <div class="alert errmsg" role="alert">
                    <?php echo $errormsg ?>
                </div>';
            <?php } ?>
        </form>
    </div>

    <!-- output -->
    <?php if ($status == "yes") { ?>
        <div class="forecast alert " role="alert">
            <!-- location -->
            <div class="container pb-5 location">
                <h2 class="text-center heading-title py-2">Location</h2>
                <div class="pborder">
                    <div class="time-zone" id="time-zone">
                        <h1><?php echo $city ?></h1>
                    </div>
                    <div id="country" class="country">
                        <h4><?php echo $country ?><h4>
                    </div>
                </div>
            </div>

            <!-- today -->
            <div class="container pb-5">
                <h2 class="text-center heading-title py-2">Today</h2>
                <div class="weather-status text-white text-center today">
                    <img id="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon1 ?>@2x.png" alt="icon">
                    <h4><span id="temperature">Day : <?php echo $tempday1 ?></span>&deg; C</h4>
                    <h4><span id="temperature">Night : <?php echo $tempnight1 ?></span>&deg; C</h4>
                    <h2 id="date" class="pt-3 pb-2"><?php echo $date1 ?></h2>
                </div>
            </div>

            <!-- other days -->
            <div class="container pb-5">
                <div>
                    <!-- day 2 -->
                    <h2 class="text-center heading-title py-2">Other Day</h2>
                    <div class="weather-status text-white text-center otherday mb-3">
                        <img id="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon2 ?>@2x.png" alt="icon">
                        <h4><span id="temperature">Day : <?php echo $tempday2 ?></span>&deg; C</h4>
                        <h4><span id="temperature">Night : <?php echo $tempnight2 ?></span>&deg; C</h4>
                        <h2 id="date" class="pt-3 pb-2"><?php echo $date2 ?></h2>
                    </div>

                    <!-- day 3 -->
                    <div class="weather-status text-white text-center otherday mb-3">
                        <img id="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon3 ?>@2x.png" alt="icon">
                        <h4><span id="temperature">Day : <?php echo $tempday3 ?></span>&deg; C</h4>
                        <h4><span id="temperature">Night : <?php echo $tempnight3 ?></span>&deg; C</h4>
                        <h2 id="date" class="pt-3 pb-2"><?php echo $date3 ?></h2>
                    </div>

                    <!-- day 4 -->
                    <div class="weather-status text-white text-center otherday mb-3">
                        <img id="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon4 ?>@2x.png" alt="icon">
                        <h4><span id="temperature">Day : <?php echo $tempday4 ?></span>&deg; C</h4>
                        <h4><span id="temperature">Night : <?php echo $tempnight4 ?></span>&deg; C</h4>
                        <h2 id="date" class="pt-3 pb-2"><?php echo $date4 ?></h2>
                    </div>

                    <!-- day5 -->
                    <div class="weather-status text-white text-center otherday">
                        <img id="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon5 ?>@2x.png" alt="icon">
                        <h4><span id="temperature">Day : <?php echo $tempday5 ?></span>&deg; C</h4>
                        <h4><span id="temperature">Night : <?php echo $tempnight5 ?></span>&deg; C</h4>
                        <h2 id="date" class="pt-3 pb-2"><?php echo $date5 ?></h2>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- footer -->
    <div class="footer py-4 ">
        <div class="container">
            <div class="row">
                <div class="footer-text text-white text-center justify-content-between">
                    <span>&copy; 2021- Shahim Uddin Saba. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>