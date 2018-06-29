<?php
session_start();

// initializing variables
$username = "";
$ADM    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');

// REGISTER USER
/*if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $ADM = mysqli_real_escape_string($db, $_POST['ADM']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($ADM)) { array_push($errors, "ADM is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or ADM
  $user_check_query = "SELECT * FROM masomo1 WHERE username='$username' OR ADM='$ADM' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['ADM'] === $ADM) {
      array_push($errors, "ADM already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	/*$query = "INSERT INTO masomo1 (username, ADM, password) 
  			  VALUES('$username', '$ADM', '$password')";
  	mysqli_query($db, $query);*/
  	/*$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}*/
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $ADM = mysqli_real_escape_string($db, $_POST['ADM']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($ADM)) {
    array_push($errors, "ADM is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    /*$password = md5($password);*/
    $query = "SELECT * FROM masomo3 WHERE username='$username' AND ADM='$ADM' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: indexed.php');
    }else {
      array_push($errors, "Wrong username/ADM/password combination");
    }
  }
}