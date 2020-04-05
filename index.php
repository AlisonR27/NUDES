<?php get_header();
$assets = get_bloginfo('template_url').'/assets';

?>
	<section id="Apresentacao">
		<div class="show-banner mt-n5">
			<div class="show-banner-content">
				<h1>Núcleo de Desenvolvimento de Software do IFRN</h1>
			</div>
			<img class="bg-img" src="<?php echo $assets?>/imgs/ifrn.png" />

		</div>
	</section>
	<section id="pesquisa" class="pesquisa py-5">
		<div class="container mt-1">
			<h2 class="text-center mb-5">Áreas de Pesquisa</h2>
			<div class="row justify-content-between">
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card1.png" alt="">
					<span class="mt-3" >Temas de convergência: Cidades Inteligentes</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card2.png" alt="">
					<span class="mt-3" >Qualidade e Produtividade de Software </span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card3.png" alt="">
					<span class="mt-3" >Banco de Dados, Big Data e Análise de Dados</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card4.png" alt="">
					<span class="mt-3" >Sitemas Embarcados e Móveis</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card5.png" alt="">
					<span class="mt-3" >Desenvolvimento de Jogos Digitais</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card6.png" alt="">
					<span class="mt-3" >Engenharia de Serviços</span>
				</div>
			</div>
		</div>
	</section>
	<section id="categorias" class="categorias py-5">
		<div class="container">
			<div class="row">
				<div>
			</div>
		</div>
	</section>
	<div style="height:500px;">

	</div>
<?php get_footer();?>
