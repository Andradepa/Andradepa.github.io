<?php
// calculator.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['display'];
    $result = eval("return $expression;");
    echo "<h1>Resultado: $result</h1>";
    echo "<a href='index.html'>Voltar</a>";
}
?>
