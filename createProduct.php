<?php include 'db.php'; ?>
<?php 

    global $connection;

    if (isset($_POST['createName']) && isset($_POST['createDescription']) && isset($_POST['createQuantity']) && isset($_POST['createPrice'])) {
        $name = $_POST['createName'];
        $description = $_POST['createDescription'];
        $quantity = $_POST['createQuantity'];
        $price = $_POST['createPrice'];

        $query = "INSERT INTO products(name, description, quantity, price) ";
        $query .= "VALUES ('$name', '$description', '$quantity', '$price')";

        $result = mysqli_query($connection, $query);

        $newSKUQuery = "SELECT SKU_Code FROM PRODUCTS ORDER BY SKU_Code DESC LIMIT 1"; 

        $newSKUConnection = mysqli_query($connection, $newSKUQuery);

        $SKU_Code = mysqli_fetch_row($newSKUConnection);

        if(!$result || !$SKU_Code) {
            die(json_encode(['status' => false ]));
        } else {
            die(json_encode(['status' => true, 'name' => $name, 'description' => $description, 'quantity' => $quantity, 'price' => $price, 'SKU_Code' => $SKU_Code ]));
        }
    }

?>