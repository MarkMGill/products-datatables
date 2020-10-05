<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="row mx-auto" style="width: 600px;">
            <div class="col text-center">
                <?php
                    if(isset($_SESSION['username'])) {
                        echo "<h1>Welcome " . $_SESSION['username'] . "</h1>
                        <h3><a href='products_read.php'>Products</a></h3>
                        <br><br>
                        <a href='logout.php'><input type=button class='btn btn-lg btn-primary' value=Logout name=logout></a>";
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>