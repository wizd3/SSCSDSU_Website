<?php

session_start();

// initializing variables
$username = "";
$email = "";
$errors = array();

include("config.php");

//alert
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

// login
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 1) {
    $row = $results->fetch_array(MYSQLI_ASSOC);
    $_SESSION['username'] = $row["firstname"];
	  $_SESSION['email'] = $email;
	  // header('location: index.php');
	}else {
		alert("Wrong email/password combination");
	}
}


// register
if (isset($_POST['register_user'])) {

  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $psw = mysqli_real_escape_string($db, $_POST['psw']);
  $confirm_psw = mysqli_real_escape_string($db, $_POST['confirm_psw']);

  // Check if account exists
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    alert("Account already exists");
  }
  // Register account if it does not exist
  else {
  	$query = "INSERT INTO users (firstname, lastname, email, password)
  			  VALUES('$firstname', '$lastname', '$email', '$psw')";
  	$ver = mysqli_query($db, $query);
    // alert($db);
    // alert($query);
    // alert($ver);
  	$_SESSION['username'] = $firstname;
  	// header('location: index.php');
  }
}

// logout
if (isset($_POST['logout_user'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
}
?>
