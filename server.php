<?php
session_start();

// initializing variables
$username = "";
$email    = ""; 
$firstname    = "";
$lastname = "";
$mobilenumber    = "";
$errors = array(); 
$UserID="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'INTO');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstname    = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $mobilenumber    = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $errors = array(); 
  $UserID="";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobilenumber)) { array_push($errors, "Mobile Number is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm Password is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
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
 
     $query1 = "INSERT INTO users(username, email, password, FirstName, LastName, MobileNumber,isAdmin) VALUES('$username', '$email', '$password','$firstname','$lastname','$mobilenumber','0')";
      $results1 = mysqli_query($db, $query1);
       
echo $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: userlogged.php');
    
  }
}
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
      header('location: userlogged.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

//upload videos

 if(isset($_POST['upload_submit'])){
       $maxsize = 5242880; // 5MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query3 = "INSERT INTO videos(name,location,approved) VALUES('$name','$target_file','0')";

             $results3 =  mysqli_query($db,$query3);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     } 
     
 mysqli_close($db);

?>