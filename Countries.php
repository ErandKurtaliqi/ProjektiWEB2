<?php 

$places[] = "Agra & INDIA";
$places[] = "New York & USA";
$places[] = "London & UK";
$places[] = "Paris & FRANCE";
$places[] = "Cairo & EGYPT";
$places[] = "Berlin & GERMANY";
$places[] = "Istanbul & TURKEY";
$places[] = "Rome & ITALY";
$places[] = "Tokyo & JAPAN";
$places[] = "Lisbon & PORTUGAL";
$places[] = "Barcelona & SPAIN";
$places[] = "Honolulu & HAWAII";
$places[] = "Venice & ITALY";
$places[] = "Singapore & SINGAPORE";
$places[] = "Toronto & CANADA";
$places[] = "Sydney & AUSTRALIA";
$places[] = "Lima & PERU";
$places[] = "Beijing & CHINA";


// Get Query String

$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    foreach($places as $Places){
        if(stristr($q, substr($Places, 0, $len))){
            if($suggestion === ""){
                $suggestion = $Places;
            }else{
                $suggestion .= ", $Places";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>