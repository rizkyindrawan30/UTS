<?php
    $kalender = CAL_GREGORIAN;
    $bln = date("m");
    $tahun = date("y");

    $hari = cal_days_in_month($kalender,$bln,$tahun);
    
    switch($bln)
    {
    case 1 : $namabln = "Januari";
    break;
    case 2 : $namabln = "Februari";
    break;
    case 3 : $namabln = "Maret";
    break;
    case 4 : $namabln = "April";
    break;
    case 5 : $namabln = "Mei";
    break;
    case 6 : $namabln = "Juni";
    break;
    case 7 : $namabln = "Juli";
    break;
    case 8 : $namabln = "Agustus";
    break;
    case 9 : $namabln = "September";
    break;
    case 10 : $namabln = "Oktober";
    break;
    case 11 : $namabln = "Nopember";
    break;
    case 12 : $namabln = "Desember";
    break;
    }
?>