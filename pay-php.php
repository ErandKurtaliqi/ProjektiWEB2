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
    $stmt = $conn->prepare("DELETE FROM orders WHERE user_name = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Display account balance and transaction details in a table
    $stmt = $conn->prepare("SELECT * FROM llogaritje_bankare WHERE id_klient = ?");
    $stmt->bind_param("i", $idPerson);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    echo "<h2>Transaction Successful</h2>";
    echo "<table>";
    echo "<tr><th>Transaction Details</th><td></td></tr>";
    echo "<tr><th>Numer Transaksioni</th><td>".$card."</td></tr>";
    echo "<tr><th>Llogaria Prejardhese</th><td>".$card."</td></tr>";
    echo "<tr><th>Llogaria Arritjes</th><td>150400100828394</td></tr>";
    echo "<tr><th>Shuma e Transferuar</th><td>".$total_price." ".$row['monedha']."</td></tr>";
    echo "<tr><th>The account balance after the transaction</th><td>".$row['balanca']." ".$row['monedha']."</td></tr>";
    echo "</table>";} else {
      echo "The transaction failed. Please try again.";
      }
      
      $stmt->close();
      $conn->close();
      }
      ?>
      