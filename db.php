<?php

$db = new PDO('mysql:host=db; dbname=food-collection', 'root', 'password');
$query = $db->prepare("SELECT * FROM `food`;");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$results = $query->fetchAll();
