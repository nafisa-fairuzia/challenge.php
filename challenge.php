<?php

function konversiPanjang($asal, $tujuan, $nilai)
{
    $asal = strtolower($asal);
    $tujuan = strtolower($tujuan);

    switch ($asal) {
        case 'm':
            $base = $nilai;
            break;
        case 'km':
            $base = $nilai * 1000;
            break;
        case 'cm':
            $base = $nilai / 100;
            break;
        default:
            return null; 
    }

    switch ($tujuan) {
        case 'm':
            return $base;
        case 'km':
            return $base / 1000;
        case 'cm':
            return $base * 100;
        default:
            return null; 
    }
}

echo "Hasil konversi panjang 8000 m ke cm adalah: " . konversiPanjang('cm', 'km', 8000) . " km<br>"; 
echo "Hasil konversi panjang 40 km ke m adalah: " . konversiPanjang('km', 'm', 40). " m<br>"; 
echo "Hasil konversi panjang 6 cm ke km adalah: " . konversiPanjang('m', 'cm', 6). " cm<br>"; 
?>