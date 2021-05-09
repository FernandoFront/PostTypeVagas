<?php 
// Template Name: Cadastro
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="main_content_single">

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