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
    <!-- Font Awesome -->
    <!-- <link href="<?//php echo $assets?>/css/fontawesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- estilos -->
    <link href="<?php echo $assets?>/css/style.css" rel="stylesheet" type="text/css">
        <!--Css da página SOBRE-->
        <link href="<?php echo $assets?>\css\stylesobre.css" rel="stylesheet" type="text/css">
        <!--Css do carrossel-->
        <link rel="stylesheet" href="<?php echo $assets?>\css\style-carrossel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $assets?>\css\lightslider.css">
        <!--Css da página PESQUISADORES-->    
        <link rel="stylesheet" type="text/css" href="<?php echo $assets?>\css\stylepesquisadores.css">
        <!-- JavaScript do carrossel-->
        <script type="text/javascript" src="<?php echo $assets?>js\JQuery3.3.1.js" defer></script>
        <script type="text/javascript" src="<?php echo $assets?>js\lightslider.js" defer></script>
    <?php 
            if (is_front_page() && is_home()):?>
    <link href="<?php echo $assets?>/css/index.css" rel="stylesheet" type="text/css">
    <?php endif;?>

</head>
<body>
    <script>
    $(function() {
        $(document).scroll(function() {
        var nav = $('header')[0];
        $(nav).toggleClass("scrolled sticky-top", $(this).scrollTop() > $(nav).height());
        $("#logo-navbar").toggleClass("normal");
        });
    });
    </script>

    <header class="header">
        <nav class="navbar fixed-top navbar-expand-md justify-content-between  px-5 py-2">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $blog_url?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="184" height="184" viewBox="0 0 184 184" fill="none" >
                <path d="M179.371 62.685C176.102 46.3456 167.396 31.595 154.671 20.8366C141.946 10.0782 125.953 3.94626 109.298 3.44H3.43994V62.48H3.64494V62.685H91.3316C91.6555 62.685 91.9794 62.685 92.3074 62.685C92.6354 62.685 92.9593 62.685 93.2832 62.685C100.67 62.8959 107.7 65.9108 112.945 71.1173C118.189 76.3238 121.255 83.3314 121.52 90.7167C121.536 91.1103 121.545 91.508 121.545 91.9098C121.545 92.3116 121.536 92.7093 121.52 93.1029V180.56H121.725V180.765H180.765V74.78C180.636 70.7167 180.17 66.671 179.371 62.685Z"/>
                <path d="M62.48 121.52H48.3637H3.43994V180.56H3.64494V180.765H62.685V135.841V121.725H62.48V121.52Z"/>
            </svg>
                NUDES
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="sobre" class="nav-link">
                            O núcleo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Notícias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pesquisadores" class="nav-link">
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
                </ul>
                <a href="" class="btn btn-light text-dark rounded-pill px-5 py-2 ml-3">Contato</a>
            </div>
        </nav>
    </header>
    <div id="main">
</body>