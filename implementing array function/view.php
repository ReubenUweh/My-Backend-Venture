<?php
require("database.php");
$key = $_GET['artist'];

if (array_key_exists($key, $artists)) {
    $selectedArtist = $artists[$key];
} else {
    header("Location: 404.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View Profile</h1>
    <h3>Artist Name: <?php echo $selectedArtist['name']; ?></h3>
    <h5>Artist Songs: <?php echo count($selectedArtist['songs']); ?></h5>
    <ul>
        <?php foreach ($selectedArtist['songs'] as $song) : ?>
            <li><?php echo $song; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
