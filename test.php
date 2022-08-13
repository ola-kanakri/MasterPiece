
<?php
$string = 'mom';
if ( $string === strrev($string)){
    echo 'yes';
}else {
    echo 'no';
}
?>


<?php
$string1 = 'rear';
$array1= [];
for ($i=(strlen($string1)-1); $i >= 0; $i--) {
    $array1[] .= $string1[$i];
    // array_push($array1, $string1[$i]);
}

$string1reverse = implode('',$array1);
echo $string1reverse."\n";

$resualt = $string1 === $string1reverse ? 'yes' : 'no';
echo $resualt ;
?>

