<?php
// lidhja me databazen
$conn = mysqli_connect("localhost", "root", "", "travel");


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $sql = "SELECT * FROM user_reg WHERE username_user_reg='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username_user_reg'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username_user_reg'] = $row['username_user_reg'];
            	$_SESSION['name_user_reg'] = $row['name_user_reg'];
            	$_SESSION['id_user_reg'] = $row['id_user_reg'];
            	header("Location: welcome.php");
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
    // ORDER BY id_orders DESC
    $result = mysqli_query($conn, $sql);
    $history = array();
    while($row = mysqli_fetch_assoc($result)) {
        $history[] = $row;
    }
    // kthimi i historise se userit ne JSON
    echo json_encode($history);

?>
