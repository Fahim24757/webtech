<?php
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "1. Area = $area, Perimeter = $perimeter <br>";


$amount = 1000;
$vat = 0.15 * $amount;
echo "2. VAT on $amount = $vat <br>";


$number = 7;
if($number % 2 == 0){
    echo "3. $number is Even <br>";
} else {
    echo "3. $number is Odd <br>";
}


$a = 12; $b = 45; $c = 30;
if($a >= $b && $a >= $c){
    $largest = $a;
} elseif($b >= $a && $b >= $c){
    $largest = $b;
} else {
    $largest = $c;
}
echo "4. Largest number = $largest <br>";


echo "5. Odd numbers between 10 and 100:<br>";
for($i=10; $i<=100; $i++){
    if($i % 2 != 0){
        echo $i . " ";
    }
}
echo "<br>";


$arr = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;
foreach($arr as $val){
    if($val == $search){
        $found = true;
        break;
    }
}
if($found){
    echo "6. $search found in array<br>";
} else {
    echo "6. $search not found<br>";
}



echo "7. Shapes:<br>";
for($i=1; $i<=3; $i++){
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


for($i=3; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo $j;
    }
    echo "<br>";
}
echo "<br>";


$letters = array("A", "B C", "D E F");
foreach($letters as $row){
    echo $row . "<br>";
}


echo "8. 2D Array Shapes:<br>";
$arr2D = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);


for($i=3; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo $j;
    }
    echo "<br>";
}
echo "<br>";


for($i=0; $i<count($arr2D); $i++){
    for($j=0; $j<count($arr2D[$i]); $j++){
        if(is_string($arr2D[$i][$j])){
            echo $arr2D[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>
