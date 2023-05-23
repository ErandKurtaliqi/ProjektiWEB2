<?php
header("Content-Type: application/json");

// Merre ID e rreshtit për tu fshirë
$data = json_decode(file_get_contents("php://input"), true);
$id_booking = $data["id_booking"];

// Lidhu me databazën
$conn = new mysqli("localhost", "root", "", "travel");

// Kontrollo lidhjen
if ($conn->connect_error) {
    // Njofto klientin për gabimin në lidhjen me bazën e të dhënave
    http_response_code(500);
    die(json_encode(array("message" => "Lidhja dështoi: " . $conn->connect_error)));
}

// Fshi rreshtin me ID e dhënë
$sql = "DELETE FROM booking WHERE id_booking = '$id_booking'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_booking);
$result = $stmt->execute();

if ($result) {
    // Njofto klientin se rreshti është fshirë me sukses
    http_response_code(200);
    echo json_encode(array("message" => "Rreshti u fshi me sukses."));
} else {
     // Njofto klientin se ka ndodhur një gabim gjatë fshirjes së rreshtit
    http_response_code(500);
    echo json_encode(array("message" => "Diçka shkoi keq gjatë fshirjes së rreshtit."));
}

$stmt->close();
$conn->close();
?>
