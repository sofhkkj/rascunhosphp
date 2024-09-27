<form action = "index.php" method = "GET">
	linhas <input type="number" name="linhas">
	colunas <input type="number" name="colunas">
	texto <input type = "number" name = "texto">
	<button type = "submit"> Enviar </button>
</form>

<?php
$row = @$_GET['linhas'];
$col = @$_GET['colunas'];
$txt = @$_GET['texto'];

print "<table border = '1'>";
for ($i=1; $i <= $row ; $i++){
	print "<tr>";
	for ($j=1; $j <= $col ; $j++){
		print "<td>";
		print $txt;
		print "</td>";
	}
	print "</tr>";
}
print "</table>";






<form action = "index.php" method = "GET">
	A <input type="number" name="a">
	B <input type="number" name="b">
	C <input type = "number" name = "c">
	<button type = "submit"> Enviar </button>
</form>

<?php
$a = @$_GET['a'];
$b = @$_GET['b'];
$c = @$_GET['c'];

print "O maior número é".max($a, $b, $c). "<br>";
print "O menor número é".min($a, $b, $c);




  <form action = "index.php" method = "GET">
	Número <input type="number" name="num">
	<button type = "submit"> Enviar </button>
</form>

<?php
$num = @$_REQUEST['num'];

for ($i=0; $i <= 12; $i++){
	$resultado = $num * $i;

 print $num. " x ".$i. " = ".$resultado."<br>";
}
