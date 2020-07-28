<?php
	$categoriesArray = array();
	$postsArray = array();
	foreach(get_categories() as $category){
			$tempArray = array(
				'id'=> $category->term_id,
				'nome'=> $category->name,
			);
			array_push($categoriesArray,$tempArray);
	}
	foreach($categoriesArray as $category){
		$minha_query = new WP_Query(array(
			'posts_per_page' => 1,
			'post_type' => 'post',
			'cat' => $category['id']
		));
		while ($minha_query->have_posts()) : $minha_query->the_post();
            if (has_post_thumbnail()):
            $tempArray = array(
				'titulo' => get_the_title(),
				'excerpt' => get_the_excerpt(),
				'imagem' => get_the_post_thumbnail_url(),
                'permalink' => get_the_permalink(),
                'categoria'=> $category['nome'],
				'data' => get_the_date()
            );
            else:
                $tempArray = array(
                    'titulo' => get_the_title(),
                    'excerpt' => get_the_excerpt(),
                    'imagem' => get_bloginfo('template_url').'/assets/imgs/withoutThumb.png',
                    'permalink' => get_the_permalink(),
                    'categoria'=> $category['nome'],
                    'data' => get_the_date()
                );
            endif;
			array_push($postsArray,$tempArray);
			wp_reset_postdata();
		endwhile;
	}
	;?>
<section id="categorias" class="categorias py-5">
		<ul id="autoWidth" class="cs-hidden mx-auto">
        <!--slider-1-------------->
        <?php foreach($postsArray as $postagem):?>
            <li class="item-a">
                <div class="box">
                    <img src="<?php echo $postagem['imagem']?>" class="model">
                    <div class="details">
                        <span class="badge badge-pill badge-secondary mb-1"><?php echo $postagem['categoria']?></span>
                        <h3><?php echo $postagem['titulo']?></h3>
                        <p class="mb-1"><?php echo wp_trim_words($postagem['excerpt'],12); ?></p>
                        <a href="<?php echo $postagem['permalink']?>" class="btn btn-primary rounded-pill stretched-link">LEIA MAIS...</a>
                    </div>
                </div>
            </li>
        <?php endforeach ?>
    </ul>
	</section>