
<?php
// Template Name: Vaga 
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <style type="text/css">
        .interna {
            background: url(<?php the_field('background_vaga') ?>) no-repeat center;
            background-size: cover; }
        </style>
        <div class="main_content_single">
                    <section class="introducao-interna interna">
                        <div class="container">
                            <h1 data-anime="400" class="uk-animation-fade"><?php the_field('titulo_vaga') ?></h1>
                            <p data-anime="800" class="uk-animation-fade"><?php the_field('descricao_vaga') ?></p>
                        </div>
                    </section>
                    <!-- Aqui começa o formulário  -->
                    <form class="cadastro_vaga uk-animation-scale-down">
                        <fieldset class="uk-fieldset">

                            <div class="wp-block-contact-form-7-contact-form-selector"><?php echo do_shortcode('[contact-form-7 id="58" title="Cadidatar-se"]')?></div>
                    
                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="Nome completo">
                            </div>

                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="E-mail">
                            </div>
                    
                            <div class="uk-margin">
                                <select class="uk-select">
                                    <option>Vaga de intresse</option>
                                    <option value="1">Desenvolvedor</option>
                                    <option value="2">Designer</option>
                                    <option value="3">Midia</option>
                                </select>
                            </div>
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file">
                                    <input class="uk-input uk-form-width-medium"  type="text" placeholder="Curriculo" disabled uk-icon="icon:file-pdf">
                                </div>
                            </div>
                            <div class="menu uk-margin uk-flex-center">
                                 <a data-anime="1200" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Parabéns! Você candidatou a essa vaga.'})" class="btn btn_interno">Candidatar-se</a> 
                             </div>   
                        </fieldset>
                    </form> 
                    <!-- Aqui termina o formulário -->
            </div>
    <?php endwhile; else : endif; ?>
    <?php get_footer(); ?>