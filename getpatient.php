<?php include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");

     
$output= array();
$sql = "SELECT * FROM patient ";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'MRN',
	1 => 'fname',
	2 => 'lname',
	3 => 'gender',
	4 => 'age',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE fname like '%".$search_value."%'";
	$sql .= " OR lname like '%".$search_value."%'";
	$sql .= " OR gender like '%".$search_value."%'";
	$sql .= " OR age like '%".$search_value."%'";
	$sql .= " OR MRN like '%".$search_value."%'";
	
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY MRN desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($conn,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] =  $row['MRN'];   
	$sub_array[] = $row['fname'];
	$sub_array[] = $row['lname'];
	$sub_array[] = $row['gender'];
	$sub_array[] = $row['age'];
	$ID = $row['MRN'];
	$sub_array[] = "<a  href='consultation.php?MRN=$ID'>  <p > New Consultation </p>"."</a>";
	$data[] = $sub_array;
   }

 $output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);


?>  

