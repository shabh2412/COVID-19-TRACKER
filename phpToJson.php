<?php
$today = date('m-d-Y');
// php function to convert csv to json format
//$csvMapFile = file_get_contents("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_daily_reports/".$today.".csv");
$csvMapFile = file_get_contents("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_daily_reports/04-17-2020.csv");
function csvToJson($csvFile) {
    // open csv file
    if (!($fp = fopen($csvFile, 'r'))) {
        die("Can't open file...");
    }
    
    //read csv headers
    $key = fgetcsv($fp,"1024",",");
    
    // parse csv rows into array
    $json = array();
        while ($row = fgetcsv($fp,"1024",",")) {
        $json[] = array_combine($key, $row);
    }
    
    // release file handle
    fclose($fp);
    
    // encode array to json
    return json_encode($json);
}
$jsonMapData = csvToJson($csvMapFile);
?>