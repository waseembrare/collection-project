<?php

$db = new PDO('mysql:host=db; dbname=food-collection', 'root', 'password');
$query = $db->prepare("SELECT * FROM `food`;");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

$results = $query->fetchAll();

'<ul>';
foreach ($results as $row) {
    echo '<br>';
    echo '<li>' . $row["id"] . ": " . $row["dish_name"]. ", " . $row["image_url"]. ", ". $row["alt_tag"]. ", ". $row["food_creator"]. ", ". $row["ease_factor"]. ", ". $row["speed_factor"]. ", ". $row["taste_factor"]. ", ". $row["health_factor"]. ", ". $row["notes"]. '</li>';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  </body>
</html>
