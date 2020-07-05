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
<div class="card-deck pesquisadores-deck px-4 mb-5">
      <?php
          $cont = 0;
          while ($minha_query->have_posts()) : $minha_query->the_post();
        ?> 
        <div class="card rounded-lg flex-row col-12 col-md-6 col-lg-4">
          <?php the_post_thumbnail('medium', array('class' => 'mx-auto mt-3 d-block  rounded-circle', 'itemprop' => 'image', 'style' => 'height:150px;width:150px;object-fit:cover')) ?>
          <div class="card-body px-5 mb-2">
            <h5 class="card-title h5"><?php the_title();?></h5>                   
            <p><?php the_excerpt();?></p> 
            <p class="m-0"><?php echo  get_post_meta($post->ID, 'role', true); ?></p>
          </div>
        </div>
        <?php endwhile;
      else: require('common_parts/empty_list.php');
    endif;
      wp_reset_postdata();?>
                
      </div>


<?php
get_footer();