<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Orders</title>
</head>
<body>

<form action="addOrders-php.php" method="post"><br><br>
<label for="id_orders">Shto id e orders</label><br>
    <input type="number" placeholder="id_orders" id="id_orders" name="id_orders"><br><br>
    <label for="id_booking">Shto id e booking</label><br>
    <input type="number" placeholder="id_booking" id="id_booking" name="id_booking"><br><br>
    <label for="id_user_reg">Shto id e perdoruesit</label><br>
    <input type="number" placeholder="id_user_reg" id="id_user_reg" name="id_user_reg"><br><br>
    <label for="id_countries">Shto id e countries</label><br>
    <input type="number" placeholder="id_countries" id="id_countries" name="id_countries"><br><br>
    <label for="id_hotels">Shto id e hotels</label><br>
    <input type="number" placeholder="id_hotels" id="id_hotels" name="id_hotels"><br><br>
    <label for="id_company_fly">Shto id e company_fly</label><br>
    <input type="number" placeholder="id_company_fly" id="id_company_fly" name="id_company_fly"><br><br>
    <label for="user_name">Shto user_name</label><br>
    <input type="text" placeholder="user_name" id="user_name" name="user_name"><br><br>
    <button type="submit" class="btn">Add</button><br><br>
</form>

<button type="button" onclick="document.getElementById('tabela1').style.display='block'" class="btn"
>Booking Table</button>
<button type="button" onclick="document.getElementById('tabela2').style.display='block'" class="btn"
>Orders Table</button>
<button type="button" onclick="document.getElementById('tabela3').style.display='block'" class="btn"
>Hotels Table</button>
<button type="button" onclick="document.getElementById('tabela4').style.display='block'">Countries Table</button>
<button type="button" onclick="document.getElementById('tabela5').style.display='block'">User Table</button>
<button type="button" onclick="document.getElementById('tabela6').style.display='block'">Company_Fly Table</button>

<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM booking";
$sql2 = "SELECT * FROM orders";
$sql3 = "SELECT * FROM hotels";
$sql4 = "SELECT * FROM countries";
$sql5 = "SELECT * FROM user_reg";
$sql6 = "SELECT * FROM company_fly";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela1' style='display: none;'>
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
echo "<tr><td>" . $row["id_booking"] . "</td>
<td>".$row["names"]."</td>
<td>".$row["email"]."</td>
<td>".$row["phone"]."</td>
<td>".$row["address"]."</td>
<td>".$row["location"]."</td>
<td>".$row["guests"]."</td>
<td>".$row["arrivals"]."</td>
<td>".$row["leaving"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela2' style='display: none;'>
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
<td>".$row["user_name"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela3' style='display: none;'>
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
<td>".$row["codCity"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";


$result = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela4' style='display: none;'>
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
<td>".$row["id_hotels"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql5);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela5' style='display: none;'>
<tr><th>Id_User</th>
<th>Name_User</th>
<th>Username</th>
<th>Password</th>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["id_user_reg"] . "</td>
<td>".$row["name_user_reg"]."</td>
<td>".$row["username_user_reg"]."</td>
<td>".$row["password"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}

echo "<br>";

$result = mysqli_query($conn, $sql6);

if (mysqli_num_rows($result) > 0) {

echo "<table border = 1 id='tabela6' style='display: none;'>
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
<td>".$row["price_fly"]."</td>";
}
echo "</table>";
} else {
echo "Nuk u gjet asnje rezultat.";
}
?>
</body>
</html>