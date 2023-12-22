<?php 

include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula"); 




if (isset($_POST['add'])) {
   // code...


      $id = $_POST['hidden'];
         $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $role = $_POST["role"];
      $gender= $_POST["gender"];
      $phone = $_POST["phone"];

     
  
                           
  $update = mysqli_query($conn , "update  users set username = '$name' , Email = '$email' , password ='$pass' , Role = '$role', gender = '$gender' , PHONE = '$phone' where id = '$id' ");
$err = "the user updated successfully";


  if($update) {

echo'<script type = "text/javascript"> alert("' .$err . '"); </script>'; 
 
 

  } else {

   echo "the user not updated";
  }

}


       


?>