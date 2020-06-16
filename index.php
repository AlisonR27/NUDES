<?php get_header();
$assets = get_bloginfo('template_url').'/assets';

?>
	<section id="Apresentacao">
		<div class="show-banner mt-n5">
			<div class="conteudo">
				<div class="show-banner-content">
					<h1>Núcleo de Desenvolvimento de Software do IFRN</h1>
				</div>
				<div class="logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="328" height="328" viewBox="0 0 328 328" fill="none">
					<path d="M251.371 134.685C248.102 118.346 239.396 103.595 226.671 92.8366C213.946 82.0782 197.953 75.9463 181.298 75.44H75.4399V134.48H75.6449V134.685H163.332C163.656 134.685 163.979 134.685 164.307 134.685C164.635 134.685 164.959 134.685 165.283 134.685C172.67 134.896 179.7 137.911 184.945 143.117C190.189 148.324 193.255 155.331 193.52 162.717C193.536 163.11 193.545 163.508 193.545 163.91C193.545 164.312 193.536 164.709 193.52 165.103V252.56H193.725V252.765H252.765V146.78C252.636 142.717 252.17 138.671 251.371 134.685Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
					<path d="M134.48 193.52H120.364H75.4399V252.56H75.6449V252.765H134.685V207.841V193.725H134.48V193.52Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
					<path d="M164 2.05C201.37 2.06283 237.587 14.9959 266.512 38.6574C295.437 62.319 315.291 95.2536 322.711 131.88C330.13 168.506 324.658 206.571 307.221 239.624C289.785 272.677 261.457 298.685 227.037 313.24C207.439 321.518 186.402 325.855 165.127 326.003C143.853 326.151 122.757 322.108 103.046 314.103C83.3338 306.098 65.3917 294.289 50.2436 279.351C35.0956 264.412 23.0382 246.636 14.76 227.037C-1.95858 187.457 -2.26896 142.855 13.8971 103.046C30.0632 63.2359 61.3816 31.4786 100.963 14.76C120.906 6.32453 142.346 2.00153 164 2.05ZM164 0C73.4269 0 0 73.4269 0 164C0 254.573 73.4269 328 164 328C254.573 328 328 254.573 328 164C328 73.4269 254.573 0 164 0Z" fill="white"/>
				</svg>
				</div>
			</div>
			<div class="cut">
				<div class="bg">
					<svg xmlns="http://www.w3.org/2000/svg" width="929" height="755" viewBox="0 0 929 755" fill="none">
						<rect x="166" y="259.577" width="488.007" height="151.265" rx="75.6327" transform="rotate(-32.1348 166 259.577)" fill="#1E2A5A"/>
						<rect y="570.577" width="488.007" height="151.265" rx="75.6327" transform="rotate(-32.1348 0 570.577)" fill="#1E2A5A"/>
						<rect x="294" y="626.577" width="488.007" height="151.265" rx="75.6327" transform="rotate(-32.1348 294 626.577)" fill="#1E2A5A"/>
						<rect x="435" y="304.577" width="488.007" height="151.265" rx="75.6327" transform="rotate(-32.1348 435 304.577)" fill="#1E2A5A"/>
					</svg>	
				</div>
			</div>
		</div>
	</section>
	<section id="pesquisa" class="pesquisa py-5">
		<div class="container mt-1">
			<h2 class="text-center h2 font-weight-bold mb-5">Áreas de Pesquisa</h2>
			<div class="row justify-content-between font-weight-bold">
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card1.svg" alt="">
					<span class="mt-3" >Temas de convergência: Cidades Inteligentes</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card2.svg" alt="">
					<span class="mt-3" >Qualidade e Produtividade de Software </span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card3.svg" alt="">
					<span class="mt-3" >Banco de Dados, Big Data e Análise de Dados</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card4.svg" alt="">
					<span class="mt-3" >Sitemas Embarcados e Móveis</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card5.svg" alt="">
					<span class="mt-3" >Desenvolvimento de Jogos Digitais</span>
				</div>
				<div class="card col-3 mx-2 py-4 px-3 mb-5 text-center">
					<img src="<?php echo $assets?>/index/card6.svg" alt="">
					<span class="mt-3" >Engenharia de Serviços</span>
				</div>
			</div>
		</div>
	</section>
	<section id="categorias" class="categorias py-5">
		<div class="container">
		<ul id="autoWidth" class="cs-hidden">
        <!--slider-1-------------->
        <li class="item-a">
        <div class="box">
            
            <div class="imgBx">
            <img src="imgs\imagem2.jpg" class="model">
            </div>
            <div class="details">
                <h3>Projeto<br><span>Lorem lorem lorem 
                lorem lorem lorem lorem lorem lorem lorem 
                ipsum ipsum ipsum </span></h3>
                <button class="btn-noticias">LEIA MAIS...</button>
            </div>
        </div>
        </li>
        <!--slider-2-------------->
        <li class="item-a">
                <div class="box">
                    
                    <div class="imgBx">
                    <img src="imgs\imagem3.jpg" class="model">
                    </div>
                    <div class="details">
                        <h3>Projeto<br><span>Vamo ver como isso vai ser comportar, espero q dê tudo certo! </span></h3>
                        <button class="btn-noticias">LEIA MAIS...</button>
                    </div>
                </div>
        </li>
        <!--slider-3-------------->
        <li class="item-a">
            <div class="box">
                
                <div class="imgBx">
                <img src="imgs\imagem4.jpg" class="model">
                </div>
                <div class="details">
                    <h3>Projeto<br><span>Lorem lorem lorem 
                    lorem lorem lorem lorem lorem lorem lorem 
                    ipsum ipsum ipsum </span></h3>
                    <button class="btn-noticias">LEIA MAIS...</button>
                </div>
            </div>
        </li>
        <!--slider-4-------------->
        <li class="item-a">
            <div class="box">
                
                <div class="imgBx">
                <img src="imgs\imagem5.jpg" class="model">
                </div>
                <div class="details">
                    <h3>Projeto<br><span>Lorem lorem lorem 
                    lorem lorem lorem lorem lorem lorem lorem 
                    ipsum ipsum ipsum </span></h3>
                    <button class="btn-noticias">LEIA MAIS...</button>
                </div>
            </div>
        </li>
    </ul>
		</div>
	</section>
	<div style="height:500px;">

	</div>
<?php get_footer();?>
