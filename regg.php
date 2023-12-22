<!Doctype html>
<html>
 <head>
   <title>Registration</title>
   <link rel="stylesheet" type="text/css" href="table.css">
   <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
    <link rel="icon" type="image/jpg" href="images/uog.jpg">

   <style>
      #intro{background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;
           }  
      tr{text-align:right;}
      input{padding-left:100px;}
      fieldset{margin:10px;}
      body{background-color:#DDDDDD}
      legend(background-color:white;)
     div{padding-top:6px;background-color:#DDDDDD;}
   </style>
 </head>
 <body    style="overflow: scroll;" onload="myFunction()" style="margin:0;" style="overflow: scroll;">


<img  id="loader"   src="images/uog.jpg">
    <div style="display:none;" id="myDiv" class="animate-bottom">
<div  id="intro">
<a href="first.php" id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.jpg" width="40px" height="40px" > </a> 

  <a   style="float:Right; text-decoration: none; margin-right: 12%;" href="logout.php" >  <h2>LOG OUT</h2> </a>
</div>   
<form action="reg.php" method="POST">
  <fieldset>

    <fieldset>
    <legend>NEW PATIENT</legend> 

    <table border="0">
      <tr>
          <td>MRN</td>
          
          <td><input  type="number" name="mrn" width="2px" required placeholder="የካርድ ቁቲር"></td></tr>
      <tr>
          <td>first Name</td>
          <td><input type="text" name="fname" width="20px" required placeholder="የመጀመሪያ ስም" ></td></tr>
      <tr>
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="lname" width="20px" required placeholder="የአባት ስም"></td></tr>
      <tr>
          <td>Gender</td>
          <td><select required name="gender" style="width: 200px;"> <option value="male"> Male</option> 
            <option value="female"> Female</option></select></td></tr>
      <tr><td>Age</td>
          <td><input type="number" name="age" width="20px" required placeholder="እድሜ"></td></tr>
      
    </table>     
</fieldset>  
<fieldset>
    <legend>ADDRESS INFORMATION</legend>
    <table border="0" style="float:left">
      <tr>
          <td>Region</td>
          <td><input type="text" name="region" width="2px" placeholder="ክልል"></td></tr>
      <tr>
          <td>Woreda</td>
          <td><input type="text" name="woreda" width="20px" placeholder="ወረዳ"></td></tr>
      <tr>
          <td>kebele</td>
          <td><input type="number" name="kebele" width="20px" placeholder="ቀበሌ"></td></tr>
      
    </table> 
  
</fieldset> 

 
  <input type="submit" name="add" value="Save" style="float:right;margin-right:20%;padding: 15px 20px;border-radius:20px;background-color:#1D94CF;color:white;">
</fieldset>
</form> 
</div>
 </body>

</html>