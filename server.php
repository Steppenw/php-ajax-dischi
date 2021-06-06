<?php

include './db/data.php';
//var_dump($albums);

include './utilities/pagination.php';

//$page = array_key_exists('page', $_GET) ? $_GET['page'] : 1;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

header('Content-Type: application/json');

echo json_encode(paginateArray($albums, $page));

?>