<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cardNumber = $_POST['cardNumber'];
  $expMonth = $_POST['expMonth'];
  $expYear = $_POST['expYear'];
  $cvv = $_POST['cvv'];
  

  if(empty($name) || empty($email) || empty($cardNumber) || empty($expMonth) || empty($expYear) || empty($cvv)) {
    
    echo "<script>alert('Please fill in all fields.');</script>";
  } else {
    echo "<script>alert('Payment processed successfully!');</script>";
  }
}
?>