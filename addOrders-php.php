<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['id_orders']) && isset($_POST['id_booking'])
    && isset($_POST['id_user_reg']) && isset($_POST['id_countries'])
    && isset($_POST['id_hotels']) && isset($_POST['id_company_fly'])
    && isset($_POST['user_name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$id_orders = validate($_POST['id_orders']);
	$id_booking = validate($_POST['id_booking']);
    $id_user_reg = validate($_POST['id_user_reg']);
	$id_countries = validate($_POST['id_countries']);
    $id_hotels = validate($_POST['id_hotels']);
	$id_company_fly = validate($_POST['id_company_fly']);
    $user_name = validate($_POST['user_name']);

	
	if (empty($id_orders)) {
		echo "Usename is required";
	    exit();
	}else if(empty($id_booking)){
        echo "Password is required";
	    exit();
	}else if(empty($id_user_reg)){
        echo "Password is required";
	    exit();
	}else if(empty($id_countries)){
        echo "Password is required";
	    exit();
	}else if(empty($id_hotels)){
        echo "Password is required";
	    exit();
	}else if(empty($id_company_fly)){
        echo "Password is required";
	    exit();
	}else if(empty($user_name)){
        echo "Password is required";
	    exit();
	}else{
		
		$sql2 = "INSERT INTO orders (id_orders, id_booking, id_user_reg, id_countries, id_hotels, id_company_fly, user_name)
         VALUES('$id_orders', '$id_booking', '$id_user_reg', '$id_countries', '$id_hotels', '$id_company_fly', '$user_name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 echo "Porosia u shtu me sukses";
	         exit();
           }else {
	           echo "Nuk u shtu porosia";
		        exit();
           }
		}
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
	<tr><th>ID</th>
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


?>
