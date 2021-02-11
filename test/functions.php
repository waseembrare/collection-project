<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testDisplayItemCards()
    {
        $mockData = [
            [
                "id" => "1",
                "dish_name" => "Cinnamon buns",
                "image_url" => "assets/cinnamon-buns.jpg",
                "alt_tag" => "cinnamon buns",
                "food_creator" => "Waseem",
                "ease_factor" => "5",
                "speed_factor" => "4",
                "taste_factor" => "9",
                "health_factor" => "4",
                "notes" => "Perfect with a coffee, any time of day! Amp it up with apple and pecan.",
                "deleted" => "NULL"
            ],
            [
                "id" => "2",
                "dish_name" => "Falafel",
                "image_url" => "assets/falafel.jpg",
                "alt_tag" => "falafel",
                "food_creator" => "Waseem",
                "ease_factor" => "2",
                "speed_factor" => "2",
                "taste_factor" => "2",
                "health_factor" => "2",
                "notes" => "Perfect with a pitta.",
                "deleted" => "NULL"
            ],
        ];

        $actualColumns = displayItemCards($mockData);
        $expectedOutput = '<div class="items-outer-container"><div class="collection-item-container"><div class="item-title"><h3><span class="highlight">Cinnamon buns</span></h3></div><div class="item-image"><img src="assets/cinnamon-buns.jpg"alt="cinnamon buns"></div><div class="item-stats"><ul><li>ease factor // 5</li><li>speed factor // 4</li><li>taste factor // 9</li><li>health factor // 4</li></ul></div><div class="item-notes"><p><span class="highlight">notes from</span> Waseem:</p><p>Perfect with a coffee, any time of day! Amp it up with apple and pecan.</p></div></div><div class="collection-item-container"><div class="item-title"><h3><span class="highlight">Falafel</span></h3></div><div class="item-image"><img src="assets/falafel.jpg"alt="falafel"></div><div class="item-stats"><ul><li>ease factor // 2</li><li>speed factor // 2</li><li>taste factor // 2</li><li>health factor // 2</li></ul></div><div class="item-notes"><p><span class="highlight">notes from</span> Waseem:</p><p>Perfect with a pitta.</p></div></div></div>';
        $this->assertEquals($expectedOutput, $actualColumns);
    }

    public function testMalformedDisplayItemCards() {
        $input = 2;
        //expecting array so should be malformed (int)
        $this->expectException(TypeError::class);
        displayItemCards($input);
    }
}









