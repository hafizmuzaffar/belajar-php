<?php

function tentukan_deret_geometri($isi_array)
{
    $r1 = $isi_array[1] / $isi_array[0];
    for ($i = 0; $i < count($isi_array) - 1; $i++) {
        $r2 = $isi_array[$i + 1] / $isi_array[$i];
        if ($r2 != $r1) {
            return "false<br>";
        }
    }
    return "true<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false