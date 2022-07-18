<?php
 
$a=5;
$b=10;
if ($a>$b){
    echo $a . " es mayor a " . $b;

}else {
    echo $b . " es mayor a " . $a;
}
echo "<hr>";

$n1=10;
$n2=8;
$n3=7;

if ($n1==$n2 && $n1==$n3){ //si todas las variables son iguales agregar ==
   echo "los datos son iguales";
} 

else if ($n1<$n2)
{
    if ($n1<$n3){
        echo " el menor es ".$n1;
    }else {
        echo " el menor es ".$n3;
    }


}else {
    if ($n2<$n3){
        echo " el menor es ".$n2;
    }else {
        echo " el menor es ".$n3;
    }
}


?>