<?php 

session_start(); 

include "book-db.php";

if (isset($_POST['name_client']) && isset($_POST['pin_client'])
    && isset($_POST['cardNumber_client'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name_client = validate($_POST['name_client']);
	$pin_client = validate($_POST['pin_client']);
	$cardNumber_client = validate($_POST['cardNumber_client']);
	
	$user_data = 'name_client='. $name_client;

	if (empty($name_client)) {
		header("Location: pay.php?error=Name is required&$user_data");
	    exit();
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$name_client)){
		header("Location: pay.php?error=Only letters and white space allowed&$user_data");
	    exit();
	}

	else if(empty($pin_client)){
        header("Location: pay.php?error=PIN is required&$user_data");
	    exit();
	}else if($pin_client <= 0 && $pin_client > 4){
		header("Location: pay.php?error=Size for PIN is four number&$user_data");
	    exit();
	}

	else if(empty($cardNumber_client)){
        header("Location: pay.php?error=Card Number is required&$user_data");
	    exit();
	}
    else {
           $sql = "INSERT INTO orders(name_client, pin_client, cardNumber_client)
		            VALUES('$name_client', '$pin_client', '$cardNumber_client')";
           $result2 = mysqli_query($conn, $sql);
           if ($result2) {
           	 header("Location: pay.php?success=Your payments has been reserved successfully");
	         exit();
           }else if($result2 > 0){
			$sql3 = "INSERT INTO orders(id_booking) VALUES select id_booking from booking as b join orders as o  where b.id_booking = o.id_orders";
   

	echo "<script> alert('Your sum for pay price()');</script>";
		   }else {
	           	header("Location: pay.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
else{
	header("Location: pay.php");
	exit();
}

?>