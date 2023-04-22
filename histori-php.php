<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM orders 
        INNER JOIN booking ON orders.id_booking = booking.id_booking
        INNER JOIN user_reg ON orders.id_user_reg = user_reg.id_user_reg
        INNER JOIN countries ON orders.id_countries = countries.id_countries
        INNER JOIN hotels ON hotels.id_hotels = countries.id_hotels
        INNER JOIN company_fly ON company_fly.id_company_fly = countries.id_company_fly";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  
	echo "<table border = 1><tr><th>ID</th>
	<th>Booking ID</th>
	<th>User ID</th>
	<th>Country ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Location</th>
	<th>Guests</th>
	<th>Arrivals</th>
	<th>Leaving</th>
	<th>Hotel Name</th>
	<th>Company Name</th>
	<th>Name user</th>
	<th>Price</th>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_orders"] . "</td>
		<td>".$row["id_booking"]."</td>
		<td>".$row["id_user_reg"]."</td>
		<td>".$row["id_countries"]."</td>
		<td>".$row["names"]."</td>
		<td>".$row["email"]."</td>
		<td>".$row["phone"]."</td>
		<td>".$row["address"]."</td>
		<td>".$row["location"]."</td>
		<td>".$row["guests"]."</td>
		<td>".$row["arrivals"]."</td>
		<td>".$row["leaving"]."</td>
		<td>".$row["name_hotels"]."</td>
		<td>".$row["name_company_fly"]."</td>
		<td>".$row["name_user_reg"]."</td>
		<td>".$row["price_countries"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nuk u gjet asnje rezultat.";
}


mysqli_close($conn);

// Krijoni query-në për të marrë të dhënat e dëshiruara
// $sql = "SELECT id_orders, names, email, name_countries FROM orders JOIN booking ON orders.id_booking = booking.id_booking JOIN countries ON orders.id_countries = countries.id_countries";

// $result = mysqli_query($conn, $sql);

// Krijo tabelën HTML dhe shfaq të dhënat e marrura
// if (mysqli_num_rows($result) > 0) {
//     echo "<table><tr><th>ID Orders</th><th>Names</th><th>Email</th><th>Country</th></tr>";
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "<tr><td>".$row["id_orders"]."</td><td>".$row["names"]."</td><td>".$row["email"]."</td><td>".$row["name_countries"]."</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// Mbyll lidhjen me databazën
// mysqli_close($conn);


// kontrollimi i lidhjes
// if (!$conn) {
//     die("Lidhja deshtoi: " . mysqli_connect_error());
// }

// query-ja qe do te ekzekutohet
//$user_id = 6;// id e perdoruesit qe ka bere login

// $sql = "SELECT * FROM orders";
// $sql = "SELECT COUNT(*) AS 'rezervime', h.name_hotels AS 'hotel', cf.name_company_fly AS 'kompania', c.name_countries AS 'destinacioni'
//         FROM orders o
//         INNER JOIN user_reg u ON o.id_user_reg = u.id_user_reg
//         INNER JOIN hotels h ON o.id_booking = h.id_hotels
//         INNER JOIN countries c ON o.id_countries = c.id_countries
//         INNER JOIN company_fly cf ON c.id_company_fly = cf.id_company_fly
//         WHERE u.id_user_reg = '$user_id'
//         GROUP BY h.name_hotels, cf.name_company_fly, c.name_countries";

// ekzekutimi i query-se
//$result = mysqli_query($conn, $sql);

// shfaqja e rezultatit
// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
        // echo "Numri i rezervimeve: " . $row["rezervime"]. "<br>";
        // echo "Hotel: " . $row["hotel"]. "<br>";
        // echo "Kompania e fluturimit: " . $row["kompania"]. "<br>";
        // echo "Destinacioni: " . $row["destinacioni"]. "<br>";
        // shtoni te dhenat e tjera qe deshironi te shfaqni
//         echo "<br>";
//     }
// } else {
//     echo "Nuk ka rezultate.";
// }

// mbyllja e lidhjes
// mysqli_close($conn);
?>
