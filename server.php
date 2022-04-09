<?php

session_start();

// initializing variables
$username = "";
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
    $_SESSION['userid'] = $row["userid"];
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
  	$result = mysqli_query($db, $query);
  	$_SESSION['username'] = $firstname;
    $_SESSION['userid'] = mysqli_insert_id($db);
  }

// Add the user to all upcoming events to userevents table
$event_register = "SELECT eventid FROM events WHERE upcoming=1";
$result = mysqli_query($db, $event_register);

while ($row = $result->fetch_array(MYSQLI_NUM)) {
  $event_id = $row[0];
  $query = "INSERT INTO userevents (userid, eventid, upcoming, registered)
        VALUES('{$_SESSION['userid']}', '$event_id', '1', '0')";
  mysqli_query($db, $query);
}

}

// logout
if (isset($_POST['logout_user'])) {
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['userid']); 
  header("location: index.php");
}


//Register for event
if (isset($_POST['Register-upcoming'])) {
  $event_id = (int)$_POST['event_id'];
  $query = "UPDATE userevents set registered = 1 WHERE userid = {$_SESSION['userid']} AND eventid = $event_id";
  $result = mysqli_query($db, $query);
}

//Deregister for event
if (isset($_POST['Deregister-upcoming'])) {
  $event_id = (int)$_POST['event_id'];
  $query = "UPDATE userevents set registered = 0 WHERE userid = {$_SESSION['userid']} AND eventid = $event_id";
  $result = mysqli_query($db, $query);
}
?>
