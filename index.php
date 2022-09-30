<?php

include 'vendor/autoload.php';

$procura  = "SOC";
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('soc.pdf');

$pages  = $pdf->getPages();
foreach ($pages as $page) {
    $texdo = $page->getText();
    $rs = strpos($texdo,$procura);
    if($rs !== false){
        echo $texdo. "<br>";
        echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ <br>";
    }
   
}   