
<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "LLOGARITJA_KREDIVE"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])) {
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $idPerson = mysqli_real_escape_string($conn, $_POST['id_person']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $card = mysqli_real_escape_string($conn, $_POST['card']);

  // Kërkoni total_price të gjithë user_name të njëjta nga tabela orders duke përdorur një parameter
  $stmt = $conn->prepare("SELECT SUM(price_total) as total_price FROM orders WHERE user_name = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  if (!$row) {
    die("Unable to find the requested price.");
  }

  if ($row['total_price'] === NULL) {
    echo "<script>alert('No user was found with this name.');</script>";
    exit();
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
    $stmt = $conn->prepare("DELETE FROM orders WHERE user_name = ?");
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
    echo "<tr style = 'margin-left: 250px;'><th>Transaction Details</th><td></td></tr>";
    echo "<tr><th>Transaction Number</th><td>".$card."</td></tr>";
    echo "<tr><th>Originating Account</th><td>".$card."</td></tr>";
    echo "<tr><th>Savings Account</th><td>150400100828394</td></tr>";
    echo "<tr><th>Transferred Amount</th><td>".$total_price." ".$row['monedha']."</td></tr>";
    echo "<tr><th>The account balance after the transaction</th><td>".$row['balanca']." ".$row['monedha']."</td></tr>";
    echo "<button onclick='downloadHTML()' style = 'margin-top:40px;'>Download</button>";
    echo "</table>";
    } else {
    echo "The transaction failed. Please try again.";
    }

    
    $stmt->close();
    $conn->close();
    }
    ?>
    <script>
  function downloadHTML() {
  const element = document.createElement('a');
  const mimeType = 'text/html';
  const fileName = 'Transaction';

  element.href = URL.createObjectURL(new Blob([document.documentElement.outerHTML], {type: mimeType}));
  element.download = fileName;

  document.body.appendChild(element);
  element.click();
  document.body.removeChild(element);
}

</script>