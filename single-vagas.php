
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
                    <form class="cadastro_vaga uk-flex uk-animation-scale-down uk-width-1-2@xl  uk-width-1-2@l uk-width-1-1@m" uk-grid>
                        <fieldset class="uk-fieldset">
                            <div class="uk-flex uk-flex-center selector"><?php echo do_shortcode('[contact-form-7 id="58" title="Cadidatar-se"]')?></div>  
                        </fieldset>
                    </form> 
                    <!-- Aqui termina o formulário -->
            </div>
    <?php endwhile; else : endif; ?>
    <?php get_footer(); ?>