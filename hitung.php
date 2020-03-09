<?php
function luas_kerucut($r,$s){
    return 3.14 * $r *($r+$s);
}
function volume_kerucut($r,$t){
    return 3.14 * $r *$r*$t;
}
$jari = $_POST["jari"];
$sisi = $_POST["sisi"];
$tinggi = $_POST["tinggi"];
if ($_POST["submit"] == "LUAS"){
    echo "<h4>LUAS PERMUKAAN KERUCUT</h4>";
    echo "<h4>3.14 x $jari x ($jari + $sisi) = "; echo luas_kerucut($jari,$sisi);
}
else if($_POST["submit"] == "VOLUME"){
    echo "<h4>VOLUME KERUCUT</h4>";
    echo "<h4>1/3 x 3.14 x $jari x $jari x $tinggi = "; echo volume_kerucut($jari,$sisi);
}

?>
