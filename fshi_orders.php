<?php
if (isset($_POST['id_orders'])) {
  $id_orders = $_POST['id_orders'];

include "book-db.php";

$sql = "DELETE FROM orders WHERE id_orders = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
mysqli_stmt_bind_param($stmt, "i", $id_orders);
$result = mysqli_stmt_execute($stmt);
if ($result) {
    echo "Rreshti u fshi me sukses.";
  } else {
    echo "Ndodhi një gabim gjatë fshirjes së rreshtit: " . mysqli_error($conn);
  }
  
  mysqli_stmt_close($stmt);
} else {
    echo "Ndodhi një gabim gjatë përgatitjes së query: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    } else {
    echo "ID e order nuk është dhënë.";
    }

?>  