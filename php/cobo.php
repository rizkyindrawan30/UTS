<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    echo "Bulan Sekarang ".$namabln." ada ".$hari." hari<br>";

    $nilai = 75;
    if ($nilai>=90){
        echo "Niali Anda adalah A";
    }
    elseif($nilai>75){
        echo "Niali Anda adalah B";
    }
    elseif ($nilai>=60){
        echo "Niali Anda adalah C";
    }
    elseif ($nilai>=50){
        echo "Niali Anda adalah D";
    }
    elseif ($nilai>=0){
        echo "Niali Anda adalah E";
    }
?>
</body>
</html>