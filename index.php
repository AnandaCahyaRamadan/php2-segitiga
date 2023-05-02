<?php
//fungsi seleksi kondisi
function seleksi($segitiga = 'downsideRight'){
    if ($segitiga == 'all'){
        downsideRight();
    }
    else {
        upsideLeft();
        downsideLeft();
        upsideRight();
        downsideRight();

    }
}
seleksi();

echo "<br>";
echo "===============================";
echo "<br>";



// Triangle upside left
function upsideLeft($simbol = " * ", $row = 5){
    for ($a = 1 ; $a <= $row ; $a++){
        for ($b = 1 ; $b <= $a ; $b++){
            echo $simbol;
        }
        echo "<br>";
    }
    echo " <br>";
}
upsideLeft($simbol = "  s  ", $row = 6);




// Triangle downside left
function downsideLeft($simbol = " * ", $row = 5){
    for ($i = $row ; $i >=1 ; $i--){
        for ($j = 1 ; $j <= $i ; $j++){
            echo $simbol;
        }
        echo "<br>";
    }
    echo " <br>";
}
downsideLeft($simbol = " @ ", $row = 10);





// Triangle upside right
function upsideRight($simbol = "*", $row = 5){
    for($a=1; $a<=$row; $a++){
        for($c=$row; $c>=$a; $c-=1){
            echo " &nbsp";
        }
        for($i=1; $i<=$a; $i++){
            echo $simbol;
        }
        echo "<br>";
    }
    echo " <br> ";
}
upsideRight($simbol = "#", $row = 9);



// Triangle downside right
function downsideRight($simbol = "*", $row = 5){
    for($a=1; $a<=$row; $a++){
        for($i=1; $i<=$a; $i++){
            echo " &nbsp";
        }
        for($c=$row; $c>=$a; $c-=1){
            echo $simbol;
        }
        echo "<br>";
    }
}
downsideRight($simbol = "*", $row = 7);
?>



