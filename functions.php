
<?php
add_action( 'phpmailer_init', 'mailer_config', 10, 1);
add_theme_support( 'post-thumbnails' );
function mailer_config(PHPMailer $mailer){
  $mailer->IsSMTP();
  $mailer->Host = "mail.telemar.it"; // your SMTP server
  $mailer->Port = 25;
  $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
  $mailer->CharSet  = "utf-8";
}

/* FUNÇÃO PARA CRIAR TIPOS DE POST PELO PHP */
if (is_admin() ) {

    function defaultPostTypesArgs($nome,$nomeSingular,$menuIcon){
    return array(
      'labels' => array(
        'name' => _x($nome, 'post type general name'),
        'singular_name' => _x($nomeSingular, 'post type singular name')
      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => $menuIcon, 
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor', 'thumbnail', 'custom-fields')
    );
  }   
  register_post_type('pesquisadores', defaultPostTypesArgs('Pesquisadores','Pesquisador','dashicons-groups'));
/* FUNÇÃO PARA CRIAR PÁGINAS PELO PHP */
  require_once( ABSPATH . 'wp-admin/includes/post.php' );
  if ( !function_exists( 'PostCreator' ) ) {
    function PostCreator($name, $type, $content, $category, $template, $author_id, $status){
      $POST_NAME =  $name;
      $POST_TYPE = $type;
      $POST_CONTENT =  $content;
      $POST_CATEGORY =  $category;
      $POST_TEMPLATE =  $template;
      $POST_AUTH_ID =  $author_id;
      $POST_STATUS = $status;
      if ( $type == 'page' ) {
        $post      = get_page_by_title( $POST_NAME, 'OBJECT', $type );
        $post_id   = $post->ID;
        $post_data = get_page( $post_id );
        define( $POST_TEMPLATE, $template );
      } else {
        $post      = get_page_by_title( $POST_NAME, 'OBJECT', $type );
        $post_id   = $post->ID;
        $post_data = get_post( $post_id );
      }
      $post_data = array(
        'post_title'    => wp_strip_all_tags( $POST_NAME ),
        'post_content'  => $POST_CONTENT,
        'post_status'   => $POST_STATUS,
        'post_type'     => $POST_TYPE,
        'post_author'   => $POST_AUTH_ID,
        'post_category' => $POST_CATEGORY,
        'page_template' => $POST_TEMPLATE
      );
      if (!post_exists($POST_NAME)) {
        echo 'hello';
        wp_insert_post( $post_data, $error_obj );
      }
    }
    function define_template( $page_name, $template_file_name ) {
      $page = get_page_by_title( $page_name, OBJECT, 'page' );
      $page_id = null == $page ? -1 : $page->ID;
      if( -1 != $page_id ) {
          update_post_meta( $page_id, '_wp_page_template', $template_file_name );
      } 
      return $page_id;
    } 
      
  /*CRIAÇÃO DAS PÁGINAS DEFAULT*/
  //PostCreator( 'TITLE' , 'POST TYPE' , 'POST CONTENT' , 'POST CATEGORY' , 'TEMPLATE FILE NAME' , 'AUTHOR ID NUMBER' , 'POST STATUS');
  PostCreator( 'Pesquisadores', 'page', '','','pesquisadores','','PUBLISH');
  PostCreator( 'Sobre', 'page', '','','sobre','','PUBLISH');
  PostCreator( 'Notícias', 'page', '','','noticias','','PUBLISH');
  PostCreator( 'Contato', 'page', '','','contato','','PUBLISH');
  function insertPesquisador($title, $role){
    if ($role != ''){
      $post_id = wp_insert_post(
        array(
        'post_title'=>$title,
        'post_type'=>'pesquisadores',
        'post_content'=>$role,
        'post_status'=> 'publish'
        )
      );
      add_post_meta($post_id, 'lattes', '', true);
    } else {
      $post_id = wp_insert_post(
        array(
        'post_title'=>$title,
        'post_type'=>'pesquisadores',
        'post_content'=>'Pesquisador(a)',
        'post_status'=> 'publish'
        )
      );
      add_post_meta($post_id, 'lattes', '', true);
    }
  }
 
  function insertPesquisadores(){
    $pesquisadores = array(
      array('Danielle Freitas', 'Vice-Coordenadora'),
      array('Cláudia Ribeiro', 'Coordenadora'),
      array('Plácido Souza Neto ', ''),
      array('Marília Freire ', ''),
      array('Fellipe Aleixo', ''),
      array('Leonardo Lucena', ''),
      array('Leonardo Minora', ''),
      array('Gilbert Azevedo', ''),
      array('George Azevedo', ''),
      array('Gracon Lima', ''),
      array('Hugo Melo', ''),
      array('Jorgiano Vidal', ''),
      array('Tell Moitas', ''),
      array('Demóstenes', ''),
      array('Helder Medeiros', ''),
      array('Sarah Thomaz', ''),
      array('Marcelo Fernandes', ''),
      array('Alessandro Souza', ''),
      array('Eduardo Brálio', ''),
      array('Fabiano Papaiz', ''),
      array('Silvia Matos', ''),
      array('Alexandre Lima', ''),
    );
    foreach($pesquisadores as $pesquisador){
      $query = new WP_Query( array( 'post_type' => 'pesquisadores', 'post_title' => $pesquisador[0] ) );
      if (!$query->have_posts()){
        insertPesquisador($pesquisador[0],$pesquisador[1]);
      }
    }
  }
  insertPesquisadores();
  
  define_template( 'Pesquisadores', 'pesquisadores.php' );
  define_template( 'Sobre', 'sobre.php' );
  define_template( 'Notícias', 'noticias.php' );
  define_template( 'Contato', 'contato.php' );

  }
  //Adiciona as categorias 
  wp_insert_term('Notícias', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Noticias',  ));
  wp_insert_term('Projetos', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Projetos',  ));
  wp_insert_term('Eventos', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Eventos',  ));


  //Contem os dados para contato
  //Se alterar o endereço, lembre-se de remover o atalho para o google maps no footer da pagina.
  add_option('address', 'Avenida Senador Salgado Filho, 1559, Tirol, Natal-RN', '', 'yes' ); 
  add_option('phone', '(84) 99090-9090', '', 'yes' );
  add_option('contact_mail','Nucleo-nudes@ifrn.edu.br','','yes');
  }




  /* AJAX PARA PAGINAS ARCHIVE */

  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');
  /*   INFINITE SCROLL PARA PÁGINA DE NOTÍCIAS    */
  function ajax_script_load_more($args) {
      //init ajax
      $ajax = false;
      //check ajax call or not
      if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
          strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
          $ajax = true;
      }
      //number of posts per page default
      $num=3;
      //page number
      $paged = $_POST['page'] + 1;
      //args
      $args = array(
          'post_type' => 'post',
          'cat' => get_cat_ID('noticias'),
          'post_status' => 'publish',
          'posts_per_page' =>$num,
          'paged'=>$paged
      );
      //query
      $query = new WP_Query($args);
      //check
      if ($query->have_posts()):
          //loop articales
          while ($query->have_posts()): $query->the_post();
              //include articles template ?>
              <div class="row mt-3">
                <div class="card w-100 mb-3 mx-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <?php if ( has_post_thumbnail()):
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large');
                            echo '<img  src="'.$featured_img_url.'" class="img-fluid" itemprop="image">';
                        else: echo '<img data-srcset="">';
                    endif;
                    ?>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <a href="#" class="h3 card-title stretched-link"><?php the_title();?></a>
                        <p class="card-text text-secondary mb-0"><?php echo get_the_excerpt()?></p>
                        <p class="card-text"><small class="text-muted">Publicado em: <?php echo get_the_date('d/m/Y') ?></small></p>
                    </div>
                    </div>
                </div>
                </div>
</div>
<?php
          endwhile;
      else:
          echo 0;
      endif;
      //reset post data
      wp_reset_postdata();
      //check ajax call
      if($ajax) die();
  }
  add_action('wp_ajax_nopriv_ajax_script_load_more', 'ajax_script_load_more');
  add_action('wp_ajax_ajax_script_load_more', 'ajax_script_load_more');
  
  add_action( 'wp_enqueue_scripts', 'ajax_enqueue_script' );
  /*
  * enqueue js script call back
  */
  function ajax_enqueue_script() {
     wp_enqueue_script( 'script_ajax', get_theme_file_uri( '/assets/script/ajax.js' ), array( 'jquery' ), '1.0', true );
  }
  