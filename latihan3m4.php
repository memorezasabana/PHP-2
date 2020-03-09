<?php
function head(){
    echo '
    <link rel="stylesheet" type"text/css" href="style/style.css">
    <link rel="stylesheet" type"text/css" href="style/font-awesome.css"> ';
}
//pemanggilan fungsi
function luas_lingkaran($jari){
    return 3.14*$jari*$jari;
}
$r = 10;
echo luas_lingkaran($r);
?>
