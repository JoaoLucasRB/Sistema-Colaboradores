<?php
if (!isset($status)) {
    $status = 200;
}

header('Content-Type: application/json', true, $status);

$jsonResult = new stdClass;
$jsonResult->data = null;

if (isset($dataSource)) {
    $jsonResult->data = $dataSource;
}

echo json_encode($jsonResult);