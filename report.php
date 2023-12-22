<?php 
include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");

     include_once ("fistula_common_funtion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">

<link rel="stylesheet" href="css/jquery-confirm.css">
<link rel="stylesheet" href="css/default.css" />

 <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">

 <script src="js/jquery.min.js"></script>

  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="js/adminlte.min.js"></script>
<script src="js/jquery-confirm.js"></script>

<script src="js/common_javascript_functions.js"></script>
<link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>

 <title> Fistula Report page</title>

</head>  

  <style type="text/css">
    body{background-color:#DDDDDD}
  </style>


<body style="overflow: scroll; background-color:#DDDDDD; "   onload="myFunction()"  style="overflow: scroll;"> 

  <img  id="loader"   src="images/uog.jpg">
   
   <div style="display:none;" id="myDiv" class="animate-bottom">
  <div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="admin.html"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 
<a   style="float:Right; text-decoration: none;background-color: white; margin-right: 12%;" href="logout.php" >  <h4>LOG OUT</h4> </a>
</div>
<div class="wrappier" style="background-color:#DDDDDD">
  

 
 
  <div class="content-wrapper" style="background-color:#DDDDDD">
   
    <section class="content-header" >
      
        
          <div class="col-sm-6">
            <h1 style="color: black">Reports</h1>
          </div>
        
     
    </section>

    
    <section class="content">

     
      <div class="card card-outline card-primary rounded-0 shadow">
        <div class="card-header">
          <h2 class="card-title">Visit Report</h2>

          <div class="card-tools">
            <button type="button" style="background-color: red" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i   class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            
            <?php 
            echo getDateTextBox('Start Date', 'patients_from');

            echo getDateTextBox('End Date', 'patients_to');
            ?>
          
          <div class="col-md-2">
            <label>&nbsp;</label>
            <button type="button" id="print_visits" class="btn btn-primary btn-sm btn-flat btn-block">Generate Report  PDF</button>
          </div>
          </div>
        </div>
        

<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/tempusdominus-bootstrap-4.min.js"></script>

<script>
  showMenuSelected("#mnu_reports", "#mi_reports");

  $(document).ready(function() {
    $('#patients_from, #patients_to').datetimepicker({
      format: 'L'
     });

    $("#print_visits").click(function() {
      var from = $("#patients_from").val();
      var to = $("#patients_to").val();
      
      if(from !== '' && to !== '') {
        var win = window.open("print_patients_visits.php?from=" + from 
          +"&to=" + to, "_blank");
        if(win) {
          win.focus();
        } else {
          showCustomMessage('Please allow popups.');
        }
      }
    });


p
    });

</script>
</body>
</html>