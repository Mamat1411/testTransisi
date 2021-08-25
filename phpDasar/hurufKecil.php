<?php
    function hurufKecil($string){
        $lowercase = strtoupper($string);
        $lowerCount = similar_text($string, $lowercase);
        echo "Jumlah huruf Kecil dari inputan ".$string." pada fungsi hurufKecil() adalah ". (strlen($lowercase) - $lowerCount);
    }

    hurufKecil("TranSISI");
?>