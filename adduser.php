<?php 
  
  include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");

                            
     if(isset($_POST["add"])) {

     
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $role = $_POST["role"];
      $gender= $_POST["gender"];
      $phone = $_POST["phone"];




 $in =$insert  = mysqli_query($conn ,"INSERT INTO `users`(`id`, `username`, `Email`, `password`, `Role`, `Gender`, `PHONE`) VALUES ('','$name','$email', '$pass', '$role','$gender','$phone')" );
  
                                                 


                   header("Location:users.php");

 


 }  

 
 
   
 
?> 

