<?php

/*
  "World Traveler" Project (index.php file only)
  Chapter: Learn PHP Variables
  ---
  Task: "Write a program to calculate exactly how much cash in USD we should end up with
  after it has all been exchanged."
*/


// Starting amounts  
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

// Display starting amounts
echo "- Starting Amount -";
echo "\nRiel: " . $riel;
echo "\nKyat: " . $kyat;
echo "\nKrone: " . $krone;
echo "\nLek: " . $lek;

// Conversion rates
$riel_to_usd = 0.00025;
$kyat_to_usd = 0.00048;
$krone_to_usd = 0.094;
$lek_to_usd = 0.0093;

// Exchanged amounts
$riel_exchanged = $riel*$riel_to_usd;
$kyat_exchanged = $kyat*$kyat_to_usd;
$krone_exchanged = $krone*$krone_to_usd;
$lek_exchanged = $lek*$lek_to_usd;
$total = $riel_exchanged + $kyat_exchanged + $krone_exchanged + $lek_exchanged;

// Display gross exchange amounts
echo "\n\n- Gross Exchange Amount - \n";
echo "Riel-to-USD: " . $riel_exchanged;
echo "\nKyat-to-USD: " . $kyat_exchanged;
echo "\nKrone-to-USD: " . $krone_exchanged;
echo "\nLek-to-USD: " . $lek_exchanged;
echo "\nGross Total USD: $" . number_format($total, 2, '.', ',');

// Display exchange amounts with fees
$total -= 4;
echo "\n\n- Total USD Exchange Amount (with fees) -";
echo "\nYou received \$" . number_format($total, 2, '.', ',') . " USD back.";
