


	<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script> 
   <link rel="icon" type="image/jpg" href="images/uog.jpg">
     <style type="text/css">
          form{
               background-color: rgb(12, 0, 0,0.5);
          }
          body {
              
               background-repeat: none;
               background-image: url('images/uog2.jpg');
           }
     </style>
</head>
<body style="overflow: scroll;" onload="myFunction()" style="margin:0;">
  
  <img  id="loader"   src="images/uog.jpg">
    <div style="display:none;" id="myDiv" class="animate-bottom">

      <form action="login.php" method="post">

          <h1 style="color: white;">Fistula Treatment Center</h1>
     	<h2 style="color: white;">LOGIN PAGE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style="color: white;" >User Name</label>
     	<input type="text" name="uname" required placeholder="User Name"><br>

     	<label style="color: white;">Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
          <label style="color: white;">Role</label>
     	<select name="role" style="width: 95%;display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;"> <option value="admin" >Admin </option> 
          <option  value="clinician">Clinician </option>
          <option value="data clerk">Data clerck</option></select>

     	<button  type="submit" name="login">  Login </button>
          
     </form>
</div>
</body>
</html>