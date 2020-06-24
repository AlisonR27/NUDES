<?php get_header();
$assets = get_bloginfo('template_url').'/assets';

?>
	<section id="Apresentacao" class="text-light">
		<div class="vw-100 vh-100 bg-primary">
			<div id="background" class="w-100 h-100 position-absolute animate-svg overflow-hidden" style="z-index:1;top:0;pointer-events:none;">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 929 755" fill="none">
					<rect id="rect1" transform="rotate(-32.1348 166 259.577)" fill="#1E2A5A"/>
					<rect id="rect2" y="570.577" transform="rotate(-32.1348 0 570.577)" fill="#1E2A5A"/>
					<rect id="rect3" x="294" y="626.577" transform="rotate(-32.1348 294 626.577)" fill="1E2A5A"/>
					<rect id="rect4" x="435" y="304.577"  transform="rotate(-32.1348 435 304.577)" fill="#1E2A5A"/>
				</svg>	
			</div>	
			<div id="content" class="flex-column position-absolute d-flex h-100 w-100" style="z-index:2">
				<div class="mb-auto"></div>
				<div class="px-1 px-md-5 h-50 d-flex flex-column justify-content-center">
					<div class="row mx-0">
						<div class="offset-1 offset-md-0 col-10 col-md-8 col-xl-7">
							<h1 class="display-2 text-left">
							NÚCLEO DE DESENVOLVIMENTO DE SOFTWARE DO IFRN
							</h1>	
						</div>
						<div class="col-md-3 col-lg-4 col-xl-5 d-none d-lg-block justify-content-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="ml-auto m-xl-auto w-75 d-block" width="328" height="328" viewBox="0 0 328 328" fill="none">
								<path d="M251.371 134.685C248.102 118.346 239.396 103.595 226.671 92.8366C213.946 82.0782 197.953 75.9463 181.298 75.44H75.4399V134.48H75.6449V134.685H163.332C163.656 134.685 163.979 134.685 164.307 134.685C164.635 134.685 164.959 134.685 165.283 134.685C172.67 134.896 179.7 137.911 184.945 143.117C190.189 148.324 193.255 155.331 193.52 162.717C193.536 163.11 193.545 163.508 193.545 163.91C193.545 164.312 193.536 164.709 193.52 165.103V252.56H193.725V252.765H252.765V146.78C252.636 142.717 252.17 138.671 251.371 134.685Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M134.48 193.52H120.364H75.4399V252.56H75.6449V252.765H134.685V207.841V193.725H134.48V193.52Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M164 2.05C201.37 2.06283 237.587 14.9959 266.512 38.6574C295.437 62.319 315.291 95.2536 322.711 131.88C330.13 168.506 324.658 206.571 307.221 239.624C289.785 272.677 261.457 298.685 227.037 313.24C207.439 321.518 186.402 325.855 165.127 326.003C143.853 326.151 122.757 322.108 103.046 314.103C83.3338 306.098 65.3917 294.289 50.2436 279.351C35.0956 264.412 23.0382 246.636 14.76 227.037C-1.95858 187.457 -2.26896 142.855 13.8971 103.046C30.0632 63.2359 61.3816 31.4786 100.963 14.76C120.906 6.32453 142.346 2.00153 164 2.05ZM164 0C73.4269 0 0 73.4269 0 164C0 254.573 73.4269 328 164 328C254.573 328 328 254.573 328 164C328 73.4269 254.573 0 164 0Z" fill="white"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="mt-auto"></div>
			</div>
		</div>
	</section>	

	<?php require('index_parts/temasPesquisa.php')?>
	<?php require('index_parts/categorias.php')?>
	<div style="height:500px;">

	</div>
<?php get_footer();?>
