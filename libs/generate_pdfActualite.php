<?php
//include connection file 

include "../Controller/actualiteC.php";
require('fpdf.php');



$actualiteC=new actualiteC();
$listeactualite=$actualiteC->afficherActualite();

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
$pdf->Cell(0, 10, 'Liste Des Actualites', 'TB', 1, 'C');
//$pdf->Cell(0, 10, 'N°:', 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, " equipe codebrewers  : \n");

//$pdf->Write($h, $retrait . "L'élève : ");


foreach($listeactualite as $Actualite){
    $image = $Actualite['ImageActualite']; // source iamge


//Ecriture en Gras-Italique-Souligné(U)
//$pdf->SetFont('', 'BIU');
//$pdf->Write($h, "aaaaaaa" . "\n");

//Ecriture normal
$pdf->SetFont('', '');

//$pdf->Write($h, "aaaa" . "Né (e) Le : " . "aaaa" . " À : " . "aaa" . "\n");

$pdf->Write($h, $retrait . " .ID  : " .$Actualite['IdActualite']. " \n");

$pdf->Write($h, $retrait . " .Titre  : " .$Actualite['TitreActualite']. " \n");

$pdf->Write($h, $retrait . " .Date  : " .$Actualite['DateActualite']." \n");

$pdf->Write($h, $retrait . " .Descreption  : " .$Actualite['DescriptionActualite'] . " \n");

$pdf->Write($h, $retrait . " .Image src  :  ../assets/img/".$image. " \n");

$pdf->Write($h, " _______________________________________________________________ \n");
//$pdf->Write($h, "La présente attestation est délivrée à l'intéressé Pour servir et valoir ce que de droit. \n");


/*
// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 8, "Le directeur pédagogique de l'établissement", 1, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 5, "Mr LAHCEN ABOUSALIH", 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C'); // LR Left-Right
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LRB', 1, 'C'); // LRB : Left-Right-Bottom (Bas)*/
}
$pdf->Cell(0, 5, 'Fait à Tunis Le :' . date('d/m/Y'), 0, 1, 'C');
$pdf->Cell(0, 5, 'ALL RIGHTS RESERVED CODEBREWERS ©', 0, 5, 'C');
$pdf->Cell(0, 5, '2021/2022', 0, 5, 'C');


//Afficher le pdf
$pdf->Output('', '', true);

?>