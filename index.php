
<?php include('weatherWidget.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="weather-widget-app">
      <title>Weather widget</title>
      <script src="https://unpkg.com/feather-icons"></script>
      <link rel="stylesheet" href="style.css">
</head>

<body>
      <div class="container">
            <div class="weather-side"  style="background-image: url(<?php echo $pickedCity['godzina_pomiaru'] > 18 ? 'https://images.unsplash.com/photo-1488866022504-f2584929ca5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1162&q=80' : 'https://images.unsplash.com/photo-1559963110-71b394e7494d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80'?>)">
                  <div class="weather-gradient"></div>
                  <div class="date-container">
                        <h2 class="date-dayname">
                              <?php
                              echo date('l', strtotime($pickedCity['data_pomiaru']));
                              ?>
                        </h2><span class="date-day"><?php echo $pickedCity['data_pomiaru']; ?></span><i class="location-icon"
                              data-feather="map-pin"></i><span class="location">
                              <?php
                              echo ($pickedCity['stacja'])
                              ?>
                        </span>
                  </div>
                  <div class="weather-container"><i class="weather-icon" data-feather="<?php echo ($pickedCity['temperatura'] > 15) ? 'sun' : 'cloud' ?>"></i>
                        <h1 class="weather-temp"><?php echo intval($pickedCity['temperatura']);?></h1>
                        <h3 class="weather-desc"><?php echo ($pickedCity['temperatura'] > 15) ? 'Sunny' : 'Night' ?></h3>
                  </div>

            </div>
            <div class="info-side">
                  <div class="today-info-container">
                        <div class="today-info">
                              <div class="precipitation"> <span class="title">PRECIPITATION</span><span class="value"> <?php echo intval($pickedCity["suma_opadu"])?> %</span>
                                    <div class="clear"></div>
                              </div>
                              <div class="humidity"> <span class="title">HUMIDITY</span><span class="value"><?php echo intval($pickedCity["wilgotnosc_wzgledna"]) ?> %</span>
                                    <div class="clear"></div>
                              </div>
                              <div class="wind"> <span class="title">WIND</span><span class="value"><?php echo $pickedCity["predkosc_wiatru"]?> km/h</span>
                                    <div class="clear"></div>
                              </div>
                              <div class="pressure"> <span class="title">PRESSURE</span><span class="value"><?php echo intval($pickedCity["cisnienie"])?> hPa</span>
                                    <div class="clear"></div>
                              </div>
                        </div>
                  </div>
                  <div class="week-container">
                        <ul class="week-list">
                              <li class="active"><i class="day-icon" data-feather="sun"></i><span
                                          class="day-name">Tue</span><span class="day-temp">29°C</span></li>
                              <li><i class="day-icon" data-feather="cloud"></i><span class="day-name">Wed</span><span
                                          class="day-temp">21°C</span></li>
                              <li><i class="day-icon" data-feather="cloud-snow"></i><span
                                          class="day-name">Thu</span><span class="day-temp">08°C</span></li>
                              <li><i class="day-icon" data-feather="cloud-rain"></i><span
                                          class="day-name">Fry</span><span class="day-temp">19°C</span></li>
                              <div class="clear"></div>
                        </ul>
                  </div>
                  <div style = " text-align: center">
                        <form method="POST">
                        <input type="text" name="searchingCity" placeholder="Search for a city..">
                        <input type="submit" name="submit" value="Search">
                        </form>
                  </div>

                  <div class="location-container">
                        <button class="location-button"> <i data-feather="map-pin"></i><span>Change
                                    location</span></button>
                  </div>
            </div>
      </div>
      <script
            src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>


      <script id="rendered-js">
            feather.replace();
//# sourceURL=pen.js
      </script>



      <script
            src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
</body>

</html>