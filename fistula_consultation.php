<?php
include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");
?>

   <title>clinical page</title>
   <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
   <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  
  <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <style type="text/css"> body{margin:0;background-color:#DDDDDD}</style>
  

<body   onload="myFunction()"  style="overflow: scroll;"> 

  <img  id="loader"   src="images/uog.jpg">
   
   <div style="display:none;" id="myDiv" class="animate-bottom">
  
<div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="clinical.html"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 
<a   style="float:Right; text-decoration: none; background-color: white; margin-right: 12%;" href="logout.php" >  <h4>LOG OUT</h4> </a>
</div> 
<div class="container-fluid">
  <fieldset>
   <legend> <h1  style="color:green"  class="text-center">Active Patients list</h1></legend> 
    
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table id="example" class="table">
              <thead style="background-color: white">
                <th>MRN</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Consultation</th>
              </thead> 
              <tbody style="background-color: white"></tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div> 

</fieldset>

  <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('MRNm', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'getpatient.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },
 
        ]
      });
    });
              

    
  </script>

  </div>
  

</body>

</html>