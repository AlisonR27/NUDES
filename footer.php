</div>
<footer>
    <div class="container">
        <div class="row mx-0 pb-5">
            <hr class="w-100 border-light my-5 d-block d-sm-none">
            <div class="col-12 col-sm-6 d-flex">
                <ul class="<?php if(strtolower(get_the_title())=='contato') echo ' h-100 py-3 d-flex flex-column justify-content-between'; else echo 'align-self-end p-0'?>">
                    <li><a class="my-2 btn-lg btn-link text-light pl-0" href="mailto:<?php echo get_option('contact_mail');?>" ><i class="far fa-envelope mr-2"></i><?php echo get_option('contact_mail');?></a></li>
                    <li><a class="my-2 btn-lg btn-link text-light pl-0" href="tel:<?php echo get_option('phone');?>" ><i class="fas fa-phone mr-2"></i><?php echo get_option('phone');?></a></li>
                    <li><a class="my-2 btn-lg btn-link text-light pl-0" href="https://goo.gl/maps/aeGitbN7WH9GNLH4A" target="_blank"><i class="fas fa-map-marked-alt mr-2"></i> <?php echo get_option('address');?></a></li>
                </ul>
            </div>
            <?php if(strtolower(get_the_title())=='contato'):?>
                <div class="col-12 col-sm-6 text-right">
                    <ul class="nav flex-column">
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
                </div>
            <?php endif;?>
            <?php if(strtolower(get_the_title())!='contato'):?>
            
            <div class="col-12 col-sm-6 order-first order-sm-last">
                <h3 class="h3 mb-4">Contato</h3>
                <form type="POST" action=".">
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nome" name="nome" id="nomeInput" autocomplete="off" required>
                        <label for="nomeInput">Nome</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="emailInput" autocomplete="off" required>
                        <label for="emailInput">Email</label>
                    </div>
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Assunto" name="assunto" id="assuntoInput" autocomplete="off" required>
                        <label for="assuntoInput">Assunto</label>
                    </div>
                    <div class="form-group">
                        <label for="" class="pl-2">Mensagem:</label>
                        <textarea id="exampleInputEmail4" class="form-control" name="mensagem" placeholder="Escreva aqui sua mensagem..." autocomplete="off" type="text" rows="5" required></textarea>
                    </div>
                    <input type="Submit" value="Enviar e-mail" class="btn btn-outline-light">
                </form>
            </div>
            <?php endif; ?>
        </div>
        <hr class="border-white">
        <div class="row mx-0 justify-content-between">
            <a  class="btn btn-link p-0 text-light">Voltar ao topo</a>
            <p class="text-light m-0">Núcleo de Desenvolvimento de Software - IFRN </p>
            <a class="d-none d-md-block" href="<?php echo get_bloginfo('url');?>"><img src="<?php echo get_bloginfo('template_url').'/assets'?>/imgs/flat-logo.png" alt="" style="height:1em;"></a>
        </div>
    </div>
</footer> 
</body>
