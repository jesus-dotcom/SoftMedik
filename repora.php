<?php
include 'seguridad.php';
require('fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('vendor/bootstrap/css/img/encabezado.png',0,0,210,30);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(15);
    // Título
    // Salto de línea
    $this->Ln(30);

    $this->Cell(100,10,utf8_decode('Reporte de Agendas Registradas'),1,0,'C');
    $this->Ln(20);

    $this->Cell(40,10,utf8_decode('Servicio'),1,0,'C',0);
    $this->Cell(40,10,'Tipo Servicio',1,0,'C');
    $this->Cell(40,10,'Fecha',1,0,'C');
    $this->Cell(40,10,utf8_decode('Cantidad'),1,1,'C',0);


    $this->Ln(5);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada

require 'conexion.php';

$fecha1 = $_POST["fecha1"];
$fecha2 = $_POST["fecha2"];
$consulta = "SELECT servicio.Descrip_Servicio,plan_agenda.idPlan_Agenda,plan_agenda.Servicio_idServicio,plan_agenda.tiposervicio_idtiposervicio,plan_agenda.Fecha_Agenda,plan_agenda.Cantidad_Agenda FROM plan_agenda,Servicio WHERE plan_agenda.Servicio_idServicio=servicio.idServicio and  Fecha_Agenda>='$fecha1' AND Fecha_Agenda<='$fecha2'";
$query= mysqli_query($conexion,$consulta);
    

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row = mysqli_fetch_array($query)) {
   
    $pdf->Cell(40,8,$row["Descrip_Servicio"], 1, 0, 'C', 0);
    $pdf->Cell(40,8,utf8_decode($row["tiposervicio_idtiposervicio"]), 1, 0, 'C', 0);
    $pdf->Cell(40,8,utf8_decode($row["Fecha_Agenda"]), 1, 0, 'C', 0);
    $pdf->Cell(40,8,utf8_decode($row["Cantidad_Agenda"]), 1, 1, 'C', 0);
}

$pdf->Output('D','reporte.pdf');
?>