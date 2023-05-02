<?php
  $conn = mysqli_connect("localhost", "root", "", "llogaritja_kredive");

  if (!$conn) {
    die("Lidhja me databazën ka deshtuar: " . mysqli_connect_error());
  }

  if(isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $idPerson = mysqli_real_escape_string($conn, $_POST['id_person']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $card = mysqli_real_escape_string($conn, $_POST['card']);

    // Kërkoni çmimin nga tabela orders duke përdorur një parameter
    $stmt = $conn->prepare("SELECT total_price FROM orders WHERE user_name = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
      die("Nuk mund të gjeni çmimin e kërkuar.");
    }

    $total_price = $row['total_price'];

    // Përdorni prepared statements për të shtuar klientin dhe për të bërë transaksionin
    $stmt = $conn->prepare("INSERT INTO kliente (emri, mbiemri, adresa, email, numer_identifikimi, numer_telefoni, numer_llogarie) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstname, $lastname, $address, $email, $idPerson, $phone, $card);
    $stmt->execute();

    $stmt = $conn->prepare("SELECT transfero_shumen(?, 150400100828394, ?) as total_price");
    $stmt->bind_param("ss", $card, $total_price);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['total_price'] > '1') {
      echo "The transaction was successful.";
    } else {
      echo "The transaction failed. Please try again.";
    }

    $stmt->close();
    $conn->close();
  }
?>
