<?php
$nome = "João";
$idade = 25;

echo "Meu nome é $nome e eu tenho $idade anos.";
?>


<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>




<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}
?>




<?php
$contador = 0;

while ($contador < 5) {
    echo "Contagem: $contador <br>";
    $contador++;
}
?>





<?php
$frutas = array("Maçã", "Banana", "Laranja");

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}
?>





<?php
function saudacao($nome) {
    return "Olá, $nome!";
}

echo saudacao("Maria");
?>





<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
  Nome: <input type="text" name="nome"><br><br>
  <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    echo "Bem-vindo, $nome!";
}
?>

</body>
</html>




<?php
$numero = 10;

if ($numero % 2 == 0) {
    echo "$numero é um número par.";
} else {
    echo "$numero é um número ímpar.";
}
?>




<?php
header("Location: https://www.example.com");
exit();
?>





<?php
$dataAtual = date("d/m/Y");
echo "A data de hoje é: $dataAtual";
?>

