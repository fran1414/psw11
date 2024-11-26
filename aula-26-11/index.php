
<?php
$var="Bill Gates";
$tipo= gettype($var);
echo "$var .($tipo)<br>";
$var = 12;
$tipo = gettype($var);
echo "$var ($tipo)<br>";
$var=3.1415;
$tipo =gettype($var);
echo "$var ($tipo)<br>";
$var =true;
$tipo= gettype($var);
echo"$var ($tipo)<br>";
?>
<?php 
$var=null;
if(is_null($var)){
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
$var = false;
if(is_bool($var)){
    echo"Variavel \$var é real!";
}
$nota= array(1, 2, 3, 4, 5, 6);
echo"br";
echo $nota[1];
echo"br";
echo $nota[2];
echo"br";
echo $nota[3];
echo"br";
echo $nota[4];
echo"br";
echo $nota[5];
echo"br";
echo $nota[6];
?>