<?php get_header(); 
/*
Template Name: contato
*/
$assets = get_bloginfo('template_url').'/assets';
$url = get_bloginfo('url');
?>
<section class="container pt-3 pb-5 mb-5">
    <div class="row py-5">
        <div class="col-12 col-md-6">
            <h2>Contate-nos</h2>
            <img class="d-block" src="<?php echo $assets?>/imgs/Contato.png" alt="">

        </div>
        <div class="col-12 col-md-6 pt-5 pl-5 justify-content-center">
        <form type="POST" action="." class="m-0 d-inline-block ml-5 mr-n2">
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
                            <textarea id="exampleInputEmail4" class="form-control" name="mensagem" placeholder="Escreva aqui sua mensagem..." autocomplete="off" type="text" rows="5" required style="height:150px"></textarea>
                        </div>
                        <input type="Submit" value="Enviar e-mail" class="btn btn-outline-light">
                    </form>
                </div>
    </div>
</section>

<?php get_footer();?>