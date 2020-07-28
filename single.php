<?php require('header.php');?>
<?php 
$assets = get_bloginfo('template_url').'/assets';
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-md-9">
    <?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post();
          $categories = get_the_category(); 
          $categoria = $categories[0]->cat_name;
        ?>
          <section class="content-news" itemscope itemtype="http://schema.org/Report">
            <section>
              <div class="title-sub">
                <h1 class="h1" itemprop="headline"><?php the_title(); ?></h1>
                <p class="subtitle text-muted"><?php echo wp_trim_words(get_the_excerpt(),25) ?></p>
              </div>
              <div class="d-block mt-3">        
                <b class="autor text-capitalize"><?php echo get_the_author(); ?></b>
              </div>
              <small> <span class="data">Publicado em: <time itemprop="datePublished"><?php the_date('d/m/Y')?></time></span></small>        <b class="text-uppercase badge badge-primary rounded-pill px-2 py-1"><?php echo $categoria;?></b>
              <hr>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
  </div>
</div>
<?php require('footer.php');?>