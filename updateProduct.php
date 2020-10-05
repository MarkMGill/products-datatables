<?php include 'db.php'; ?>
<?php 

    global $connection;

    if (isset($_POST['updateName']) && isset($_POST['updateDesc']) && isset($_POST['updateQuantity']) && isset($_POST['updatePrice'])) {
        $SKU_Code = $_POST['updateSKU'];
        $name = $_POST['updateName'];
        $description = $_POST['updateDesc'];
        $quantity = $_POST['updateQuantity'];
        $price = $_POST['updatePrice'];

        $query = "UPDATE products SET ";
        $query .= "name = '$name', ";
        $query .= "description = '$description', ";
        $query .= "quantity = $quantity, ";
        $query .= "price = $price ";
        $query .= "WHERE SKU_Code = $SKU_Code ";
   
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die(json_encode(['status' => false ]));
        } else {
            die(json_encode(['status' => true, 'SKU' => $SKU_Code, 'name' => $name, 'description' => $description, 'quantity' => $quantity, 'price' => $price ]));
        }
       
    }

?>