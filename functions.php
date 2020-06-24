
<?php
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
      'supports' => array('title','editor', 'thumbnail')
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
  /*CRIAÇÃO DAS PÁGINAS DEFAULT*/
  //PostCreator( 'TITLE' , 'POST TYPE' , 'POST CONTENT' , 'POST CATEGORY' , 'TEMPLATE FILE NAME' , 'AUTHOR ID NUMBER' , 'POST STATUS');
  PostCreator( 'Pesquisadores', 'page', '','','pesquisadores','','PUBLISH');
  PostCreator( 'Sobre', 'page', '','','sobre','','PUBLISH');
  PostCreator( 'Notícias', 'page', '','','noticias','','PUBLISH');
  }
  //Adiciona as categorias 
  wp_insert_term('Notícias', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Noticias',  ));
  wp_insert_term('Projetos', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Projetos',  ));
  wp_insert_term('Eventos', /*NÃO MUDE ISSO, define o tipo de termo*/'category', array(/*O que usar na url como slug para busca*/'slug' => 'Eventos',  ));
}
