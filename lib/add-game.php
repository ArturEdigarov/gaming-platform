<?php
$image = trim(filter_var($_POST['image'], FILTER_SANITIZE_SPECIAL_CHARS));
$followers = trim(filter_var($_POST['followers'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($image) < 2) {
    echo "Image name must be at least 2 characters long.";
    exit();
}
if (strlen($followers) < 0) {
    echo "Followers must be at least 0.";
    exit();
}

// DB
require 'db.php';   

$sql = 'INSERT INTO trending(image, followers) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$image, $followers]);      

header('Location: /user.php');
?>