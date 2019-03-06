<?php
include 'C:\xampp\htdocs\dashboard\project\SW2\fpdf\lib\fpdf.php';
include 'C:\xampp\htdocs\dashboard\project\SW2\database_class.php';
class PDF extends FPDF
{
//Page header
function Header()
{
    //Logo
   // $this->Image('logo1.png',10,8,33,20);
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Move to the right
    $this->Cell(80);
    //Title
    $this->Cell(30,10,'chief info',1,0,'C');
    //Line break
    $this->Ln(20);
}
//Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'.',0,0,'C');
}
function chief($array)
{
    $this->SetFont('','B','24');
    //$this->Cell(40,10,$event,15);
    $this->Ln();

    $this->SetXY( 10, 45 );

    $this->SetFont('','B','10');
    $this->SetFillColor(128,128,128);
    $this->SetTextColor(255);
    $this->SetDrawColor(92,92,92);
    $this->SetLineWidth(.3);

    $this->Cell(30,7,"ID",1,0,'C',true);
    $this->Cell(30,7,"UserName",1,0,'C',true);
    $this->Cell(30,7,"E-Mail",1,0,'C',true);
    $this->Cell(70,7,"City",1,0,'C',true);
    $this->Cell(30,7,"Address",1,0,'C',true);
    $this->Cell(30,7,"Date",1,0,'C',true);
    $this->Cell(30,7,"Password",1,0,'C',true);
    $this->Ln();
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');

   
    foreach($array as $roww)
    {
        $this->Cell(30,6, $roww['ID'] ,'LR',0,'L',$fill);
        $this->Cell(30,6, $roww['username'] ,'LR',0,'R',$fill);
        //$this->SetFont('Times','B',10);
        $this->Cell(30,6, $roww['mail'] ,'LR',0,'L',$fill);
        $this->Cell(70,6, $roww['city'] ,'LR',0,'R',$fill);
        $this->Cell(70,6, $roww['address'] ,'LR',0,'R',$fill);
        $this->Cell(70,6, $roww['date'] ,'LR',0,'R',$fill);
        $this->Cell(70,6, $roww['password'] ,'LR',0,'R',$fill);
        $this->Ln();
    }
    $this->Cell(160,0,'','T');
}
}$pdf=new PDF();
$db=new database("localhost","root","","masterchief");
$sql="select * from chief1";
$result= $db->database_query($sql);
$array=$db->database_all_array($result);
$pdf->AddPage();
$pdf->chief($array);
$pdf->SetFont("Arial", "B", "20");

$pdf->Ln(5);
$pdf->SetFont("Arial", "I", "20");
$pdf->cell(91,10,"signature :.............",0,1);

$pdf->Output();

// l error el fl database

?>