<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <!-- links to the style.css for styling the elements -->
    <link rel="stylesheet" href="./style.css"> 
</head>
<!-- adds header -->
<?php require ('./header.php'); ?>
<body>
   
<h3>WELCOME TO Registration<br><br> Please fill the following form to register and see friends.</h3> 
   <div class="registration">
   <div class="registerform">
      <!-- creating form with different input types -->
      <!-- sends the data entered by user to saveUser.php in order to save the user -->
<form  action="saveUser.php" method="post">
   <div class="context">
   <div class="regForm">
      <!-- label provides description of field -->
   <label for="username">User Name:</label>
  
   <!-- required states that field must be filled with data -->
   <!-- <br> adds line break -->
   <input type="text" class="username" name="username" required><br><br>
   </div>
   <div class="regForm">
   <label for="email">Email:</label>
  
   <input type="email" class="email" name="email" required><br><br>
   </div>
   <div class="regForm">
      
   <label for="password">Password:</label>
   <input type="password" class="password" name="password" required><br><br>
   </div>
   <div class="regForm">
   <label for="reEnter">Re-enter Password:</label>
   <input type="password" class="reEnter" name="reEnter" required><br><br>
   </div>
   <div class="regForm">
   <label  for="visibility" class="visibility" >You want your account to be :</label><br><br>
   <label for="public" class="visibility">Public</label>
   <!-- checkboxes makes user to select the visibility -->
   <input type="checkbox" class="visibility" name="visibility" value="public">
   <label for="private" class="visibility">Private</label>
   <input type="checkbox" class="visibility" name="visibility" value="private"><br><br>
   </div>
    <!-- button to submit form -->
    <button class="btn" type="submit">Create Account</button>         
    </div>     
 </form>
  </div>
  </div>
  <!-- if a person has already created account then this link takes him directly to login page -->
  <div class="registered">
  <p>Already have an account?<a href="login.php">Go to Login page</a></p></div>
  
 </body>
 <!-- adds footer -->
 <?php require ('./footer.php'); ?>
</html>
