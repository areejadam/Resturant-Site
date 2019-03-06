<?php
include 'C:\xampp\htdocs\dashboard\SW2\fpdf\lib\fpdf.php';
include 'database_class.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    $this->Image('logo.png',15,20,70);

    // Logo x y 
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    $this->Ln(30);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(65,8,'About Payment',1,0,'C' ,0);
    // Line breakb
    $this->Ln(20);
$this->Rect(5, 5, 200, 287, 'D'); //For A4
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'.',0,0,'C');
}
}
$pdf=new PDF();
$pdf->AddPage();

//$pdf->SetFont("Arial", "B", "20");

//$pdf->Ln(10);

    $db = new database ("localhost","root","","masterchief");
 
 $record = $db->select("chief1");

 if (mysqli_num_rows($record) > 0)
 {
   while ($myrecord = mysqli_fetch_assoc($record))
   {

    


$pdf->SetFont("Arial", "", "20");
$pdf->Ln(10);
$pdf->cell(91,10,"ID : ".$myrecord["ID"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"Name : ".$myrecord["username"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"Mail : ".$myrecord["mail"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"address :".$myrecord["address"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"city  : ".$myrecord["city"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"password :".$myrecord["password"],0,1);
$pdf->Ln(15);
$pdf->cell(91,10,"deadline : ".$myrecord["deadline"],0,1);
$pdf->Ln(50);

$pdf->SetFont("Times", "I", "20");  
      $date2 = date("Y-m-d H:i:s.u");

$pdf->cell(91,10,"current date : ".$date2,0,1);
   $pdf->Ln(15);



$pdf->cell(91,0,"Chief signature : .............",0,1);
$pdf->Cell(100);
$pdf->cell(80,0,"Admin signature : .............",0,1,'R');

$pdf->Output();

   }
 }


?>