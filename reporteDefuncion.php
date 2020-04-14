<?php 
include 'conexion.php';
include 'plantillaDefuncion.php';

$query="SELECT Id_defuncion, D_nombre, D_apellidos, D_causa, D_medico, D_cirugias FROM tdefuncion";
$resultado = $mysqli->query($query);

 $pdf = new PDF();
$pdf->AliasNbPages();
 $pdf->AddPage();

$pdf->SetFillColor(232,232,232);
 $pdf->SetFont('Arial', 'B', 9);
 $pdf->Cell(10,6, 'ID',1,0, 'C',1);
 $pdf->Cell(20,6, 'Nombre',1,0, 'C',1);
  $pdf->Cell(35,6, 'Apellidos',1,0, 'C',1);
   $pdf->Cell(25,6, 'Causa',1,0, 'C',1);
 $pdf->Cell(35,6, 'Dr. responsable',1,0, 'C',1);
 $pdf->Cell(40,6, 'Cirugias Practicadas',1,1, 'C',1);

 $pdf->SetFont('Arial', '', 8);

while ($row =$resultado->fetch_assoc()) {
 $pdf->Cell(10,6,$row['Id_defuncion'],1,0, 'C');
 $pdf->Cell(20,6, $row['D_nombre'],1,0, 'C');
  $pdf->Cell(35,6,$row['D_apellidos'],1,0, 'C');
   $pdf->Cell(25,6,$row['D_causa'],1,0, 'C');
 $pdf->Cell(35,6,$row['D_medico'],1,0, 'C');
 $pdf->Cell(40,6, $row['D_cirugias'],1,1, 'C');


}
 $pdf->Output();



?>