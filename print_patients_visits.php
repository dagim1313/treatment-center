


<?php
include("./pdflib/logics-builder-pdf.php");

include 'dbcon.php';

$reportTitle = "Patients Visits";
$from = $_GET['from'];
$to = $_GET['to'];

$fromArr = explode("/", $from);
$toArr = explode("/", $to);

$fromMysql = $fromArr[2].'-'.$fromArr[0].'-'.$fromArr[1];
$toMysql = $toArr[2].'-'.$toArr[0].'-'.$toArr[1];

$pdf = new LB_PDF('L', false, $reportTitle, $from, $to);
$pdf->SetMargins(15, 10);
$pdf->AliasNbPages();
$pdf->AddPage();

$titlesArr = array('S.No', 'Visit Date', 'First Name', 'Last Name' ,
'Region', 'Blood Group', 'Diagnosis');

$pdf->SetWidths(array(15, 25, 50, 70, 30, 70 , 40));
$pdf->SetAligns(array('L', 'L', 'L', 'L', 'L', 'L' , 'L'));
// $pdf->Ln();
// $pdf->Ln();
 $pdf->Ln(15);

$pdf->AddTableHeader($titlesArr);

$query = "SELECT `fitula_patient_visit`.`visit date`, `patient`.`fname`, `patient`.`lname`, `patient`.`region`, `fitula_patient_visit`.`blood group`, `fitula_patient_visit`.`diagnosis`
FROM `fitula_patient_visit` 
	LEFT JOIN `patient` ON `fitula_patient_visit`.`MRN` = `patient`.`MRN` where `fitula_patient_visit`.`visit date` between '$fromMysql' and '$toMysql' ;";  


    

$stmt = mysqli_query($conn , $query);


   $i = 0;
while($r = Mysqli_fetch_array($stmt)) { 

	$i++;

	$data = array($i, 
		$r['visit date'],
		$r['fname'],
		$r['lname'],
		$r['region'],
		$r['blood group'],
		$r['diagnosis']
	);

	$pdf->AddRow($data);

}
$pdf->Output('print_patient_visits.pdf', 'I');
?>
