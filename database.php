<?php
//error handling
  try{
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Tanvir200539522', 'Tanvir200539522', 'LDvq_hfsF8');
   //sets attributes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
// catches error 
  catch(PDOException $e){
    // displays error message
    echo "Connection failed: " . $e->getMessage();
  }
?>
