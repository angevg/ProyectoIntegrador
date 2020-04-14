<?php 
include 'conexion.php';
include 'plantillaTraslado.php';

$query="SELECT Id_traslado, T_nombre, T_apeliidos, T_estado, T_dias, T_medico, T_centro FROM ttraslado";
$resultado = $mysqli->query($query);

 $pdf = new PDF();
$pdf->AliasNbPages();
 $pdf->AddPage();

$pdf->SetFillColor(232,232,232);
 $pdf->SetFont('Arial', 'B', 9);
 $pdf->Cell(10,6, 'ID',1,0, 'C',1);
 $pdf->Cell(20,6, 'Nombre',1,0, 'C',1);
  $pdf->Cell(35,6, 'Apellidos',1,0, 'C',1);
   $pdf->Cell(25,6, 'Estado',1,0, 'C',1);
   $pdf->Cell(35,6, 'Dias Hospitalizado',1,0, 'C',1);
 $pdf->Cell(30,6, 'Dr. responsable',1,0, 'C',1);
 $pdf->Cell(30,6, 'Centro trasladado',1,1, 'C',1);

 $pdf->SetFont('Arial', '', 8);

while ($row =$resultado->fetch_assoc()) {
 $pdf->Cell(10,6,$row['Id_traslado'],1,0, 'C');
 $pdf->Cell(20,6, $row['T_nombre'],1,0, 'C');
  $pdf->Cell(35,6,$row['T_apeliidos'],1,0, 'C');
   $pdf->Cell(25,6,$row['T_estado'],1,0, 'C');
 $pdf->Cell(35,6,$row['T_dias'],1,0, 'C');
 $pdf->Cell(30,6,$row['T_medico'],1,0, 'C');
 $pdf->Cell(30,6, $row['T_centro'],1,1, 'C');


}
 $pdf->Output();



?>