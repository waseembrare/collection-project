<?php

$db = new PDO('mysql:host=db; dbname=food-collection', 'root', 'password');
$query = $db->prepare("SELECT * FROM `food`;");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

//var_dump($results);
//'<ul>';
//foreach ($results as $row) {
//    echo '<br>';
//    echo '<li>' . $row["id"] . ": " . $row["dish_name"]. ", " . $row["image_url"]. ", ". $row["alt_tag"]. ", ". $row["food_creator"]. ", ". $row["ease_factor"]. ", ". $row["speed_factor"]. ", ". $row["taste_factor"]. ", ". $row["health_factor"]. ", ". $row["notes"]. '</li>';
//    '</ul>';
//}

//?>
<!---->
<?// while ($row = $query->fetch()) { ?>
<!--    <div class="collection_item ">-->
<!--        <div class="stats">-->
<!--                    <span class="image_wrapper">-->
<!--                        <img src="--><?//=$row['image']?><!--">-->
<!--                    </span>-->
<!--            <h3>--><?//=$row['name']?><!--</h3>-->
<!--            <ul>-->
<!--                <li class="origin">Origin: --><?//=$row['origin']?><!--</li>-->
<!--                <li class="family">Family: --><?//=$row['family']?><!--</li>-->
<!--                <li class="preservation_type">--><?//=$row['method']?><!--</li>-->
<!--                <li class="quality">Rating: --><?//=$row['rating']?><!--/10</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<?// } ?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cheffin' it up bruv</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <nav>
        <div class="header">
            <h1><span class="highlight">cheffin' it up bruv</span> &#127859</h1>
        </div>
    </nav>
    <div class="site-intro">
        <h2>add your own plates using the &#x2795 icon or just check out other plates for some tasty inspiration.</h2>
    </div>
    <div class="items-outer-container">

    <? while ($row = $query->fetch()) { ?>
        <div class="collection-item-container">
            <div class="item-title">
                <h3><span class="highlight"><?=$row['dish_name']?></span></h3>
            </div>
            <div class="item-image">
                <img src="<?=$row['image_url']?>">
            </div>
            <div class="item-stats">
                <ul>
                    <li>ease factor: <?=$row['ease_factor']?></li>
                    <li>speed factor: <?=$row['speed_factor']?></li>
                    <li>taste factor: <?=$row['taste_factor']?></li>
                    <li>health factor: <?=$row['health_factor']?></li>
                </ul>
            </div>
            <div class="item-notes">
                <p><span class="highlight">notes from <?=$row['food_creator']?>:</span></p>
                <p><?=$row['notes']?></p>
            </div>
            <div class="item-icons">
                <div class="icon-container">
                    <img class="icon icon-animation" src="assets/delete-icon-v2.png">
                    <img class="icon icon-animation" src="assets/edit-icon-v2.png">
                </div>
            </div>
        </div>
    <? } ?>

    </div>

    <div class="add-item-button">
        <img class="action-icon icon-animation" src="assets/plus-icon-v2.png">
    </div>
    <footer>
        <h2><span class="highlight">keep cooking bruv...</span> &#129382</h2>
    </footer>
</body>
</html>

<?php

function deleteItem() {

}
