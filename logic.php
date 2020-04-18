<?php

    $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
    $data = json_decode($jsonData, true);
    foreach ($data as $key => $value) {
        $daysCount = count($value) - 1;
        $prev = $daysCount - 1;
    }
    $totalConfirmed = 0;
    $totalRecovered = 0;
    $totalDeaths = 0;

    foreach ($data as $key => $value) {
        $totalConfirmed += $value[$daysCount]['confirmed'];
        $totalDeaths += $value[$daysCount]['deaths'];
        $totalRecovered += $value[$daysCount]['recovered'];
    }

?>