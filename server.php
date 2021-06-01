<?php
  session_start();
  // initializing variables
  $username = "";
  $email    = "";
  $errors = array();
  $_SESSION['success'] = "";
  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'ceo');


  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
       array_push($errors, "Password is required");
     }
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
      //encrypt the password before saving in the database
      $password = md5($password_1);
      echo $password ;
      $query = "INSERT INTO users(username, email, password)
      VALUES('$username', '$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: login.php');
    }
  }
  // ...


  // LOGIN USER
  if (isset($_POST['login_user'])) {
    // Data sanitization to prevent SQL injection
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    // Error message if the input field is left blank
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    // Checking for the errors
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      // $results = 1 means that one user with the entered username exists
      if (mysqli_num_rows($results) == 1) {
        // Storing username in session variable
        $_SESSION['username'] = $username;
        // Welcome message
        $_SESSION['success'] = "You are now logged in";
        // Page on which the user is sent to after logging in
        header('location: index.php');
      }else {
        array_push($errors, "Username or password incorrect");
      }
    }
  }
  //Add employee
  if (isset($_POST["reg_emp"])) {
    $username=$_SESSION['username'];
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    $position = mysqli_real_escape_string($db, $_POST['pos']);
    $office = mysqli_real_escape_string($db, $_POST['office']);
    $start = mysqli_real_escape_string($db, $_POST['start']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    if (empty($name)) {
      array_push($errors, "Employee Name is required");
    }
    if (empty($salary)) {
      array_push($errors, "Salary is required");
    }
    if (empty($position)) {
      array_push($errors, "Position is required");
    }
    if (empty($office)) {
      array_push($errors, "Office is required");
    }
    if (empty($start)) {
      array_push($errors, "Date is required");
    }
    if (empty($age)) {
      array_push($errors, "Age is required");
    }
    $emp_check_query = "SELECT * FROM employee WHERE
                                              Name='$name'
                                              AND
                                              Position='$position'
                                              AND
                                              Office='$office'
                                              AND
                                              Age='$age'
                                              AND
                                              Start_Date='$start'
                                              AND
                                              Salary='$salary'
                                              LIMIT 1";
    $result = mysqli_query($db, $emp_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
      // if user exists
      array_push($errors, "Employee is already Exist!!");
    }
    if (count($errors) == 0) {
      $query = "INSERT INTO employee(Name, Position, Office, Age, Start_Date, Salary,users_username)
      VALUES('$name', '$position', '$office' ,'$age','$start','$salary','$username')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Employee successfully added !!";
    }
  }
  //Add product
  if (isset($_POST["add_prod"])) {
    $username=$_SESSION['username'];
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $cat = mysqli_real_escape_string($db, $_POST['cat']);
    $details = mysqli_real_escape_string($db, $_POST['details']);
    if (empty($name)) {
      array_push($errors, "Product Name is required");
    }
    if (empty($price)) {
      array_push($errors, "Price is required");
    }
    if (empty($cat)) {
      array_push($errors, "Category is required");
    }
    if (empty($details)) {
      $details="No Details";
    }
    $emp_check_query = "SELECT * FROM products WHERE
                                              product_name='$name'
                                              AND
                                              product_price='$price'
                                              AND
                                              product_cat='$cat'
                                              AND
                                              product_details='$details'
                                              LIMIT 1";
    $result = mysqli_query($db, $emp_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
      // if user exists
      array_push($errors, "Product is already Exist!!");
    }
    if (count($errors) == 0) {
      $query = "INSERT INTO products(product_name, product_price, product_cat, product_details,users_username)
      VALUES('$name', '$price', '$cat' ,'$details','$username')";
      mysqli_query($db, $query);
    }
  }
?>
