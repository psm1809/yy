<?php
// Example PHP script (getData.php)

// Mock data (you can replace this with database results)
$data = array(
    array("id" => 1, "name" => "John Doe", "email" => "john@example.com"),
    array("id" => 2, "name" => "Jane Smith", "email" => "jane@example.com")
);

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
