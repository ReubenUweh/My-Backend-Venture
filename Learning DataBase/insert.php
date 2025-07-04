<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products add</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h2 class="text-info">ADD NEW PRODUCTS</h2>
        <form action="process.php" method="post">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name" placeholder="Enter product name" required>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="text" class="form-control" name="productPrice" placeholder="Enter product name" required>
            </div>
            <div class="mb-3">
                <label for="Expiry Date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" name="productExpiryDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</body>
</html>