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
	<div class="contato-form">
	<form type="POST" action=".">
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nome" name="nome" id="nomeInput" autocomplete="off" required>
                        <label for="nomeInput">Nome</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="emailInput" autocomplete="off" required>
                        <label for="emailInput">Email</label>
                    </div>
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Assunto" name="assunto" id="assuntoInput" autocomplete="off" required>
                        <label for="assuntoInput">Assunto</label>
                    </div>
                    <div class="form-group">
                        <label for="" class="pl-2">Mensagem:</label>
                        <textarea id="exampleInputEmail4" class="form-control" name="mensagem" placeholder="Escreva aqui sua mensagem..." autocomplete="off" type="text" rows="5" required style="height:150px"></textarea>
                    </div>
                    <input type="Submit" value="Enviar e-mail" class="btn btn-outline-light">
                </form>
	</div>

</div>
</section>

<?php get_footer();?>