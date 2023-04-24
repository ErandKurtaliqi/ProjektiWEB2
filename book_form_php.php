<?php 

session_start(); 

include "book-db.php";

if (isset($_POST['names']) && isset($_POST['email'])
    && isset($_POST['phone']) && isset($_POST['address']) 
	&& isset($_POST['location']) && isset($_POST['guests'])
	&& isset($_POST['arrivals']) && isset($_POST['leaving'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$names = validate($_POST['names']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$address = validate($_POST['address']);
	$location = validate($_POST['location']);
	$guests = validate($_POST['guests']);
	$arrivals = validate($_POST['arrivals']);
	$leaving = validate($_POST['leaving']);

	$user_data = 'names='. $names;


	if (empty($names)) {
		header("Location: book_form.php?error=Name is required&$user_data");
	    exit();
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$names)){
		header("Location: book_form.php?error=Only letters and white space allowed&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: book_form.php?error=Email is required&$user_data");
	    exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: book_form.php?error=Invalid email format&$user_data");
	    exit();
	}
	
	else if(empty($phone)){
        header("Location: book_form.php?error=Phone is required&$user_data");
	    exit();
	}else if($phone <= 0){
		header("Location: book_form.php?error=Phone is invalid&$user_data");
	    exit();
	}

	else if(empty($address)){
        header("Location: book_form.php?error=Address is required&$user_data");
	    exit();
	}else if(strlen($address) > 40){
		header("Location: book_form.php?error=Specify the address in less than 40 characters&$user_data");
	    exit();
	}

	else if(empty($location)){
        header("Location: book_form.php?error=Location is required&$user_data");
	    exit();
	}

	else if(empty($guests)){
        header("Location: book_form.php?error=Guests is required&$user_data");
	    exit();
	}else if($guests <= 0){
		header("Location: book_form.php?error=If you want to booking, please write a number pozitiv&$user_data");
	    exit();
	}

	else if(empty($arrivals)){
        header("Location: book_form.php?error=Arrivals is required&$user_data");
	    exit();
	}else if($arrivals < date("Y-m-d")){
		header("Location: book_form.php?error=You cannot reserve the date that has passed&$user_data");
	    exit();
	}

	else if(empty($leaving)){
        header("Location: book_form.php?error=Leaving is required&$user_data");
	    exit();
	}

// 		$sql = "SELECT 
//     booking.guests, 
//     hotels.price_hotel, 
//     countries.price_countries, 
//     company_fly.price_fly,
//     (countries.price_countries * booking.guests) AS total_price
// FROM 
//     orders 
//     JOIN booking ON orders.id_booking = booking.id_booking
//     JOIN hotels ON orders.id_hotels = hotels.id_hotels
//     JOIN countries ON orders.id_countries = countries.id_countries
//     JOIN company_fly ON orders.id_company_fly = company_fly.id_company_fly
// WHERE 
//      booking.id_booking = orders.id_booking";


// 	$result = mysqli_query($conn, $sql);

	// if (mysqli_num_rows($result) > 0) {
	// 	// Shfaqni të dhënat për secilën rreshtë
	// 	while($row = mysqli_fetch_assoc($result)) {
		
	// 		// echo "<script> alert('Numri i mysafirëve: " . $row["guests"]. 
	// 			 ", Çmimi i vendit të destinacionit: " . $row["price_countries"]. 
	// 			 ", Çmimi total: " . $row["total_price"]."<br>');</script>";
	// 	}
	// }
	// else if(strlen($leaving) <= strlen($arrivals)){
	// 	header("Location: book_form.php?error=Leaving is impossible&$user_data");
	//     exit();
	// }

	// else{

	//     $sql = "SELECT * FROM book_form1 WHERE names='$names' ";
	// 	$result = mysqli_query($conn, $sql);

	// 	if (mysqli_num_rows($result) > 0) {
	// 		header("Location: book_form.php?error=The names is taken try another&$user_data");
	//         exit();
	else {
           $sql2 = "INSERT INTO booking(names, email, phone, address, location, guests, arrivals, leaving)
		            VALUES('$names', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: book_form.php?success=Your booked has been reserved successfully");
	         exit();
           }else {
	           	header("Location: book_form.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
else{
	header("Location: book_form.php");
	exit();
}