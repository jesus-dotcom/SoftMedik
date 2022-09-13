<?php
include'seguridad.php';
require 'fpdf/fpdf.php';
require 'conexion.php';
if (isset($_GET["id"])) {
	$id = $_GET["id"];

    $selectCita = "SELECT citaservicios.*,paciente.*,cargo.*,servicio.*,pago.* FROM citaservicios,paciente,profesional,cargo,servicio,pago WHERE citaservicios.Paciente_idPaciente=paciente.idPaciente AND paciente.idPaciente=$id ORDER BY citaservicios.idCitaServicios DESC LIMIT 1";

    $queryCita = $conexion->query($selectCita);
    $fetchCita = mysqli_fetch_array($queryCita);

    //Sacamos primero los id para las otras tablas
    $idServicio = $fetchCita["Servicio_idServicio"];
    $idPago = $fetchCita["pago"];

    //Ahora los otros datos de citaservicios
    $tiposervicioCita = $fetchCita["tiposervicio_idtiposervicio"];
    $fechaCita = $fetchCita["Fecha_Cita"];
    $horaCita = $fetchCita["Hora_Cita"];
    $ayunaCita = $fetchCita["Ayuna_Cita"];

    //Consulta a tabla Pacientes
    $nhisPac = $fetchCita["HistoraPaciente_idHistoraPaciente"];
    $cedPac = $fetchCita["Cedula_Paciente"];
    $nombrePac = $fetchCita["Nombre_Paciente"];
    $apellidoPac = $fetchCita["Apellidos_Paciente"];

//Consulta a tabla Profesional


//Consulta a tabla Servicios
    $selectServ = "SELECT Descrip_Servicio FROM servicio WHERE idServicio=$idServicio";
    $queryServ = $conexion->query($selectServ);
    $fetchServ = mysqli_fetch_array($queryServ);
    $tipoServ = $fetchServ["Descrip_Servicio"];

//Consulta a tabla Pago
    $selectPago = "SELECT Descrip_pago FROM pago WHERE id_pago=$idPago";
    $queryPago = $conexion->query($selectPago);
    $fetchPago = mysqli_fetch_array($queryPago);
    $descPago = $fetchPago["Descrip_pago"];


}


class PDF extends FPDF{
// Cabecera de página
    function Header(){

        // Logo
        $this->Image('vendor/bootstrap/css/img/encabezado.png',0,0,210,30);
        // Arial bold 15
        $this->SetFont('Arial','U',14);
        // Movernos a la derecha
        $this->Cell(25);
        $this->Ln(20);
        // Título
        $this->Cell(170,15,utf8_decode('Cita Del Paciente'),0,0,'C',0);
        $this->Ln(15);
    }

    function Footer(){
    // Posición: a 3 cm del final
    $this->SetY(-20);
    $this->Cell(180,0,'____________________________',0,1,'C',0); 
    $this->SetFont('Arial','B',12);
    $this->Cell(180,10,utf8_decode('SELLO DE LA INSTITUCIÓN'),0,1,'C',0);
    $this->SetFont('Arial','I',8);
    $this->Cell(180,10,utf8_decode('San Cristobal - Estado Táchira'),0,1,'C',0);
    }
}


$pdf = new PDF('L','mm',array(200,150));
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('N° de Historia: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(15,5,utf8_decode($nhisPac),0,0,'L',0);

$pdf->Ln(8);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Nombres: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($nombrePac),0,0,'L',0);

$pdf->Cell(30);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Apellidos: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($apellidoPac),0,0,'L',0);

$pdf->Ln(8);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Servicio: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($tipoServ),0,0,'L',0);

$pdf->Cell(30);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Tipo De Servicio: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($tiposervicioCita),0,0,'L',0);

$pdf->Ln(8);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Ayuna: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($ayunaCita),0,0,'L',0);

$pdf->Cell(30);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Fecha De La Cita: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($fechaCita),0,0,'L',0);

$pdf->Ln(8);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Hora De La Cita: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($horaCita),0,0,'L',0);

$pdf->Cell(30);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,utf8_decode('Costo De La Cita: '),0,0,'L',0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(20,5,utf8_decode($descPago.' Bs'),0,0,'L',0);


$pdf->Close();
$pdf->Output('I','cita.pdf');

?>