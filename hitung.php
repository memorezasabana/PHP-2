<?php
$jari = $_POST["jari"];
$sisi = $_POST["sisi"];
$tinggi = $_POST["tinggi"];
$phi = 3.14;


if ($_POST["submit"] == "LUAS"){
    $hasil = $phi * $jari *($jari+$sisi);
    echo "<h4>LUAS PERMUKAAN KERUCUT</h4>";
    echo "<h4>$phi x $jari x ($jari + $sisi) = $hasil<h4>";
}
else if($_POST["submit"] == "VOLUME"){
    $hasil = 1/3 * $phi * $jari * $jari  *$tinggi ;
    echo "<h4>VOLUME KERUCUT</h4>";
    echo "<h4>1/3 x $phi x $jari x $jari x $tinggi = $hasil<h4>";
}

?>