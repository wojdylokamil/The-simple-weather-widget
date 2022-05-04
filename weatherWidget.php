<?php

$ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "https://danepubliczne.imgw.pl/api/data/synop");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $cities = json_decode(curl_exec($ch), true);
      curl_close($ch);

$citiesNames = array();
$pickedCity = '';

foreach($cities as $city){
      $cityName = $city['stacja'];
      $citiesNames[] = $cityName;
};

if(isset($_POST['searchingCity']) && $_POST['searchingCity'] !== ''){
      $searchingCity = $_POST['searchingCity'];
      foreach ($cities as $city) {
            if ($city['stacja'] == $searchingCity) {
            $pickedCity = $city;
            };
      };
      if (!in_array($searchingCity, $citiesNames)) {
            $searchingCity = '';
            header("Refresh:0");
      };
};

