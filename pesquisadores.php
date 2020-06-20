<?php get_header(); 
/*
Template Name: pesquisadores
*/

$url = get_bloginfo('url');
?>
<div class="card-deck project-row ml-n5 mb-4">
<?php
        $minha_query = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'pesquisadores'
        ));

        if ($minha_query->have_posts()) :
          $cont = 0;
          while ($minha_query->have_posts()) : $minha_query->the_post();
        ?>
        <div> 
            <div>
                <?php the_post_thumbnail('medium', array('class' => 'mx-auto mt-3 d-block  rounded-circle', 'itemprop' => 'image', 'style' => 'height:150px;width:150px;object-fit:cover')) ?>
                    <div class="card-body text-justify px-5 mb-2">
                    <h3 ><?php the_title();?></h3>                   
                    <p ><?php the_excerpt();?></p> 
                    <p ><?php echo  get_post_meta($post->ID, 'role', true); ?></p>
                    </div>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();?>
                
      </div>
