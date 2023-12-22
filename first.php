<?php  
  include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");
 ?>


<!Doctype html>
<html>
<head><title>Fistula Treatment Center</title><meta type="utf-8">
  <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <style>
    #intro{background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;
           } 
    body{margin:0;background-color:#DDDDDD}
    label{margin-right:12px;}
    #demo{display:none;} 
  </style> 
  <style type="text/css"> body{margin:0;background-color:#DDDDDD}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
<script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
<script type="text/javascript" src="datatables.js"></script>

<link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
  
</head>

<body    style="overflow: scroll; background-color:#DDDDDD;" onload="myFunction()" >


<img  id="loader"   src="images/uog.jpg">
    <div style="display:none;" id="myDiv" class="animate-bottom">
  <div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="first.php"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a>
    
   <div id="sec" style="display:inline;padding-top:19px">
  
  <a href="regg.php" style="font-weight: bolder;" >   ADD NEW PATIENT<img  src="images/Add.jpg" width="20px" height="20px" ><label for="demo" style="margin-bottom:14px;font-size:20px;margin-left:10px"></label><input type="search" name="srch" id="demo"   style="margin:6px" placeholder="search" length="12px" ></a>
       
  </div>
  <a   style="float:Right; text-decoration: none; margin-right: 12%;" href="logout.php" >  <h4>LOG OUT</h4> </a>
  
  </div>

<div class="container">
 <h2>Registered patient list</h2>
    <br>
    <br>
    <table id="developers" class="display" width="100%" cellspacing="0">
        <thead style="background-color:white;">
            <tr>
                <th>MRN</th>
                <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Age</th>
        <th>region</th>
        
             
               
            </tr>
        </thead>    
      
        
    </table>




</body>

</html> 
  