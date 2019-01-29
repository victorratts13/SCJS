<?php
/*
criado por: victor ratts
versão: 1.0
distribuição: publica
feito em. php e js.


*/

$arquivo = 'test.txt'; //arquivo de texto do tipo txt q será usado
$texto = $_POST['text']."<br>";// inclui as conversas do chat
$fp = fopen($arquivo, 'a+');// escreve o arquivo (caso não exista ele cria)

//execução da escrita /biblioteca fopen
fwrite($fp, $texto);
fclose($fp);

?>
