<?php 
require 'Kriptografi.php';

$type = $_POST['typeInput'];
$data = $_POST['input_user'];

if ($type == 'enkripsi') {
    $result = enkripsi($data);
    $result = enkripsi($result);
    echo json_encode(array('responseCode' => 200, 'responseMessage' => 'Success', 'data' => $result));
    exit;
} elseif ($type == 'dekripsi') {
    $result = dekripsi($data);
    echo json_encode(array('responseCode' => 200, 'responseMessage' => 'Success', 'data' => $result));
    exit;
}

?>