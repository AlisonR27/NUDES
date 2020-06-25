<?php get_header(); 
/*
Template Name: contato
*/

$url = get_bloginfo('url');
?>
<section id="container-contato">
<div class="contato-page">
	<h2>Contate-nos</h2>
	<div class="contato-info">
		

			<div class="item">
				<i class="icon far fa-envelope"></i>
				Nucleo-nudes@ifrn.edu.br
			</div>
			<div class="item">
				<i class="icon fas fa-phone"></i>
				(84) 99090-9090
			</div>
			<div class="item">
				<i class="icon fas fa-map-marked-alt"></i>
				Avenida Senador Salgado Filho, 1559, Tirol, Natal-RN | 59015-000
			</div>
		
	</div>
	<form action="" class="contato-form">
		<div class="txtb">
			<label>Nome</label>
			<input type="text" placeholder="Nome">
		</div>
		<div class="txtb">
			<label>E-mail</label>
			<input type="email" placeholder="E-mail">
		</div>
		<div class="txtb">
			<label>Assunto</label>
			<input type="text" placeholder="Assunto">
		</div>
		<div class="txtb">
			<label>Mensagem</label>
			<textarea></textarea>
		</div>
		<a class="btn-contato">Enviar</a>
	</form>

</div>
</section>