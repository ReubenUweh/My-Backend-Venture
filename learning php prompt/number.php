<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
    </style>
</head>

<body>
    <div>
    <ul>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 == 0) {
                echo "<li>";
                echo $i;
                echo "</li>";
            }
        }
        ?>
    </ul>
  <ul>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 == 1) {
                echo "<li>";
                echo $i;
                echo "</li>";
            }
        }
        ?>
  </ul>
  </div>
</body>

</html>