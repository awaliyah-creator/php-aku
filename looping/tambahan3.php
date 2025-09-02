<?php
$film = [
    ["judul" => "Pororo", "rating" => 9.8],
    ["judul" => "Rainbow Ruby", "rating" => 8.7],
    ["judul" => "Doraemon", "rating" => 8.6],
    ["judul" => "Larva", "rating" => 8.5],
    ["judul" => "Tayo", "rating" => 8.4],
];

echo "<h3>Film dengan rating 8 ke atas:</h3>";
foreach ($film as $f) {
    if ($f["rating"] >= 8) {
        echo "Judul: {$f['judul']} - Rating: {$f['rating']}<br>";
    }
}
?>