    
<?php
$assets = get_bloginfo('template_url').'/assets';
?>
<div class="container mt-5 py-5 text-center">
    <img src="<?php echo $assets;?>/imgs/caixavazia.png" class="w-50 mx-auto" alt="">
    <h3 class="display-3 my-3">Nada por aqui!</h3>
    <p class="text-muted" style="font-size:1.3em"> Ainda não há nenhuma postagem por aqui... </p>
    <a href="<?php echo get_home_url()?>" class="btn btn-outline-primary mt-2 mb-5">Retornar a página inicial</a>
</div>