<?php

echo "<h4>Menghitung luas lingkaran.</h4>";

function hitungluaslingkaran ($r) {
    echo "Jari-jari = $r cm <br>";
    echo "Luas lingkaran = " . 3.14 * $r * $r . "cm <br>";
    echo "<hr>";
}

hitungluaslingkaran (14);

echo "<h4>Menghitung keliling lingkaran.</h4>";

function hitungkelilinglingkaran ($r) {
    echo "Jari-jari = $r cm <br>";
    echo "Keliling lingkaran = " . 3.14 * $r * 2 . "cm <br>";
    echo "<hr>";
}

hitungkelilinglingkaran (23);

?>