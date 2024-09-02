<?php
require "./db_connect.php";

// Select all vehicles from the car dealership
$sql = "SELECT * FROM vehicles ORDER BY year";

// Issue the query
$result = $connection->query($sql);

// Loop through all the rows returned by query and its images
$dir = "*.jpg";
$images = glob($dir);
$i = 0;
while ($row = $result->fetch_assoc()) {
    if (isset($images[$i])) {
        echo "<div class='car'>";
        echo "<img src='{$images[$i]}' class='car-image' alt='{$row['Make']} {$row['Model']}'>";
        echo "<p class='car-details car-name'>{$row['Year']} {$row['Make']} {$row['Model']}</p>";
        echo "<p class='car-details car-condition car-condition-text'>Condition: {$row['Condition']}</p>";
        echo "<p class='car-details car-price car-price-text'>Price: {$row['Price']}</p>";
        echo "</div>";
        $i++; 
    } else {
        break;
    }
}
?>