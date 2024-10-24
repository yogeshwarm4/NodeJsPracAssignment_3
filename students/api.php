<?php
header("Content-Type: application/json");

$data = [
    ["id" => 1, "name" => "Abhi", "email" => "abhi@example.com"],
    ["id" => 2, "name" => "Varun", "email" => "varun@example.com"]
];

echo json_encode($data);
?>