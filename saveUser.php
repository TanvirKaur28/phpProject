<?php
  // needs database file
  require './database.php';
  // creating variables
  $username = $_POST['username'];  //stores username
  $email= $_POST['email']; //stores email
  $password = $_POST['password']; //stores password
  $reEnter = $_POST['reEnter']; //stores re entered password
  $visibility = $_POST['visibility']; //stores visibility 
  $Length = 6; // length variable given a value of 6
  
  //if following conditions are true then error message will be displayed
  if((strlen($username) < $Length) || (strlen($password) < $Length) ||  ($password != $reEnter)  ){
    echo '<p>ERROR OCCURED : username and password must be 6 digit long and password and re enter password should match</p>';
    }
   else{
      $password = hash('sha512',$password);
      //adding values to admin table
      $sql = "INSERT INTO admin (username, email, password, reEnter, visibility) VALUES ('$username', '$email', '$password', '$reEnter','$visibility');";
      //execute sql query
      $conn->exec($sql);
      echo'<h3>Admin  has been added</h3>';
      //takes to login.php
      echo '<a href="login.php">CLICK ME TO GO TO LOGIN PAGE</a>';
      $conn = null;
      }
	?>