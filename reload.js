// Js Reaload 1.0
//escrito por Victor Ratts

/*
como usar:

1 - configure 'clock.php' para a pagina que deseja carregar (ou recarregar).
2 - defina '#reload' como uma id dentro de uma div da sua pagina index (a pagina onde deseja mostrar as funções recarregadas).
3 - defina o time do reaload (por padrão é 1 segundo ou 1000 milisegundos).


*/ 
window.setInterval(function(){		
		$('#result').load('test.txt');
	}, 1000);
