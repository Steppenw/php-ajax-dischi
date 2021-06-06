<?php

function paginateArray($array, $requestedPage) {

  $itemsPerPage = 10;

  $currentPage = (int) $requestedPage;
  if ($currentPage < 1) {
    $currentPage = 1;
  }

  $totalPages = ceil(count($array) / $itemsPerPage);

  $prevPage = $currentPage -1;
  if ($prevPage < 1) {
    $prevPage = false;
  }

  $nextPage = $currentPage + 1;
  if ($nextPage > $totalPages) {
    $nextPage = false;
  }

  $offset = $itemsPerPage * ($currentPage - 1);

  $paginatedData = array_slice($array, $offset, $itemsPerPage);

  return [
    'totalItems' => count($array),
    'totalPages' => $totalPages,
    'itemsPerPage' => $itemsPerPage,
    'currentPage' => $currentPage,
    'previousPage' => $prevPage,
    'nextPage' => $nextPage,
    'results' => $paginatedData
  ];
  
}

?>