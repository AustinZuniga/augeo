<?php

if(session_status() == PHP_SESSION_NONE){
session_start();
if(!isset($_SESSION['account_id'])){
    header("Location: http://localhost/augeo/login");
}

elseif(isset($_GET['logout'])) {
    header("Location: http://localhost/augeo/login");
    unset($_SESSION['account_id']);
    session_destroy();
}
elseif (isset($_SESSION['account_id'])) {
    $account_id_session = $_SESSION['account_id'];
}
}
else{


if(!isset($_SESSION['account_id'])){
    header("Location: http://localhost/augeo/login");
}

elseif(isset($_GET['logout'])) {
    header("Location: http://localhost/augeo/login");
    unset($_SESSION['account_id']);
    session_destroy();
}
elseif (isset($_SESSION['account_id'])) {
    $account_id_session = $_SESSION['account_id'];
}
}


?>