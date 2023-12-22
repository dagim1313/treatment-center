 <?php include_once ("dbcon.php"); 
     mysqli_select_db($conn ,"fistula");

$output= array();
$sql = "SELECT * FROM users ";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'username',
	2 => 'Email',
	3 => 'Role',
	4 => 'Gender',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE username like '%".$search_value."%'";
	$sql .= " OR Email like '%".$search_value."%'";
	$sql .= " OR Role like '%".$search_value."%'";
	$sql .= " OR Gender like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
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
	$sub_array[] = $row['id'];
	$sub_array[] = $row['username'];
	$sub_array[] = $row['Email'];
	$sub_array[] = $row['Role'];
	$sub_array[] = $row['Gender'];
	$ID = $row['id'];
	$sub_array[] =  "<a  href='edite.php?id=$ID'>  <p > Edite </p>"."</a>"; 
	$sub_array[] = ' <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>'; 
	$data[] = $sub_array;
   }

 $output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
