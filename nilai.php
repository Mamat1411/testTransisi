<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$value = explode(" ", $nilai);
for ($i=0; $i < count($value); $i++) { 
    echo $value[$i]." ";
}
?>