<?php
echo '<pre>';
var_dump($_POST);
echo '<pre>';

$connection= require_once './connection.php';
$connection-> addNote($_POST);

header('Location: index.php');