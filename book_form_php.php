<?php 

include "book-db.php";

if (isset($_POST['names']) && isset($_POST['email'])
    && isset($_POST['phone']) && isset($_POST['address']) 
	&& isset($_POST['location']) && isset($_POST['guests'])
	&& isset($_POST['arrivals']) && isset($_POST['return-date'])) {

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
	$returnDate = $_POST['return-date'];

	$returnDateArray = explode('-', $returnDate);
    $leaving = $returnDateArray[2].'-'.$returnDateArray[1].'-'.$returnDateArray[0];

	$user_data .= 'names='. $names;
	
	
	if (empty($names)) {
		header("Location: book_form.php?error=Name is required&$user_data");
	    exit();
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$names)){
		header("Location: book_form.php?error=Only letters and white space allowed&$user_data");
	    exit();
	}

	$user_data1 .= 'email='. $email;

	if(empty($email)){
        header("Location: book_form.php?error=Email is required&$user_data1;");
	    exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: book_form.php?error=Invalid email format&$user_data1;");
	    exit();
	}

	$user_data2 .= 'phone='. $phone;

	if(empty($phone)){
        header("Location: book_form.php?error=Phone is required&$user_data2");
	    exit();
	}else if($phone <= 0){
		header("Location: book_form.php?error=Phone is invalid&$user_data2");
	    exit();
	}

	$user_data3 .= 'guests='. $guests;

	if(empty($guests)){
        header("Location: book_form.php?error=Guests is required&$user_data3");
	    exit();
	}else if($guests <= 0){
		header("Location: book_form.php?error=If you want to booking, please write a number pozitiv&$user_data3");
	    exit();
	}

	$user_data4 .= 'arrivals='. $arrivals;

	if(empty($arrivals)){
        header("Location: book_form.php?error=Arrivals is required&$user_data4");
	    exit();
	}
	else if($arrivals < date("Y-m-d")){
		header("Location: book_form.php?error=You cannot reserve the date that has passed&$user_data4");
	    exit();
	}
	
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