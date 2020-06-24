<?php 

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

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
    <link rel="stylesheet" href="<?php echo $assets ?>/sass/bootstrap/dist/bootstrap.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <!-- <link href="<?//php echo $assets?>/css/fontawesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- estilos -->
    <link href="<?php echo $assets?>/css/style.css" rel="stylesheet" type="text/css">
    
        <!--Css do carrossel-->
        <link rel="stylesheet" href="<?php echo $assets?>\css\style-carrossel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $assets?>\css\lightslider.css">

        <link href="<?php echo $assets?>/css/style-sobre.css" rel="stylesheet" type="text/css">
        <!-- JavaScript do carrossel-->
        <script type="text/javascript" src="<?php echo $assets?>\js\lightslider.js" defer></script>
        <script type="text/javascript" src="<?php echo $assets?>\js\script.js" defer></script>
    <script type="text/javascript" src="<?php echo $assets?>\js\script-carrossel.js" defer></script>

    <?php 
    //LEMBRAR DE MUDAR O SASS PARA CSS
            if (is_front_page() && is_home()):?>
                <link href="<?php echo $assets?>/sass/dist/index.css" rel="stylesheet" type="text/css">
                <link href="<?php echo $assets?>/sass/dist/style-carrossel.css" rel="stylesheet" type="text/css">
            <?php   else:?>
                <link href="<?php echo $assets?>/sass/dist/<?php echo tirarAcentos(get_the_title())?>.css" rel="stylesheet" type="text/css">
                
    <?php endif;?>

</head>
<body>
    <script>
    </script>

    <header class="header">
        <nav class="navbar  navbar-expand-md justify-content-between px-5 py-3<?php if(!is_home()) echo ' unscroll '; else echo ' fixed-top '?>">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $blog_url?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="174" height="30" viewBox="0 0 174 30" fill="none">
                    <path d="M29.7642 10.0231C29.2111 7.25881 27.7382 4.76328 25.5854 2.94317C23.4326 1.12305 20.7269 0.0856483 17.9091 0H0V9.98844H0.0346821V10.0231H14.8696C14.9244 10.0231 14.9792 10.0231 15.0347 10.0231C15.0902 10.0231 15.145 10.0231 15.1998 10.0231C16.4495 10.0588 17.6388 10.5689 18.5261 11.4497C19.4134 12.3305 19.9321 13.5161 19.9769 14.7655C19.9797 14.8321 19.981 14.8994 19.981 14.9674C19.981 15.0354 19.9797 15.1027 19.9769 15.1692V29.9653H20.0116V30H30V12.0694C29.9783 11.3819 29.8994 10.6975 29.7642 10.0231Z" />
                    <path d="M9.78421 20.1818H0V29.966H0.0339729V30H9.81818V20.2158H9.78421V20.1818Z" />
                    <path d="M40 25.16V5H43.108L57.892 22.584V5H60.16V25.16H57.052L42.268 7.576V25.16H40Z" />
                    <path d="M72.2009 25.16C71.2675 25.16 70.4742 24.8333 69.8209 24.18C69.1675 23.5267 68.8409 22.7333 68.8409 21.8V5H71.1089V21.8C71.1089 22.0987 71.2115 22.36 71.4169 22.584C71.6409 22.7893 71.9022 22.892 72.2009 22.892H85.6409C85.9395 22.892 86.1915 22.7893 86.3969 22.584C86.6209 22.36 86.7329 22.0987 86.7329 21.8V5H89.0009V21.8C89.0009 22.7333 88.6742 23.5267 88.0209 24.18C87.3675 24.8333 86.5742 25.16 85.6409 25.16H72.2009Z" />
                    <path d="M97.7404 25.16V5H114.54C115.474 5 116.267 5.32667 116.92 5.98C117.574 6.63333 117.9 7.42667 117.9 8.36V21.8C117.9 22.7333 117.574 23.5267 116.92 24.18C116.267 24.8333 115.474 25.16 114.54 25.16H97.7404ZM101.1 22.892H114.54C114.839 22.892 115.091 22.7893 115.296 22.584C115.52 22.36 115.632 22.0987 115.632 21.8V8.36C115.632 8.06133 115.52 7.80933 115.296 7.604C115.091 7.38 114.839 7.268 114.54 7.268H101.1C100.802 7.268 100.54 7.38 100.316 7.604C100.111 7.80933 100.008 8.06133 100.008 8.36V21.8C100.008 22.0987 100.111 22.36 100.316 22.584C100.54 22.7893 100.802 22.892 101.1 22.892Z" />
                    <path d="M126.692 25.16V5H145.088V7.268H128.96V13.932H141.924V16.228H128.96V22.892H145.088V25.16H126.692Z" />
                    <path d="M156.893 25.16C155.96 25.16 155.167 24.8333 154.513 24.18C153.86 23.5267 153.533 22.7333 153.533 21.8V21.016H155.801V21.8C155.801 22.0987 155.904 22.36 156.109 22.584C156.333 22.7893 156.595 22.892 156.893 22.892H170.333C170.632 22.892 170.884 22.7893 171.089 22.584C171.313 22.36 171.425 22.0987 171.425 21.8V17.292C171.425 16.9933 171.313 16.7413 171.089 16.536C170.884 16.3307 170.632 16.228 170.333 16.228H156.893C155.96 16.228 155.167 15.9013 154.513 15.248C153.86 14.576 153.533 13.7827 153.533 12.868V8.36C153.533 7.42667 153.86 6.63333 154.513 5.98C155.167 5.32667 155.96 5 156.893 5H170.333C171.267 5 172.06 5.32667 172.713 5.98C173.367 6.63333 173.693 7.42667 173.693 8.36V9.144H171.425V8.36C171.425 8.06133 171.313 7.80933 171.089 7.604C170.884 7.38 170.632 7.268 170.333 7.268H156.893C156.595 7.268 156.333 7.38 156.109 7.604C155.904 7.80933 155.801 8.06133 155.801 8.36V12.868C155.801 13.1667 155.904 13.4187 156.109 13.624C156.333 13.8293 156.595 13.932 156.893 13.932H170.333C171.267 13.932 172.06 14.268 172.713 14.94C173.367 15.5933 173.693 16.3773 173.693 17.292V21.8C173.693 22.7333 173.367 23.5267 172.713 24.18C172.06 24.8333 171.267 25.16 170.333 25.16H156.893Z" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo get_bloginfo('url')?>/sobre" class="nav-link">
                            O núcleo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_bloginfo('url')?>/noticias" class="nav-link">
                            Notícias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_bloginfo('url')?>/pesquisadores" class="nav-link">
                            Pesquisadores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_bloginfo('url')?>/pesquisa" class="nav-link">
                            Linhas de Pesquisa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_bloginfo('url')?>/projetos" class="nav-link">
                            Projetos
                        </a>
                    </li>
                </ul>
                <a href="" class="btn btn-light rounded-pill px-5 py-2 ml-3">Contato</a>
            </div>
        </nav>
    </header>
    <div id="main">
</body>