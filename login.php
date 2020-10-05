<?php
    session_start();
    $username = "username";
    $password = "password";
    $msg = '';
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['username'] = $username;
            die(json_encode(['status' => true, 'redirect' => 'welcome.php']));
        } else {
            die(json_encode(['status' => false, 'redirect' => '']));
        }
    }

?>