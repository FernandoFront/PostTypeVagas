<?php 
// Template Name: Cadastro
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="main_content_single">

        <div class="wp-block-contact-form-7-contact-form-selector"><?php echo do_shortcode("[contact-form-7 id="27" title="Cadastrar Vaga"])"?></div>
        <?php echo do_shortcode("SHORTCODE GOES HERE"); ?>
           
                    <!-- <form class="cadastro_vaga uk-animation-scale-down">
                        <fieldset class="uk-fieldset">
                    
                            <legend class="uk-legend">Cadastrar vaga</legend>
                    
                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="Titulo da vaga">
                            </div>

                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="Tipo">
                            </div>

                            <div class="uk-flex uk-flex-row uk-margin">
                                <input class="uk-input" type="text" placeholder="Empresa">
                                <input class="uk-input" type="text" placeholder="e-mail">
                            </div>
                    
                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" placeholder="Descrição da vaga"></textarea>
                            </div>

                            <div class="menu uk-margin uk-flex-center">
                                 <a data-anime="1200" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Vaga cadastrada com sucesso'})" class="btn btn_interno">Cadastrar Vaga</a> 
                             </div>   
                        </fieldset>
                    </form>  -->
            </div>
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>