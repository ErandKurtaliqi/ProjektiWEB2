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

	if (empty($user)) {
		echo "<script>alert('Name is empty'); </script>";
	    exit();
	}else if(empty($pass1)){
        echo "<script>alert('Password is empty'); </script>";
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
            	header("Location: welcome.php");
		        exit();
            }else{
				echo "<script>alert('Incorect User name or password'); </script>";
		        exit();
			}
		}else{
			echo "<script>alert('Incorect User name or password'); </script>";
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}