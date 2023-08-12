<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<!-- adds header -->
<?php require ('./header.php'); ?>
<body>
<div class="login">
   
   <h4>LOGIN to meet friends </h4>
   <form>
   <!-- to create login form  -->
   <div class="form2">
      <!--  sends the data entered by user to validate.php for validation -->
   
    <div class="fm">
   <label for="username">UserName:</label>
   <!-- <br is for break -->
   <input type="text" id="username" name="username" required><br><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" required><br><br>
   <!-- button to submit the form -->
   <button type="submit" class="btn">LOG IN</button> <br><br>
   <!-- to logout -->
  
   </div>     
</form>
  
</div>
</body>
<a href ="logout.php">Logout</a>
<!-- adds footer -->
<?php require ('./footer.php'); ?>
</html>