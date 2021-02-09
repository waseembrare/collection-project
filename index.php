<?php

//$db = new PDO('mysql:host=db; dbname=food-collection', 'root', 'password');
//$query = $db->prepare("SELECT * FROM `food`;");
//$query->setFetchMode(PDO::FETCH_ASSOC);
//$query->execute();
//
//$recipes = $query->fetchAll();

//'<ul>';
//foreach ($recipes as $fields) {
//    echo '<br>';
//    echo '<li>' . $row["id"] . ": " . $row["dish_name"]. ", " . $row["image_url"]. ", ". $row["alt_tag"]. ", ". $row["food_creator"]. ", ". $row["ease_factor"]. ", ". $row["speed_factor"]. ", ". $row["taste_factor"]. ", ". $row["health_factor"]. ", ". $row["notes"]. '</li>';
//</ul>
//}


?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
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
<?//
//    foreach($recipes as $field) {
//        print "<div class="collection-item-container">";
//    }
//    ?>

    <div class="items-outer-container">
        <div class="collection-item-container">
            <div class="item-title">
                <h3><span class="highlight">dish title</h3>
            </div>
            <div class="item-image">
                <img src="https://dummyimage.com/360x360/999999/fff.jpg">
            </div>
            <div class="item-stats">
                <ul>
                    <li>stat 1</li>
                    <li>stat 3</li>
                    <li>stat 4</li>
                    <li>stat 4</li>
                </ul>
            </div>
            <div class="item-notes">
                <p>This is a box for short notes section. Character limit 280 (size of tweet)</p>
            </div>
            <div class="item-icons">
                <div class="icon-container">
                    <img class="icon icon-animation" src="assets/delete-icon-v2.png">
                    <img class="icon icon-animation" src="assets/edit-icon-v2.png">
                </div>
            </div>
        </div>

        <div class="collection-item-container">
            <div class="item-title">
                <h3><span class="highlight">dish title</h3>
            </div>
            <div class="item-image">
                <img src="https://dummyimage.com/360x360/999999/fff.jpg">
            </div>
            <div class="item-stats">
                <ul>
                    <li>stat 1</li>
                    <li>stat 3</li>
                    <li>stat 4</li>
                    <li>stat 4</li>
                </ul>
            </div>
            <div class="item-notes">
                <p>This is a box for short notes section. Character limit 280 (size of tweet)</p>
            </div>
            <div class="item-icons">
                <div class="icon-container">
                    <img class="icon icon-animation" src="assets/delete-icon-v2.png">
                    <img class="icon icon-animation" src="assets/edit-icon-v2.png">
                </div>
            </div>
        </div>

        <div class="collection-item-container">
            <div class="item-title">
                <h3><span class="highlight">dish title</h3>
            </div>
            <div class="item-image">
                <img src="https://dummyimage.com/360x360/999999/fff.jpg">
            </div>
            <div class="item-stats">
                <ul>
                    <li>stat 1</li>
                    <li>stat 3</li>
                    <li>stat 4</li>
                    <li>stat 4</li>
                </ul>
            </div>
            <div class="item-notes">
                <p>This is a box for short notes section. Character limit 280 (size of tweet)</p>
            </div>
            <div class="item-icons">
                <div class="icon-container">
                    <img class="icon icon-animation" src="assets/delete-icon-v2.png">
                    <img class="icon icon-animation" src="assets/edit-icon-v2.png">
                </div>
            </div>
        </div>

    </div>
    <div class="add-item-button">
        <img class="action-icon icon-animation" src="assets/plus-icon-v2.png">
    </div>
    <footer>
        <h2><span class="highlight">keep cooking bruv...</span> &#129382</h2>
    </footer>
</body>
</html>

