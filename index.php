<?php

require_once 'db.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cheffin' it up bruv</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fo2nts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
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
    <?
        echo displayItemCards($results);
    ?>

    <div class="add-item-button">
        <img alt="add-button" class="action-icon icon-animation" src="assets/plus-icon-v2.png">
    </div>
    <footer>
        <h2><span class="highlight">keep cooking bruv...</span> &#129382</h2>
    </footer>
</body>
</html>

<?php





//function displayItemCards(array $results) {
//
//    $allCardsHtml = '<div class="items-outer-container">';
//
//    foreach ($results as $row) {
//        $allCardsHtml .= '<div class="collection-item-container">';
//        $allCardsHtml .= '<div class="item-title">';
//        $allCardsHtml .= '<h3><span class="highlight"' . $row['dish_name'] . '</span></h3>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '<div class="item-image">';
//        $allCardsHtml .= '<img src="' . $row['image_url'] . '"' . 'alt="' . $row['alt_tag'] . '">';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '<div class="item-stats">';
//        $allCardsHtml .= '<ul>';
//        $allCardsHtml .= '<li>ease factor // ' . $row['ease_factor'] . '</li>';
//        $allCardsHtml .= '<li>speed factor // ' . $row['speed_factor'] . '</li>';
//        $allCardsHtml .= '<li>taste factor // ' . $row['taste_factor'] . '</li>';
//        $allCardsHtml .= '<li>health factor // ' . $row['health_factor'] . '</li>';
//        $allCardsHtml .= '</ul>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '<div class="item-notes">';
//        $allCardsHtml .= '<p><span class="highlight">' . 'notes from</span>' . $row['food_creator'] . ':</p>';
//        $allCardsHtml .= '<p>' . $row['notes'] . '</p>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '<div class="item-icons">';
//        $allCardsHtml .= '<div class="icon-container">';
//        $allCardsHtml .= '<div>';
//        $allCardsHtml .= '<form method="post">';
//        $allCardsHtml .= '<button name="delete" value="delete">' . '<img alt="delete-button" class="icon icon-animation' . $row['id'] . '" src="assets/delete-icon-v2.png"></button>';
//        $allCardsHtml .= '</form>';
//        $allCardsHtml .= '<form method="post">';
//        $allCardsHtml .= '<button name="delete" value="delete"><img alt="edit-button" class="icon icon-animation" src="assets/edit-icon-v2.png"></button>';
//        $allCardsHtml .= '</form>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '</div>';
//        $allCardsHtml .= '</div>';
//    }
//
//    $allCardsHtml .= '</div>';
//    return $allCardsHtml;
//
//}
//
//
//function sortArrayToIndividualItems (array $results) {
//    foreach ($results as $row) {
//        $row =  ['id' => $row["id"],
//            'dish_name' => $row['dish_name'],
//            'image_url' => $row['image_url'],
//            'alt_tag' => $row['alt_tag'],
//            'food_creator' => $row['food_creator'],
//            'ease_factor' => $row['ease_factor'],
//            'speed_factor' => $row['speed_factor'],
//            'taste_factor' => $row['taste_factor'],
//            'health_factor' => $row['health_factor'],
//            'notes' => $row['notes'],
//            'deleted' => $row['deleted']];
//        return $row;
//    }
//}


//                    if(isset($_POST['delete'])) {
//                    $_POST['delete'] = 1;
//                    $deleteQuery = $db->prepare("INSERT INTO `food` (`deleted`) VALUES (:delete)");
//                    $deleteQuery->bindParam(':delete', $_POST['delete'], PDO::PARAM_INT );
//                    $deleteQuery->execute();
//                    }


//function deleteItem() {
//    if (!empty($_POST["delete"])) {
//        "INSERT INTO `deleted` VALUES `1`;";
//    }
//}
