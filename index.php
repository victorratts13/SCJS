<!-- 
SCJS - php
autor: victor ratts
feito em: html, php, javascript, jquery3
nome: simple chat javascript
plugins: jquery, reload.js sendForm.js

funcionamento:
usando a biblioteca de manipulação de arquivos fopen(php),
é possivel criar uma instancia de um chat instantaneo.

o arquivo reload.js tem a função de recarregar a cada 1 segundo a div com a id="result"
enquanto o sendForm.js faz a função de enviar os dados do form através do ajax para
o arquivo send.php onde o mesmo escreve o arquivo test.txt (caso não exista ele cria).
-->

<script src="../lib/jquery-3.3.1.min.js"></script>
<script src="reload.js"></script>
<script src="sendForm.js"></script>
<style>
	.font{
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	}

</style>
<div id="result" class="font"></div>
<form id="form" name="form" action="send.php" method="post">
	<input id="text" name="text" type="text">
	<input type="submit">
</form>
<div id="sucess"></div>