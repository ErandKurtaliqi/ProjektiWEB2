<?php

include "book-db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	
	if (empty($username)) {
		header("Location: histori.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: histori.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        
		$sql2 = "SELECT * FROM user_reg WHERE username_user_reg='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username_user_reg'] === $username && $row['password'] === $password) {
            	$_SESSION['username_user_reg'] = $row['username_user_reg'];
            	$_SESSION['name_user_reg'] = $row['name_user_reg'];
            	$_SESSION['id_user_reg'] = $row['id_user_reg'];
            	header("Location: histori-php.php");
		        exit();
            }else{
				header("Location: histori.php?error=Incorect User name or password");
		        exit();
			}
		}
	}
	
}else{
	header("Location: histori.php");
	exit();
}

$sql = "SELECT * FROM orders 
        INNER JOIN booking ON orders.id_booking = booking.id_booking
        INNER JOIN user_reg ON orders.id_user_reg = user_reg.id_user_reg
        INNER JOIN countries ON orders.id_countries = countries.id_countries
        INNER JOIN hotels ON hotels.id_hotels = countries.id_hotels
        INNER JOIN company_fly ON company_fly.id_company_fly = countries.id_company_fly
		WHERE '$username' = orders.user_name";
        
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
	echo "<table border = 1>
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
        echo "<tr>
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
    echo "No results found.";
}

mysqli_close($conn);

?>
