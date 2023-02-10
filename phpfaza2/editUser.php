<?php

include_once '../phpfaza2/UserMapper.php';
include_once '../phpfaza2/simpleUser.php';

if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $simpleUser = new SimpleUser( $username, $userlastname ,1, "");
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:  ../phpfaza2/dashboard.php");
}
