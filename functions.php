<?php

//sortArrayToIndividualItems($results);




function displayItemCards(array $results) {

    $allCardsHtml = '<div class="items-outer-container">';

    foreach ($results as $row) {
        $allCardsHtml .= '<div class="collection-item-container">';
        $allCardsHtml .= '<div class="item-title">';
        $allCardsHtml .= '<h3><span class="highlight">' . $row['dish_name'] . '</span></h3>';
        $allCardsHtml .= '</div>';
        $allCardsHtml .= '<div class="item-image">';
        $allCardsHtml .= '<img src="' . $row['image_url'] . '"' . 'alt="' . $row['alt_tag'] . '">';
        $allCardsHtml .= '</div>';
        $allCardsHtml .= '<div class="item-stats">';
        $allCardsHtml .= '<ul>';
        $allCardsHtml .= '<li>ease factor // ' . $row['ease_factor'] . '</li>';
        $allCardsHtml .= '<li>speed factor // ' . $row['speed_factor'] . '</li>';
        $allCardsHtml .= '<li>taste factor // ' . $row['taste_factor'] . '</li>';
        $allCardsHtml .= '<li>health factor // ' . $row['health_factor'] . '</li>';
        $allCardsHtml .= '</ul>';
        $allCardsHtml .= '</div>';
        $allCardsHtml .= '<div class="item-notes">';
        $allCardsHtml .= '<p><span class="highlight">' . 'notes from</span> ' . $row['food_creator'] . ':</p>';
        $allCardsHtml .= '<p>' . $row['notes'] . '</p>';
        $allCardsHtml .= '</div>';
        $allCardsHtml .= '</div>';
    }

    $allCardsHtml .= '</div>';
    return $allCardsHtml;

}

