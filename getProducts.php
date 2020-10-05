<?php include 'db.php'; ?>
<?php
    
    global $connection;

    $result = mysqli_query($connection, "SELECT * FROM products");

    $rows = array();

    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);



    /*if(isset($_POST['page'])) {
        $page = $_POST['page'];
    } else {
        $page = '';
    }
    
    $perPage = 25;

    if($page == '' || $page == '1') {
        $page_1 = 0;
    } else {
        $page_1 = ($page * $perPage) - $perPage;
    }*/
    
    //$query = "SELECT * FROM products LIMIT $page_1, $perPage";
    /*
    $query = "SELECT * FROM products";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed!' . mysqli_error($connection));
    }

    $table = '';
    while($row = mysqli_fetch_array($result)) {
        global $table;
        $table .= '<tr id="'.$row['SKU_Code'].'">
                <th scope="row">' . $row['SKU_Code'] . '</th>
                    <td class="productName">' . $row['Name'] . '</td>
                    <td class="productDesc">' . $row['Description'] . '</td>
                    <td class="productQuantity">' . $row['Quantity'] . '</td>
                    <td class="productPrice">' . $row['Price'] . '</td>
                    <td><input type="button" class="btn btn-primary btn-lg updateBtn" value="Edit" data-toggle="modal" data-target="#updateModal"></td>
                    <td><input type="button" class="btn btn-primary btn-lg deleteBtn" value="Delete" data-toggle="modal" data-target="#deleteModal"></td>
                </tr>';
    }

    /*$post_query_count = "SELECT * FROM products";
    $find_count = mysqli_query($connection, $post_query_count);
    $count = mysqli_num_rows($find_count);

    $count = ceil($count / $perPage);

    $links = '';
    for($i = 1; $i <= $count; $i++) {
        $links .= '<li class="page-item pagination-link" id='.$i.'><a class="page-link" href="products_read.php?page='.$i.'">'.$i.'</a></li>';
    }*/

    //die(json_encode([ 'table' => $table, 'links' => $links ]));
    //die(json_encode([ 'table' => $table ]));
    
?>

