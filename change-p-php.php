<?php 
session_start();

if (isset($_SESSION['id_user_reg']) && isset($_SESSION['username_user_reg'])) {

include "book-db.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
    $c_np = validate($_POST['c_np']);

    if(empty($op)){
        header('Location: change-password-u.php?error=Old Password is required');
    exit();
    }else if(empty($np)){
        header('Location: change-password-u.php?error=New Password is required');
    exit();
    }else if (strlen($np) < 8) {
        header("Location: change-password-u.php?error=The password isn't strong enough.");
		exit();
    } elseif (!preg_match('/[A-Z]/', $np)) {
        header("Location: change-password-u.php?error=The password isn't strong enough.");
		exit();
    } elseif (!preg_match('/[.*&^%$#@!]/', $np)) {
        header("Location: change-password-u.php?error=The password isn't strong enough.");
		exit();
    }else if($np !== $c_np){
        header('Location: change-password-u.php?error=The confirmation password does not match');
    exit();
    }else{
        // hashing the password
        $op = md5($op);
        $np = md5($np);
    //     $c_np = md5($c_np);
        $id_user_reg = $_SESSION['id_user_reg'];

        $sql = "SELECT password FROM user_reg 
        WHERE id_user_reg = '$id_user_reg' AND password = '$op'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 ="UPDATE user_reg SET password = '$np' WHERE id_user_reg = '$id_user_reg'";
            mysqli_query($conn, $sql_2);
            header('Location: change-password-u.php?success=Your password has been changed successfully');
    exit();
        }else {
            header('Location: change-password-u.php?error=Incorrect password');
    exit();
        }
    }



}else{
    header('Location: change-password-u.php');
    exit();
}}else{
    header("Location: login.php");
    exit();
}

