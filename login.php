<?php 
         session_start(); 
include_once ("dbcon.php"); 
       mysqli_select_db($conn ,"fistula"); 

       if(isset($_POST["login"])) {

              if (!empty($_POST['uname'] && !empty($_POST['password'] ) )) {
      
            $uname=$_POST['uname'];
            $pass=$_POST['password'];
            $role =$_POST['role'];
      $admin = 'admin';  
      $data_clerck = 'data clerk';  
      $clinician = 'clinician';  

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass' AND Role='$role'";
        $result = mysqli_query($conn, $sql); 

        if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass && $row['Role'] === $role) {

                $_SESSION['user_name'] = $row['username'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['Role'] = $row['Role'];
                         if($row['Role']==$admin)  {  
                            header("Location: admin.html");

                         } elseif($row['Role']==$data_clerck) {
                            header("Location: regitration.html");
                         } 	elseif($row['Role']==$clinician) {
                            header("Location: clinical.html");
                         }  

            }

       }else{ 
        header("Location: index.php?error=Incorrect User name or password");
        
       }
    } else{ 
        header("Location: index.php?error=please enter your username and password");
        
       }

       } else{ 
        header("Location: index.php?error=Incorect User name or password");
        
       }




?>