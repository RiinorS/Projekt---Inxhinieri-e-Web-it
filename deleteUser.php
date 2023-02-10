<?php
include_once '../Projekt---Inxhinieri-e-Web-it/UserMapper.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userId);
    header("Location: ../phpfaza2/dashboard.php");
}
