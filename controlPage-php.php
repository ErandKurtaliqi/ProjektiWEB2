<?php 
session_start(); 

include "book-db.php";

if (isset($_POST['user']) && isset($_POST['pass1'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
	$pass1 = validate($_POST['pass1']);

	if (empty($uname)) {
		header("Location: welcome.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: welcome.php?error=Password is required");
	    exit();
	}else{
        
		$sql = "SELECT * FROM employees WHERE username='$user' AND password='$pass1'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pass1) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['id_employees'] = $row['id_employees'];
            	header("Location: adminPage.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}