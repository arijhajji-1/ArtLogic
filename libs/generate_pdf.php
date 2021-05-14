<?php
//include connection file 

include "../Controller/evenementC.php";
require('fpdf.php');



$evenementC=new evenementC();
$listeevenement=$evenementC->afficherEvenement();

$pdf = new FPDF('P', 'mm', 'A5');

//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('en-tete.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 16);

// Titre
$pdf->Cell(0, 10, 'Liste Des Evenements', 'TB', 1, 'C');
//$pdf->Cell(0, 10, 'N°:', 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, " equipe codebrewers  : \n");




foreach($listeevenement as $Evenenement){
    $image = $Evenenement['ImageEvenement']; // source iamge



//Ecriture normal
$pdf->SetFont('', '');



$pdf->Write($h, $retrait . " .ID  : " .$Evenenement['IdEvenement']. " \n");

$pdf->Write($h, $retrait . " .Titre  : " .$Evenenement['TitreEvenement']. " \n");

$pdf->Write($h, $retrait . " .Lieu  : " .$Evenenement['LieuEvenement']." \n");

$pdf->Write($h, $retrait . " .Date  : " .$Evenenement['DateEvenement']." \n");

$pdf->Write($h, $retrait . " .Duree  : " .$Evenenement['DureeEvenement']."jour(s) \n");

$pdf->Write($h, $retrait . " .Descreption  : " .$Evenenement['DescriptionEvenement'] . " \n");

$pdf->Write($h, $retrait . " .Image src  :  ../assets/img/".$image. " \n");

$pdf->Write($h, " _______________________________________________________________ \n");

}
$pdf->Cell(0, 5, 'Fait à Tunis Le :' . date('d/m/Y'), 0, 1, 'C');
$pdf->Cell(0, 5, 'ALL RIGHTS RESERVED CODEBREWERS ©', 0, 5, 'C');
$pdf->Cell(0, 5, '2021/2022', 0, 5, 'C');


//Afficher le pdf
$pdf->Output('', '', true);

?>