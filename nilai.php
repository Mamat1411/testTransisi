<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

//Memecah string menjadi array
$value = explode(" ", $nilai);
for ($i=0; $i < count($value); $i++) { 
    echo $value[$i]." ";
}

//Menghitung rata-rata nilai array
$average = array_sum($value)/count($value);
echo "<br>Nilai rata-rata dari array diatas adalah ".$average;

//Mengurutkan nilai array sebelum ditentukan nilai minimum dan maximum
sort($value, SORT_NUMERIC);
echo "<hr>Mengurutkan Nilai Array sebelum ditentukan nilai minimum dan maximum: ";
for ($i=0; $i < count($value); $i++) { 
    echo $value[$i]. " ";
}
?>