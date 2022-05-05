<?php include('weatherWidget.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="weather-widget-app">
      <title>Weather widget</title>
      <script src="https://unpkg.com/feather-icons"></script>
      <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
      <div class="container">
            <div class="weather-side" style="background-image: url(<?php echo $pickedCity['godzina_pomiaru'] > 18 ? 'https://images.unsplash.com/photo-1488866022504-f2584929ca5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1162&q=80' : 'https://images.unsplash.com/photo-1559963110-71b394e7494d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80' ?>)">
                  <div class="weather-gradient"></div>
                  <div class="date-container">
                        <h2 class="date-dayname">
                              <?php
                              echo date('l', strtotime($pickedCity['data_pomiaru']));
                              ?>
                        </h2><span class="date-day"><?php echo ($pickedCity['data_pomiaru']); ?></span><i class="location-icon" data-feather="map-pin"></i><span class="location">
                              <?php
                              echo ($pickedCity['stacja'])
                              ?>
                        </span>
                  </div>
                  <div class="weather-container"><i class="weather-icon" data-feather="<?php echo ($pickedCity['temperatura']) > 15 ? 'sun' : 'cloud' ?>"></i>
                        <h1 class="weather-temp"><?php echo intval($pickedCity['temperatura']); ?></h1>
                        <h3 class="weather-desc"><?php
                                                      if ($pickedCity['temperatura'] > 15) {
                                                            echo 'Sunny';
                                                      } else if ($pickedCity['predkosc_wiatru'] > 10) {
                                                            echo "Windy";
                                                      } else if ($pickedCity['suma_opadu'] > 5) {
                                                            echo "Rainy";
                                                      } else if ($pickedCity['cisnienie'] > 1100) {
                                                            echo "Not beneficial";
                                                      } else {
                                                            echo "Beneficial";
                                                      };
                                                      ?></h3>
                  </div>

            </div>
            <div class="info-side">
                  <div class="stats-container">
                        <ul class="stats-list">
                              <li><i class="day-icon" data-feather="wind"></i><span class="day-name">Wind</span><span class="day-temp"><?php echo $pickedCity["predkosc_wiatru"] ?> km/h</span></li>
                              <li><i class="day-icon" data-feather="droplet"></i><span class="day-name">Humidity</span><span class="day-temp"><?php echo intval($pickedCity["wilgotnosc_wzgledna"]) ?> %</span></li>
                              <li><i class="day-icon" data-feather="cloud-rain"></i><span class="day-name">Rain</span><span class="day-temp"><?php echo intval($pickedCity["suma_opadu"]) ?> %</span></li>
                              <li><i class="day-icon" data-feather="clock"></i><span class="day-name">Pressure</span><span class="day-temp"><?php echo intval($pickedCity["cisnienie"]) ?> hPa</span></li>
                              <div class="clear"></div>
                        </ul>
                  </div>
                  <div style=" text-align: center">
                        <form method="POST">
                              <input type="text" class="form__field" placeholder="Search for a city.." name="searchingCity" required />
                  </div>

                  <div class="location-container">
                        <button class="location-button" name="changeCity"> <i data-feather="map-pin"></i><span>Change location</span><span><br><?php echo $error != '' ? $error : '' ?></span></button>
                        </form>
                  </div>
            </div>
      </div>
      <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>


      <script id="rendered-js">
            feather.replace();
            //# sourceURL=pen.js
      </script>



      <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
</body>

</html>