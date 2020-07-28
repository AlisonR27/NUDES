<?php get_header(); 
/*
Template Name: noticias
*/
$query_array=array();
$minha_query = new WP_Query(array(
    'posts_per_page' => 15,
    'post_type' => 'post',
    'cat' => get_cat_ID('noticias')
));
if ($minha_query->have_posts()) :
  $cont = 0;
  while ($minha_query->have_posts()) : $minha_query->the_post();
        if (has_post_thumbnail()){
            $imgUrl = get_the_post_thumbnail_url();
        }
        else{
            $imgUrl = get_bloginfo('template_url').'/assets/imgs/withoutThumb.png';
        }
      $currentArray = array(
        'titulo' => get_the_title(),
        'excerpt' => wp_trim_words(get_the_excerpt(),18),
        'imagem' => $imgUrl,
        'permalink' => get_the_permalink(),
        'data' => get_the_date()
      );
    array_push($query_array,$currentArray);
      wp_reset_postdata();

  endwhile;
    ?>
<div class="container px-0 mt-5">
    <div class="section-heading">
    <h1>Notícias</h1>
    </div>
    <?php   if (count($query_array)>2):?>
    <div class="card-deck mt-5 pesquisadores-deck px-3">
        <div class="col-12 col-md-6 p-0">
            <div class="card news card-noticias-lg bg-dark text-white overflow-hidden rounded-0 mx-0">
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
            <div class="card news w-100 bg-dark text-white overflow-hidden mb-3 rounded-0">
                <img class="card-img blurry" src="<?php echo $query_array[1]['imagem']?>"/>
                <div class="card-img-overlay">
                    <h3 class="h3"><?php echo $query_array[1]['titulo']?></h3>
                    <p class="card-text"><?php echo wp_trim_words($query_array[1]['excerpt'],25) ?></p>
                    <p class="card-text"><?php echo $query_array[1]['data']?></p>
                    <a class="stretched-link" href="<?php echo $query_array[1]['permalink']?>"></a>
                </div>
            </div>
            <div class="card news w-100 bg-dark text-white overflow-hidden rounded-0">
                <img class="card-img blurry" src="<?php echo $query_array[2]['imagem']?>"/>
                <div class="card-img-overlay">
                    <h3 class="h3"><?php echo $query_array[2]['titulo']?></h3>
                    <p class="card-text"><?php echo wp_trim_words($query_array[2]['excerpt'],25) ?></p>
                    <p class="card-text"><?php echo $query_array[2]['data']?></p>
                    <a class="stretched-link" href="<?php echo $query_array[2]['permalink']?>"></a>
                </div>
        </div>
        <div id="mais-noticias"></div> 
    </div>
    <button class="btn btn-outline-primary mt-2" data-page="1" id="carregaMais" data-url="<?php echo admin_url("admin-ajax.php")?>" class="h3 pl-3 mt-4">Veja mais notícias</button>
    <?php elseif(count($query_array)>0):
         foreach($query_array as $postagem):?>
        <div class="mt-3">
                <div class="card" style="height:200px;">
                  <div class="row no-gutters">
                      <div class="col-md-4">
                        <img class="card-img"  style="height:200px;object-fit:cover;" src="<?php echo $postagem['imagem']?>"/>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <a href="<?php echo $postagem['permalink']?>" class="h3 card-title stretched-link"><?php echo $postagem['titulo']?></a>
                            <p class="card-text text-secondary mb-0"><?php echo $postagem['excerpt']?></p>
                            <p class="card-text"><small class="text-muted">Publicado em: <?php echo $postagem['data']?></small></p>
                        </div>
                      </div>
                  </div>
                </div>
    </div>
         <?php endforeach; else:
     require('common_parts/empty_list.php');
    endif;?>
    <script>
    window.addEventListener('load',function(){
        $('#carregaMais').click(function(){
            console.log('entrou');
          var page = $(this).data('page');
          var newPage = page + 1;
          var ajaxurl = $(this).data('url');
          $.ajax({
              url: ajaxurl,
              type: 'post',
              data: {
                  page: page,
                  action: 'ajax_script_load_more'

              },
              error: function(response) {
                  console.log(response);
              },
              success: function(response) {
                  //check
                  if (response == 0) {
                      $('#carregaMais').addClass('d-none').remove();
                  } else {
                      that.data('page', newPage);
                      $('#mais-noticias').append(response);
                  }
              }
          });
        return false;
        });
    }); 
      </script>
</div>
<?php
endif;
get_footer();
?>