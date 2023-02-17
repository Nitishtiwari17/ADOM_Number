<?php 
function adomnumber(int $var){
    $square=$var*$var;
    $reverse=strrev($square);
    $squareroot=sqrt($reverse);
    $reverse=strrev($squareroot); 
    if($reverse==$var){
        echo "this is a adomnumber $var";
    } 
    else{
        echo "this is not a adomnumber $var";
    }
}
$var=adomnumber(5);
echo $var;
?>