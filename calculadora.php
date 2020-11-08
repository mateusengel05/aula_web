<?php
session_start();
if (!isset($_SESSION['num1'])) {
$_SESSION['num1'] = 0;
}

if(isset($_POST['num1'])){
$num1 = $_POST['num1'];
}
if(isset($_POST['num2'])){
$num2 = $_POST['num2'];
}
if(isset($_POST['calcu'])){
$calcu = $_POST['calcu'];
}

function calcular($n1,$n2,$calcu){
switch($calcu)
{
case "Adicao":
$compute = $n1 + $n2;
break;
case "Subtracao":
$compute = $n1 - $n2;
break;
case "Multiplicacao":
$compute = $n1 * $n2;
break;
case "Divisao":
$compute = $n1 / $n2;
break;
}
return $compute;
}
echo "Resultado: " .calcular($num1,$num2, $calcu);
$_SESSION["num1"]=calcular($num1, $num2, $calcu);

?>

<body>
<form method="post">
Primeiro numero:<?php echo $_SESSION['num1'];?><br>
Proximo numero: <input type="number"name="num2"><br>
Calcular: Informe se deseja, Adicao, Subtracao, Multiplicacao ou Divisao  <input type="text" name="calcu"><br>
<input type="submit"><br>
</form>
</body>
</html>