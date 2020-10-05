<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="modal fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="card-body text-center">
                        <h3>Add Product</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form method="post" id="createForm">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="createName" id="createName" class="form-control" placeholder="Enter Name" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="createDescription" id="createDesc" class="form-control" placeholder="Description" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="createQuantity" id="createQuantity" class="form-control" placeholder="Quantity" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="createPrice" id="createPrice" class="form-control" placeholder="Price" autocomplete="off">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light" id="createCancel">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="card-body text-center">
                        <h3>Update Product</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form method="post" id="updateForm">
                                <div class="form-group" style="display: none">
                                    <label>ID</label>
                                    <input type="text" name="updateSKU" id="updateSKU" class="form-control"  autocomplete="off" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="updateName" id="updateName" class="form-control"  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="updateDesc" id="updateDesc" class="form-control"  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" name="updateQuantity" id="updateQuantity" class="form-control"  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="updatePrice" id="updatePrice" class="form-control"  autocomplete="off">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light" id="updateCancel">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="card-body text-center">
                        <h3>Delete Product</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead" id="deleteText"></p>
                    <form method="post" id="deleteForm">
                        <div class="form-group" style="display: none">
                            <label>ID</label>
                            <input type="text" name="deleteSKU" id="deleteSKU" class="form-control"  autocomplete="off" readonly>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                        <button type="submit" class="btn btn-light" id="deleteCancel">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5 mb-3">
        <div class="row mx-auto mb-4">
            <div class="col text-center">
                <h2>Welcome to Product Page</h2>
                <div class="card mt-3 py-4 px-3">
                    <div class="card-body text-center">
                        <h3>Products</h3>
                    </div>
                    <form method="post">
                        <table id="productsTable" class="display">
                            <thead>
                                <tr>
                                    <th scope="col">SKU Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                    <br>
                    <form method="post">
                    <input type="button" class="btn btn-primary btn-lg mr-5" value="Create New" data-toggle="modal" data-target="#createModal"><!--</a>-->
                    <a href="welcome.php"><input type="button" class="btn btn-primary btn-lg" value="Home"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>
    <script>
        
        $(document).ready(function() {

            // load datatable
            loadDataTable();
            
        });
    </script>
</body>
</html>