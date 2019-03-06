<?php
include "admin_class.php";

?>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>reports </title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>



<body>

<div class="table-title">
<center>
<h1> Report about chiefs </h1>
<h4>___________________________________</h4>
</center>
</div>

<table class="table-fill">
<thead>

<tr>
<th class="text-left">ID</th>
<th class="text-left">Username</th>
<th class="text-left">E-Mail</th>
<th class="text-left">City</th>
<th class="text-left">Address</th>
<th class="text-left">Date</th>
<th class="text-left">Password</th>
</tr>
 <tbody class="table-hover">

  <?php 
$admin = new admin_class();
$admin->pdf();    
    ?>
  
</table>



<center>
<h3> ____________________________________________</h3>


</center>

</body>
</head>
</html>

<?php
include 'C:\xampp\htdocs\dashboard\SW2\fpdf\lib\fpdf.php';
include_once "admin_class.php";

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    $this->Ln(30);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(65,8,'About Payment',1,0,'C' ,0);
    // Line breakb
    $this->Ln(20);
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
?>
<body>

<div class="table-title">
<center>
<h1> Report about chiefs </h1>
<h4>___________________________________</h4>
</center>
</div>

<table class="table-fill">
<thead>

<tr>
<th class="text-left">ID</th>
<th class="text-left">Username</th>
<th class="text-left">E-Mail</th>
<th class="text-left">City</th>
<th class="text-left">Address</th>
<th class="text-left">Date</th>
<th class="text-left">Password</th>
</tr>
 <tbody class="table-hover">

  <?php 
$admin = new admin_class();
$admin->pdf();    
    ?>
  
</table>



<center>
<h3> ____________________________________________</h3>


</center>

</body>

<?php

$pdf->Output();

 ?>