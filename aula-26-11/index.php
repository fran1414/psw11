
<?php
$var="Bill Gates";
$tipo= gettype"$var";
echo "$var .($tipo)<br>";
$var = 12
$tipo = gettype($var);
echo "$var ($tipo)<br>";
$var=3.1415;
$tipo =grttype($var);
echo "$var ($tipo)<br>";
$var =true;
$tipo= gettype($var);
echo"$var ($tipo)<br>";
?>
<?php 
if(is_null($var)0){
    echo "Varialvel"."\$var" ."é nula/vazia!"."<br>";
}
$var = "Bill GAtes";
if(is_string($var)){
    echo"Variavel \$var é uma string!<br>";
}
$var =12;
if(is_integer($var)){
    echo "Variavel \$var é um inteiro!<br>";
}
$var = false;
if(is_bool($var)){
    echo"Variavel \$var é booleana!";
}
$var =float;
if(is_bool($var)){
    echo"Variavel \$var é real!";
}