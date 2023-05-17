<?php

include "book-db.php";

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
		echo "Id_Orders is required";
	    exit();
	}else if(empty($id_booking)){
        echo "Id_Booking is required";
	    exit();
	}else if(empty($id_user_reg)){
        echo "Id_User_Reg is required";
	    exit();
	}else if(empty($id_countries)){
        echo "Id_Countries is required";
	    exit();
	}else if(empty($id_hotels)){
        echo "Id_Hotels is required";
	    exit();
	}else if(empty($id_company_fly)){
        echo "Id_Company_Fly is required";
	    exit();
	}else if(empty($user_name)){
        echo "User_name is required";
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

else {
    echo "Nuk u gjet asnje rezultat.";
}

mysqli_close($conn);
?>
