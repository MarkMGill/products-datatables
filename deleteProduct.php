<?php include 'db.php'; ?>
<?php 

    global $connection;

    if (isset($_POST['deleteSKU'])) {
        $SKU_Code = $_POST['deleteSKU'];

        $query = "DELETE FROM products ";
        $query .= "WHERE SKU_Code = $SKU_Code ";
   
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die(json_encode(['status' => false ]));
        } else {
            die(json_encode(['status' => true, 'SKU' => $SKU_Code ]));
        }
       
    }

?>