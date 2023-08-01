<?php

require("config.php");
require('fpdf184/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','b',12);


$display_data = array('EmpId'=>'EmpId','EmpName'=>'EmpName','EmpDepartment'=>'EmpDepartment','EmpRegDate'=>'EmpRegDate');

$res = mysqli_query($con,"SELECT EmpId, EmpName, EmpDepartment, EmpRegDate from tblemployee");
$heading = mysqli_query($con,"SHOW columns FROM tblemployee");

foreach($heading as $head){
    $pdf->Cell(40,12,$display_data[$head['Field']],1);
}

foreach($res as $row){
    $pdf->Ln();
    foreach($row as $column){
        $pdf->Cell(40,12,$column,1);
    }
}

$pdf->Output();


?>