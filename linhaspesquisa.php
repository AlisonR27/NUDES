<?php get_header(); 
/*
Template Name: projetos 

*/
$query_array=array();
$minha_query = new WP_Query(array(
    'posts_per_page' => 15,
    'post_type' => 'post',
    'cat' => get_cat_ID('projetos')
));
if ($minha_query->have_posts()) :
  $cont = 0;
  while ($minha_query->have_posts()) : $minha_query->the_post();
      $currentArray = array(
        'titulo' => get_the_title(),
        'excerpt' => get_the_excerpt(),
        'imagem' => get_the_post_thumbnail_url(),
        'permalink' => get_the_permalink(),
        'data' => get_the_date()
      );
    array_push($query_array,$currentArray);
      wp_reset_postdata();

  endwhile;

    ?>
<div class="section-heading">
  <h1>Projetos</h1>
</div>
<div class="card-deck mt-5 pesquisadores-deck px-4">
    <div class="col-12 col-md-6 pr-0">
        <div class="card card-noticias-lg bg-dark text-white overflow-hidden rounded-0 mx-0">
            <img class="card-img blurry" src="<?php echo $query_array[0]['imagem']?>"/>
            <div class="card-img-overlay">
                <h2 class="display-4"><?php echo $query_array[0]['titulo']?></h2>
                <p class="card-text"><?php echo wp_trim_words($query_array[0]['excerpt'],40) ?></p>
                <p class="card-text"><?php echo $query_array[0]['data']?></p>
                <a class="stretched-link" href="<?php echo $query_array[0]['permalink']?>"></a>
            </div>
        </div>
    </div>
  <div class="col-12 col-md-6 pl-0">
        <div class="card w-100 h-50 bg-dark text-white overflow-hidden mb-3 rounded-0">
            <img class="card-img blurry" src="<?php echo $query_array[1]['imagem']?>"/>
            <div class="card-img-overlay">
                <h3 class="h3"><?php echo $query_array[1]['titulo']?></h3>
                <p class="card-text"><?php echo wp_trim_words($query_array[1]['excerpt'],25) ?></p>
                <p class="card-text"><?php echo $query_array[1]['data']?></p>
                <a class="stretched-link" href="<?php echo $query_array[1]['permalink']?>"></a>
            </div>
        </div>
        <div class="card w-100 bg-dark text-white overflow-hidden rounded-0">
            <img class="card-img blurry" src="<?php echo $query_array[2]['imagem']?>"/>
            <div class="card-img-overlay">
                <h3 class="h3"><?php echo $query_array[2]['titulo']?></h3>
                <p class="card-text"><?php echo wp_trim_words($query_array[2]['excerpt'],25) ?></p>
                <p class="card-text"><?php echo $query_array[2]['data']?></p>
                <a class="stretched-link" href="<?php echo $query_array[2]['permalink']?>"></a>
            </div>
      </div>
  </div>
    <h3 class="h3 pl-3 mt-4">Veja mais notícias</h3>

</div>
<?php
    else: require('common_parts/empty_list.php');
endif;
get_footer();
?>