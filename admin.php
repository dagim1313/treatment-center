<?php
include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");
?>

 


    <title>admin page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="loader.css">
   <script type="text/javascript" src="loader.js" ></script>
   <link rel="icon" type="image/jpg" href="images/uog.jpg">
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />

 
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
  </style> 

  
<body style="overflow: scroll; background-color:#DDDDDD; "   onload="myFunction()"  style="overflow: scroll;"> 

  <img  id="loader"   src="images/uog.jpg">
   
   <div style="display:none;" id="myDiv" class="animate-bottom">
  
<div id="intro" class="topnav"  style="background-color:#FFDCB6;
           Padding-bottom:12px;
           Padding-top:12px;">
    <a href="admin.html"><button id="btn" style="margin-left:12px;background-color:#EDC6B1;border:none;" ><img src="images/Home.JPG" width="40px" height="40px" ></button></a> 
<a   style="float:Right; text-decoration: none; background-color: white; margin-right: 12%;" href="logout.php" >  <h4 style="color:blue">LOG OUT</h4> </a>
</div> 

<div class="container-fluid">
  <fieldset>
   <legend> <h2 class="text-center">Currently Added Users</h2></legend> 
    


    <div class="row">
      <div class="container">
        <div class="btnAdd">
          <a href="users.php" class="btn btn-success btn-sm"><h4> Add New User </h4></a>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table id="example" class="table">
              <thead style="background-color: white">
                <th>User Id</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Gender</th>
                <th>Edite</th> 
                <th>delete</th>
              </thead> 
              <tbody style="background-color: white">
                
              </tbody>
             
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
          $(nRow).attr('userid', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },
 
        ]
      });
    });
    
    

    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete this User ? ")) {
        $.ajax({
          url: "delete_user.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }



    })
  </script>

  </div> 



</body> 


</html>
