<?php 
$suaaltura = 1.65 ;

$jgbasket = 2.10 ;
$jgvolei  = 1.90 ;
$jgfutebol = 1.60;

if ($suaaltura > $jgbasket){
	echo " voce é jogador de basket sual altura é".$jgbasket;
	echo "<br>";
}
else if ($suaaltura > $jgvolei){
	echo "você é jogador de volei sua altura é" .$jgvolei;
	echo "<br>";
}
else if ($suaaltura > $jgfutebol){
	echo "você é jogador de futebol "; // se colocar essa varieavel vai aparecer a altura média .$jgfutebol;
	echo "<br>";
	echo "sua altura é &nbsp" .$suaaltura;
	echo " é isso ai";
}
else {
	echo "você náo é um esportista !!!";
	echo "<br>";
	
?>

