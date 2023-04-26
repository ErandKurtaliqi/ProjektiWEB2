<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addOrders.css">
    <link rel="stylesheet" href="table.css">
    <title>Add Orders</title>
</head>
<body>
<div class="form-container">
<div class="form-inner">
<form action="addOrders-php.php" method="post" class="login"><br><br>
<div class="field">
    <input type="number" placeholder="Shto id e orders" id="id_orders" name="id_orders"><br><br>
</div>
    <div class="field">
    <input type="number" placeholder="Shto id e booking" id="id_booking" name="id_booking" ><br><br>
    </div>
    <div class="field">
    <input type="number" placeholder="Shto id e perdoruesit" id="id_user_reg" name="id_user_reg"><br><br>
    </div>
    <div class="field">
    <input type="number" placeholder="Shto id e countries" id="id_countries" name="id_countries"><br><br>
    </div>
    <div class="field">
    <input type="number" placeholder="Shto id e hotels" id="id_hotels" name="id_hotels"><br><br>
    </div>
    <div class="field">
    <input type="number" placeholder="Shto id e company_fly" id="id_company_fly" name="id_company_fly"><br><br>
    </div>
    <div class="field">
    <input type="text" placeholder="Shto user_name" id="user_name" name="user_name"><br><br>
    </div>
    <button type="submit" class="btn">Add</button><br><br>
</form>
</div>
</div>

<button type="button" onclick="document.getElementById('tabela1').style.display='block'" class="btn"
>Booking Table</button>
<button type="button" onclick="document.getElementById('tabela2').style.display='block'" class="btn"
>Orders Table</button>
<button type="button" onclick="document.getElementById('tabela3').style.display='block'" class="btn"
>Hotels Table</button>
<button type="button" onclick="document.getElementById('tabela4').style.display='block'" class="btn"
>Countries Table</button>
<button type="button" onclick="document.getElementById('tabela5').style.display='block'" class="btn"
>User Table</button>
<button type="button" onclick="document.getElementById('tabela6').style.display='block'" class="btn"
>Company_Fly Table</button>

<!-- <script>
function removeRow(id_booking) {
  if (confirm("A jeni të sigurt që dëshironi të fshini këtë rresht?")) {
    // Krijo një kërkesë AJAX për të fshirë rreshtin nga tabela
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var row = document.getElementById(id);
    row.parentNode.removeChild(row);
  }
};
xhttp.open("GET", "delete_row.php?id=" + id, true);
xhttp.send();
  }
}
</script> -->
<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["id_booking"])){
  $id = $_POST["id_booking"];
  $delete = mysqli_query($conn, "DELETE FROM booking WHERE id_booking = '$id'");
}
$sql = "SELECT * FROM booking";
$sql2 = "SELECT * FROM orders";
$sql3 = "SELECT * FROM hotels";
$sql4 = "SELECT * FROM countries";
$sql5 = "SELECT * FROM user_reg";
$sql6 = "SELECT * FROM company_fly";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela1' style='display: none;' class='table_responsive'>
<tr><th>Id_Booking</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Location</th>
<th>Guests</th>
<th>Arrivals</th>
<th>Leaving</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row["id_booking"]."</td>
<td>".$row["names"]."</td>
<td>".$row["email"]."</td>
<td>".$row["phone"]."</td>
<td>".$row["address"]."</td>
<td>".$row["location"]."</td>
<td>".$row["guests"]."</td>
<td>".$row["arrivals"]."</td>
<td>".$row["leaving"]."</td>
<td>
<span id='6' class='action_btn'>
<button type='button' onclick='removeRow(" . $row["id_booking"] . ")'>Remove</button>
<a href='addOrders.php?id_booking='.$row[id_booking].'' id = 'click' >Delete</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela2' style='display: none;' class='table_responsive'>
<tr><th>Id_Ordres</th>
<th>Id_Booking</th>
<th>Id_user_reg</th>
<th>Id_countries</th>
<th>Id_hotels</th>
<th>Id_company_fly</th>
<th>User_name</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_orders"] . "</td>
<td>".$row["id_booking"]."</td>
<td>".$row["id_user_reg"]."</td>
<td>".$row["id_countries"]."</td>
<td>".$row["id_hotels"]."</td>
<td>".$row["id_company_fly"]."</td>
<td>".$row["user_name"]."</td>
<td>
<span id='6' class='action_btn'>
<a href='#'>Edit</a>
<button type='button' onclick='myFunction6()'>Remove</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela3' style='display: none;' class='table_responsive'>
<tr><th>Id_Hotels</th>
<th>Name_Hotels</th>
<th>Offer</th>
<th>Price_Hotel</th>
<th>Code_City</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_hotels"] . "</td>
<td>".$row["name_hotels"]."</td>
<td>".$row["offer"]."</td>
<td>".$row["price_hotel"]."</td>
<td>".$row["codCity"]."</td>
<td>
<span id='6' class='action_btn'>
<a href='#'>Edit</a>
<button type='button' onclick='myFunction6()'>Remove</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";


$result = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela4' style='display: none;' class='table_responsive'>
<tr><th>Id_Countries</th>
<th>Name_Countries</th>
<th>Price_Countries</th>
<th>Id_Company_Fly</th>
<th>Id_Hotels</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_countries"] . "</td>
<td>".$row["name_countries"]."</td>
<td>".$row["price_countries"]."</td>
<td>".$row["id_company_fly"]."</td>
<td>".$row["id_hotels"]."</td>
<td>
<span id='6' class='action_btn'>
<a href='#'>Edit</a>
<button type='button' onclick='myFunction6()'>Remove</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql5);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela5' style='display: none;' class='table_responsive'>
<tr><th>Id_User</th>
<th>Name_User</th>
<th>Username</th>
<th>Password</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_user_reg"] . "</td>
<td>".$row["name_user_reg"]."</td>
<td>".$row["username_user_reg"]."</td>
<td>".$row["password"]."</td>
<td>
<span id='6' class='action_btn'>
<a href='#'>Edit</a>
<button type='button' onclick='myFunction6()'>Remove</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql6);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela6' style='display: none;' class='table_responsive'>
<tr><th>Id_Company_Fly</th>
<th>Name_Company_Fly</th>
<th>Destination</th>
<th>Contract</th>
<th>Price_Fly</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_company_fly"] . "</td>
<td>".$row["name_company_fly"]."</td>
<td>".$row["destination"]."</td>
<td>".$row["contract"]."</td>
<td>".$row["price_fly"]."</td>
<td>
<span id='6' class='action_btn'>
<a href='#'>Edit</a>
<button type='button' onclick='myFunction6()'>Remove</a>
</span>
</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}
?>
</body>
</html>