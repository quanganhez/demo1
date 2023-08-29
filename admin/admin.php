<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <?php 
        require('inc/links.php')
    ?>
</head>
<body class="bg-light">
    
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-1">Admin Page</h3>
        <a href="./logout.php" class="btn btn-light shadow-none me-lg-3 me-2">Log Out</a>
    </div>

    <?php
        require('inc/script.php')
    ?>
</body>
</html>