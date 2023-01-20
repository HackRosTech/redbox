<?php


$qrCode = (new \Da\QrCode\QrCode('https://www.youtube.com/'))
    ->setSize(250)
    ->setMargin(5);

echo '<img src="' . $qrCode->writeDataUri() . '">';
