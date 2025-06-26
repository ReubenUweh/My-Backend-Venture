<?php
require("stateDatabase.php");

$key = $_GET['state'];

$selectedState = null;

foreach ($states as $state) {
    if ($state['state'] === $key) {
        $selectedState = $state;
        break; // Found it, stop looping
    }
}

// After loop, check if found
if (!$selectedState) {
    header("Location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36 States and Capital</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 mt-5">
                <h1 class="fw-bold text-center">State and Capital</h2>
                    <div>
                        <h2><strong>State & Capital:</strong> <?php echo $selectedState['state']; ?></h2>
                        <p><strong>Governor:</strong> <?php echo $selectedState['governor']; ?></p>
                        <p><strong>Population:</strong> <?php echo $selectedState['population']; ?></p>
                        <p><strong>Slogan:</strong> <?php echo $selectedState['slogan']; ?></p>
                    </div>
            </div>
            <div class="col-12 col-md-5 mt-5">
                <div class="mb-3">
                    <input type="email" class="form-control" id="input1" aria-describedby="emailHelp" placeholder="Search for minerals.. ">
                </div>
                <ol>
                    <?php
                    foreach ($selectedState['mineral_resources'] as $mineral) {
                        echo "<li>" . $mineral . "</li>";
                    }
                    ?>
                </ol>
            </div>
        </div>
    </div>
    </div>
    <script>
        document.getElementById("input1").addEventListener("input", function() {
            const searchTerm = this.value.toLowerCase();
            const minerals = document.querySelectorAll("ol li");
            minerals.forEach(function(mineral) {
                if (mineral.textContent.toLowerCase().includes(searchTerm)) {
                    mineral.style.display = "";
                } else {
                    mineral.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>