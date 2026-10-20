<?php
/*
$i = 1; // Initialize counter
while ($i < 2) { // Check condition
    echo $i . "<br>"; // Execute code
    $i++; // Increment counter
}

for($i = 1; $i < 10; $i++) { // Initialize counter, check condition, increment counter
    echo $i . "<br>"; // Execute code
}
    */
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo $value . "<br>";
}
for($i = 0; $i < 4; $i++) {
    echo $colors[$i] . "<br>";
}
?>