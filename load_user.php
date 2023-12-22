<?php
include_once("dbcon.php");
$sql_query = "SELECT username, email, role, gender FROM users LIMIT 20";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developers_record = array();
while( $developer = mysqli_fetch_assoc($resultset) ) {
	$developers_record[] = $developer;
}
$developer_data = array(
	"sEcho" => 1,
"iTotalRecords" => count($developers_record),
"iTotalDisplayRecords" => count($developers_record),
  "aaData"=>$developers_record);

echo json_encode($developer_data);
exit;
?>