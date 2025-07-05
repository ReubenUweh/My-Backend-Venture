<!-- <pre> -->
<?php
require "connection.php";

$statement  = "SELECT * FROM products";
$result = $conn->query($statement);
// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Database</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <?php if ($result->num_rows > 0): ?>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Expiry Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo ($row['id'] ?? 'N/A') ?></td>
                            <td><?php echo ($row['product_name'] ?? 'N/A') ?></td>
                            <td><?php echo ($row['productPrice'] ?? 'N/A') ?></td>
                            <td><?php echo ($row['productExpiryDate'] ?? 'N/A') ?></td>
                            <td>
                                <form action="process.php" method="get">
                                    <button type="delete" name="delete" class="btn btn-danger btn-sm">
                                        <a href="process.php?delete=<?= $row['id'] ?>" class="text-white">Delete</a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="container">
            <p class="text-danger">No products found.</p>
        </div>
    <?php endif; ?>
</body>

</html>