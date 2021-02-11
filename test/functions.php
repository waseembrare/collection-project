<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Index extends TestCase {

    public function testSortArrayToIndividualItems() {
        $mockData = array("id"=>"1", "dish_name"=>"Cinnamon buns", "image_url"=>"assets/cinnamon-buns.jpg", "alt_tag"=>"cinnamon buns", "food_creator"=>"Waseem", "ease_factor"=>"5", "speed_factor"=>"4", "taste_factor"=>"9", "health_factor"=>"4", "notes"=>"Perfect with a coffee, any time of day! Amp it up with apple and pecan.", "deleted"=>"NULL");

        $expectedColumns = ['id', 'dish_name', 'image_url', 'alt_tag', 'food_creator', 'ease_factor', 'speed_factor', 'taste_factor', 'health_factor', 'notes', 'deleted'];
        $actualColumns = array_keys(sortArrayToIndividualItems($mockData));
        $this->assertEquals($expectedColumns, $actualColumns);
    }
}









//$mockData = (array("id"=>"1", "dish_name"=>"Cinnamon buns", "image_url"=>"assets/cinnamon-buns.jpg", "alt_tag"=>"cinnamon buns", "food_creator"=>"Waseem", "ease_factor"=>"5", "speed_factor"=>"4", "taste_factor"=>"9", "health_factor"=>"4", "notes"=>"Perfect with a coffee, any time of day! Amp it up with apple and pecan.", "deleted"=>"NULL"),
//array("id"=>"2", "dish_name"=>"Cinnamon buns", "image_url"=>"assets/cinnamon-buns.jpg", "alt_tag"=>"cinnamon buns", "food_creator"=>"Waseem", "ease_factor"=>"5", "speed_factor"=>"4", "taste_factor"=>"9", "health_factor"=>"4", "notes"=>"Perfect with a coffee, any time of day! Amp it up with apple and pecan.", "deleted"=>"NULL")
//);


