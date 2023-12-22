<?php  
  include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");  ?>

<title>consultation</title>
<link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
    <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <link rel="stylesheet" type="text/css" href="table.css">

<style type="text/css">
	 body{background-color:#DDDDDD}
</style>


<body    style="overflow: scroll;" onload="myFunction()" style="margin:0;" style="overflow: scroll;">


<img  id="loader"   src="images/uog.jpg">
    <div style="display:none;" id="myDiv" class="animate-bottom">
 
<div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="fistula_consultation.php"><button id="btn" style="  margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 
    <a class="active" style="background-color:white" href="#observation"><h2 style="color:black">OBSERVATION</h2></a>
    <a href="#orders"> <h2 style="color:black">ORDERS</h2>  </a>
  <a href="#medication"> <h2 style="color:black">MEDICATION</h2> </a>
  

</div>  

        <?php   


                    if(isset($_POST['save'])) {  
                       
                       $id = $_GET['MRN'];
                         $date = $_POST["date"];
                          $bp = $_POST["bp"];
                           $wt = $_POST["wt"];
                            $rr = $_POST["rr"];
                             $bg = $_POST["bg"];
                              $cc = $_POST["cc"];
                               $hh = $_POST["hh"];
                                $dd = $_POST["dd"];

        mysqli_query($conn, "INSERT INTO `fitula_patient_visit`(`id`, `visit date`, `MRN`, `bp`, `weight`, `RR`, `blood group`, `chief_compliant`, `history`, `diagnosis`) VALUES ('','$date','$id','$bp','$wt','$rr','$bg','$cc','$hh','$dd')");

if(alert("history saved sucessfully")) {
  header("Location:fistula_consultation.php?alert=sucessfull");



                    }

}



            ?>








<form action=""   method="POST" >  

	<fieldset>
	
      <fieldset>
      	 <legend> <h2>Vital Sign</h2>   </legend>
      	        <label for="vd">Visit date</label>

                    <input type="date"  id="vd" required name="date">

                <label for="bp">Blood pressure </label>
                <input type="number" id="bp" name="bp"> 


               <label for="wt">Weight(KG) </label>
                <input type="number" id="wt" name="wt"> 
                <br> <br>
            <label for="rr">Respiratory rate </label>
                <input type="number" id="rr" name="rr"> 
               <label for="bg">Bloodgroup</label>

             <select id="bg"  name="bg" >  
                      <option value="A+">A+</option> 
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
             </select>
<br> 

      </fieldset> 


   <fieldset>
   	
              <legend> <h2> History</h2>    </legend>

         <label for="cc">Chief Compliant</label> 
         <input type="textarea" id="cc" name="cc">

<label for="hh">History Note</label> 
         <input type="textarea" id="hh" name="hh">
<label for="dd">Diagnosis</label> 
         <input type="text" id="dd" name="dd">



   </fieldset> 
   <br>

             <input style="float:right;margin-right:20%;padding: 15px 20px;border-radius:10px;background-color:darkgreen;color:white;" value="Save"  type="submit" name="save">
</fieldset>

</form>  

</div>
</body>