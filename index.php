<?php include "login.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5 pt-5">
            <div class="row mx-auto" style="width: 600px;">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3>Login</h3>
                            <div class="text-danger" id="loginError"></div>
                        </div>
                        <div class="card-body">
                            <form method="post" id="loginForm">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary" id="loginSubmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js">
        
        
        </script>
    </body>
</html>