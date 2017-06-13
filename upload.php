<?php

error_reporting(0);

$request_body = @file_get_contents('php://input');

$decodeResult = gzdecode($request_body);
if ($decodeResult == false) {
    echo json_encode(array("error" => "the data is not a standard gzip data"));
} else {
	echo  json_encode($decodeResult);
}

?>