<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://danepubliczne.imgw.pl/api/data/synop");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$cities = json_decode(curl_exec($ch), true);
curl_close($ch);

$citiesNames = array();
$error = '';


foreach ($cities as $city) {
      $cityName = $city['stacja'];
      $citiesNames[] = $cityName;
      $citiesNames[] = strtolower($cityName);
      if ($city['stacja'] = 'Warszawa') {
            $pickedCity = $city;
      };
};

if (isset($_POST['changeCity']) && $_POST['searchingCity'] !== '') {
      $searchingCity = $_POST['searchingCity'];
      foreach ($cities as $city) {
            if ($searchingCity == $city['stacja'] || $searchingCity == strtolower($city['stacja'])) {
                  $pickedCity = $city;
            };
      };
      if (!in_array($searchingCity, $citiesNames)) {
            $city = '';
            $error = "City not founded";
      };
};
