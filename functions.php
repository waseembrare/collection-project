<?php

$db = new PDO('mysql:host=db; dbname=food-collection', 'root', 'password');
$query = $db->prepare("SELECT * FROM `food`;");
$query->setFetchMode(PDO::FETCH_ASSOC);
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$query = $db->prepare("SELECT * FROM `food`;");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$results = $query->fetchAll();
sortArrayToIndividualItems($results);

function sortArrayToIndividualItems (array $results) {
    foreach ($results as $row) {
        $row =  ['id' => $row['id'],
            'dish_name' => $row['dish_name'],
            'image_url' => $row['image_url'],
            'alt_tag' => $row['alt_tag'],
            'food_creator' => $row['food_creator'],
            'ease_factor' => $row['ease_factor'],
            'speed_factor' => $row['speed_factor'],
            'taste_factor' => $row['taste_factor'],
            'health_factor' => $row['health_factor'],
            'notes' => $row['notes'],
            'deleted' => $row['deleted']];
        return $row;
    }
}

array("id"=>"1", "dish_name"=>"Cinnamon buns", "image_url"=>"assets/cinnamon-buns.jpg", "alt_tag"=>"cinnamon buns", "food_creator"=>"Waseem", "ease_factor"=>"5", "speed_factor"=>"4", "taste_factor"=>"9", "health_factor"=>"4", "notes"=>"Perfect with a coffee, any time of day! Amp it up with apple and pecan.", "deleted"=>"NULL");
array("id"=>"2", "dish_name"=>"Cinnamon buns", "image_url"=>"assets/cinnamon-buns.jpg", "alt_tag"=>"cinnamon buns", "food_creator"=>"Waseem", "ease_factor"=>"5", "speed_factor"=>"4", "taste_factor"=>"9", "health_factor"=>"4", "notes"=>"Perfect with a coffee, any time of day! Amp it up with apple and pecan.", "deleted"=>"NULL");




