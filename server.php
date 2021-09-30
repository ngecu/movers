
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'movers_db');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: pages/index.php');
  }
}

// ... 


// REGISTER VEHICLE
if (isset($_POST['reg_vehicle'])) {
    // receive all input values from the form
    $vehicle_name = mysqli_real_escape_string($db, $_POST['vehicleName']);
    $vehicle_load_capacity = mysqli_real_escape_string($db, $_POST['vehicleLoadCapacity']);
    $transport_cost = mysqli_real_escape_string($db, $_POST['transportCost']);
    $number_of_loaders = mysqli_real_escape_string($db, $_POST['loadersNumber']);
    $charge_per_loader = mysqli_real_escape_string($db, $_POST['AmountPerLoader']);
    $chrge_per_driver_per_trip = mysqli_real_escape_string($db, $_POST['AmountPerDriverPerTrip']);


  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($vehicle_name)) { array_push($errors, "Vehicle Name is required"); }
    if (empty($vehicle_load_capacity)) { array_push($errors, "Vehicle Load Capacity is required"); }
    if (empty($transport_cost)) { array_push($errors, "Transport Cost is required"); }

    if (empty($number_of_loaders)) { array_push($errors, "Number of loaders is required"); }
    if (empty($charge_per_loader)) { array_push($errors, "Charge Per Loader is required"); }
    if (empty($chrge_per_driver_per_trip)) { array_push($errors, "Charge per dricer per trip is required"); }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $vehicle_check_query = "SELECT * FROM vehicle WHERE vehicle_name='$vehicle_name' LIMIT 1";
    $result = mysqli_query($db, $vehicle_check_query);
    $vehicle = mysqli_fetch_assoc($result);
    
    if ($vehicle) { // if vehicle exists
        array_push($errors, "Vehicle already exists");
    }
  
    // Finally, register vehicle if there are no errors in the form
    if (count($errors) == 0) {
     
  
        $query = "INSERT INTO vehicle (vehicle_name, load_capacity, transport_cost,number_of_loaders,amount_per_loader,trip_driver_per_trip) 
                  VALUES('$vehicle_name', '$vehicle_load_capacity', '$transport_cost','$number_of_loaders','$charge_per_loader','$chrge_per_driver_per_trip')";
        mysqli_query($db, $query);
        $_SESSION['vehicle'] = $vehicle_name;
        $_SESSION['success'] = "Added Successfully";
        header('location: pages/success.php');
    }
  }
  
  // ... 

// ... 

// REGISTER DRIVER
if (isset($_POST['reg_driver'])) {
  // receive all input values from the form
  $driver_name = mysqli_real_escape_string($db, $_POST['driverName']);
  $vehicle_pk = mysqli_real_escape_string($db, $_POST['vehicle_pk']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($driver_name)) { array_push($errors, "Driver Name is required"); }
  if (empty($vehicle_pk)) { array_push($errors, "Vehicle is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $driver_check_query = "SELECT * FROM driver WHERE name='$driver_name' LIMIT 1";
  $result = mysqli_query($db, $driver_check_query);
  $driver = mysqli_fetch_assoc($result);
  
  if ($driver) { // if vehicle exists
      array_push($errors, "Driver already exists");
  }

  // Finally, register vehicle if there are no errors in the form
  if (count($errors) == 0) {
   

      $query = "INSERT INTO driver (name, status, offence_count,vehicle_pk) 
                VALUES('$driver_name', 'Active', 0,'$vehicle_pk')";
      mysqli_query($db, $query);
      $_SESSION['driver'] = $driver_name;
      $_SESSION['success'] = "Added Successfully";
      header('location: ./pages/success.php');
  }
}

// ... 

// ... 


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: pages/index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>