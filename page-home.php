<?php
// Template Name: Home
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="main_content"  uk-filter="target: .js-filter; animation: fade">
                <!--Filtro lateral-->
                <asside class="filtro"> 
                    <ul class="uk-flex uk-flex-column uk-text-center uk-subnav uk-subnav-pill">
                        <h3><?php the_field('titulo_categorias');?></h3>
                        <li class="uk-active" uk-filter-control><a href="#">Todas</a></li>
                        <li uk-filter-control=".tag-dsn"><a href="#"><?php the_field('categoria');?></a></li>
                        <li uk-filter-control=".tag-dev"><a href="#"><?php the_field('categoria');?></a></li>
                        <li uk-filter-control=".tag-midia"><a href="#"><?php the_field('categoria');?></a></li>
                    </ul>
                </asside>
                <!--fim filtro lateral-->

                <!--Container conteúdo principal-->
                <div class="container">

                    <!--Form pesquisa-->
                    <form class="search uk-search uk-search-default">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Pesquisar vaga...">
                    </form>
                    <!--Fim Form pesquisa-->

                    <!--Toogle vaga--> 
                    <ul class="js-filter uk-switcher switcher_container uk-flex uk-margin">
                        <li class="uk-margin uk-flex-column">
                            <?php include(TEMPLATEPATH . "/inc/vaga.php"); ?>   
                        </li> 

                        <li>
                            <?php include(TEMPLATEPATH . "/inc/vaga.php"); ?> 
                        </li> 
                </ul>  

                    <ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher_container">
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                    </ul>
                    <!--Fim Toogle vaga-->    
                </div>
            </div>
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>