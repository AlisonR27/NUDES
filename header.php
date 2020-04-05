<?php 
$assets = get_bloginfo('template_url').'/assets';
$blog_url = get_bloginfo('url');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if (is_front_page() && is_home()) : echo bloginfo("name");
            elseif (is_search()) : echo 'Busca por "';
                the_search_query();
                echo '" | NUDES - IFRN';
            elseif (is_404()) : echo 'Oops! Página não encontrada';
            elseif (is_single()) : echo the_title();
            else : echo bloginfo("name");
            endif; 
        ?>
    </title>
    <!-- Define ícone da página no navegador -->
    <link rel="icon" href="<?php echo $assets?>/imgs/favicon.ico">
    <!-- Fonte  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="<?php echo $assets?>/css/style.css" rel="stylesheet" type="text/css">
    <?php 
            if (is_front_page() && is_home()):?>
    <link href="<?php echo $assets?>/css/index.css" rel="stylesheet" type="text/css">
    <?php endif;?>

</head>
<body>
    <header class="header">
        <nav class="navbar fixed-top navbar-expand-md justify-content-between  px-5 py-2">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $blog_url?>">
                <img src="<?php echo $assets?>/imgs/flat-logo.png" alt="" class="img-fluid" id="navbar-logo">
                NUDES
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Notícias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Pesquisadores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Linhas de Pesquisa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Projetos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Sobre
                        </a>
                    </li>
                </ul>
                <a href="" class="btn btn-light text-dark rounded-pill px-5 py-2 ml-3">Contato</a>
            </div>
        </nav>
    </header>
    <div id="main">
    