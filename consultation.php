<?php
include_once ("dbcon.php"); 

     mysqli_select_db($conn ,"fistula");
?>

   <title>clinical page</title>
   <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
   <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  

  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <style type="text/css"> 


   body{margin:0;background-color:#DDDDDD}</style>
  

<body   onload="myFunction()"  style="overflow: scroll;"> 

  <img  id="loader"   src="images/uog.jpg">
   
   <div style="display:none;" id="myDiv" class="animate-bottom">
  
<div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="clinical.html"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 
    <div   class="col">
 <?php   $id = $_GET['MRN'];  echo   "<a   href='patient.php?MRN=$id'>  <p > <h2>Start Consultation </h2> </p>"."</a>";  ?>   </div>
 <a   style="float:Right; text-decoration: none; background-color: white; margin-right: 12%;" href="logout.php" >  <h4 style="color:blue">LOG OUT</h4> </a>
</div>  


  <p  style="background-color:red;">   </p>
             <?php 
    $id = $_GET['MRN'];

  

 $sql = "SELECT * FROM patient where MRN = '$id' ";

$result  = mysqli_query($conn , $sql);
$selct  =   "  SELECT `fv`.`visit date`, `patient`.`MRN`,  `fv`.`bp`, `fv`.`weight`, `fv`.`RR`, `fv`.`history`, `fv`.`chief_compliant`, `fv`.`diagnosis`
FROM `fitula_patient_visit` as 'fv' , 'patient' as 'patient' where `patient`.`MRN`=$id "; 



$select = "SELECT `fitula_patient_visit`.`visit date`, `patient`.`MRN`, `fitula_patient_visit`.`bp`, `fitula_patient_visit`.`weight`, `fitula_patient_visit`.`RR`, `fitula_patient_visit`.`blood group`, `fitula_patient_visit`.`history`, `fitula_patient_visit`.`chief_compliant`, `fitula_patient_visit`.`diagnosis`
FROM `fitula_patient_visit` 
  LEFT JOIN `patient` ON `fitula_patient_visit`.`MRN` = `patient`.`MRN` where `patient`.`MRN`=$id;";

$history  = mysqli_query($conn , $select);

 while($row = Mysqli_fetch_array($result)) {

               ?> 

<div class="container-fluid">
  <fieldset> 

   <legend> 
     
    <h2 class="text-center"> <?php echo $row['fname']; echo " "; echo $row['lname']; ?> History</h2></legend> 
    <?php } ?>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table id="example" class="table">
              <thead style="background-color: white">
               <th>Visit date</th>
                <th>MRN</th>
                
                
                <th>BP</th>
                <th>weight</th>
                <th>RR</th>
                <th>Blood group</th>
                <th>History</th>
                <th>Chief compliant</th>
                <th>Diagnosis</th>

              </thead>   




              <?php  


 while($roww = Mysqli_fetch_array($history)) {

               
               ?>
              <tbody style="background-color: white">
                
                       <tr>
                         <td> <?php echo $roww['visit date'] ?>  </td>
                         <td> <?php echo $roww['MRN'] ?> </td>
                         
                         <td> <?php echo $roww['bp'] ?> </td>
                         <td> <?php echo $roww['weight'] ?> </td>
                         
                         <td>  <?php echo $roww['RR'] ?></td>
                         <td>  <?php echo $roww['blood group'] ?></td>
                         <td>  <?php echo $roww['history'] ?></td>
                         <td> <?php echo $roww['chief_compliant'] ?> </td>
                         <td>  <?php echo $roww['diagnosis'] ?></td>
                        


                       </tr>

<?php } ?>

              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div> 

</fieldset>

  
  
  
  </div>
  

</body>

</html>