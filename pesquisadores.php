<?php get_header(); 
/*
Template Name: pesquisadores
*/

$url = get_bloginfo('url');
  $minha_query = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'pesquisadores'
  ));

  if ($minha_query->have_posts()) :
?>
<div class="section-heading">
  <h1>Conheça nossos pesquisadores</h1>
</div>
<div class="row pesquisadores-deck justify-content-center px-4 mb-5 mx-5">
      <?php
          $cont = 0;
          while ($minha_query->have_posts()) : $minha_query->the_post();
        ?> 
        <div class="card text-center rounded-lg d-flex flex-row col-12 col-lg-3 mx-2 mb-2">
          <div class="card-body px-5 mb-2">
            <h5 class="card-title h5"><a class="stretched-link" href="<?php echo get_post_meta('lattes');?>"><?php the_title();?></a></h5>                   
            <p><?php the_content();?></p> 
          </div>
        </div>
        <?php endwhile;
      else: require('common_parts/empty_list.php');
    endif;
      wp_reset_postdata();?>
                
      </div>


<?php
get_footer();