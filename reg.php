<?php

include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");

     $mrn = $_POST["mrn"];

   $select = mysqli_query($conn , "select*from patient where MRN='$mrn'");
    
   $row = mysqli_fetch_array($select);
     if($row["MRN"]==$mrn) {
        header("Location: admin.html?error=User Name is required");
     }
   else 
  


   if(isset($_POST["add"])) {

 
  
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $region = $_POST["region"];
  $woreda = $_POST["woreda"];
  $kebele = $_POST["kebele"];  

  

 
 $insert=mysqli_query($conn, "INSERT INTO `patient`(`MRN`, `fname`, `lname`, `gender`, `age`, `region`, `woreda`, `kebele`) VALUES ('$mrn','$fname','$lname','$gender','$age','$region','$woreda','$kebele')");
    
  if($insert) {
    echo "the patient data entered sucess";



  
 } else { 
   echo "the patient data is not inseted"

   
    
 }
 
  }
 


?>