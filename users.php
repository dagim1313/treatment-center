
 <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
    <link rel="icon" type="image/jpg" href="images/uog.jpg">
<style>
     tr{text-align:right;}
     table{padding-left:100px;}
     fieldset{margin:10px;}
     body{background-color:#DDDDDD}
     legend(background-color:white;)
     div{padding-top:6px;background-color:#DDDDDD;}
   </style>
  <body    style="overflow: scroll;" onload="myFunction()" style="margin:0;" style="overflow: scroll;">


<img  id="loader"   src="images/uog.jpg">
    <div style="display:none;" id="myDiv" class="animate-bottom">

<div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="admin.php"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 

</div>
    <form action="adduser.php" method="POST"> 
   <fieldset> 
   <fieldset style="text-align: center"> 

         <legend><h1>Add New User </h1> </legend>
        
        <div>
            <label for="temp">username </lable>
             <input type="text" required="enter your name" id="temp" name="name" width="2px" >

        </div><br>  
        <div>
            <label for="temp">Email addresss </lable>
             <input type="email" required="" id="temp" name="email" width="2px">

        </div><br> 
        <div>
            <label for="temp">Password </lable>
             <input type="password" id="temp" required name="pass" width="2px">

        </div><br>  
        <div>
            <label for="temp">Role </lable>
             <select id="temp" style="width: 200px;"  name="role" required> <option value="admin">Admin </option> 
             <option value="data clerk"> Data clerck </option> 
             <option value="clinician"> clinician </option> </select>

        </div><br> 
        <div>
            <label for="temp">Gender </lable>
             <select id="temp" style="width: 200px;"  name="gender" required>               
                <option value="male" >Male </option> 
             <option value="female" > Female </option> 
              </select>

        </div><br> 
        
        <div>
            <label for="temp">Phone number </lable>
             <input type="number" id="temp" name="phone" width="2px">

        </div><br>  <br>

    </fieldset>

    <input type="submit" value="Add user" name="add"   style="float:right;margin-right:20%;padding: 15px 20px;border-radius:20px;background-color:#1D94CF;color:white;">
    </fieldset>
</form>
</div>
</body>