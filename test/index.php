<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Index extends TestCase {


    public function testSortArrayToIndividualItems($results) {
        sortArrayToIndividualItems();
        $firstRow = $results[0];

        // most basic test - check whether the result is an array
//        $this->assertTrue(is_array($resultFromFunction));
        // format of the result of fetchAll() is [ ['id' => 1, 'name' = 'Jonny'],[ 'id'=> 2, 'name' => 'Ronny'],[...],[...] ]
        // need to get the first element
        // want to check that the columns are correct
        $expectedColumns = ['id', 'dish_name', 'image_url', 'alt_tag', 'food_creator', 'ease_factor', 'speed_factor', 'taste_factor', 'health_factor', 'notes', 'deleted'];
        $actualColumns = array_keys($firstRow);
        $this->assertEquals($expectedColumns, $actualColumns);
    }

}


