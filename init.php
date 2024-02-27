<?php

    require_once "./global.php";

    $form_sent = !empty($_GET);
    
    if ($form_sent) {
        $parking_filter = isset($_GET['parking']) ? true : false;
        $vote_filter = $_GET['vote'] ?? false;

        if ($parking_filter)
            $hotels = array_filter($hotels, fn($hotel) => $hotel["parking"]);
        if ($vote_filter)
            $hotels = array_filter($hotels, fn($hotel) => $hotel["vote"] >= $vote_filter);  
    } else {
        $parking_filter = "";
        $vote_filter = "";
        return $hotels;
    }

?>