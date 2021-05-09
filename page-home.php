<?php
// Template Name: Home
get_header();
?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="main_content"  uk-filter="target: .js-filter; animation: fade">
                <!--Filtro lateral-->
                <asside class="filtro"> 
                    <ul class="uk-flex uk-flex-column uk-text-center uk-subnav uk-subnav-pill">
                        <h3>Filtrar</h3>
                        <li class="uk-active" uk-filter-control><a href="#">Todas</a></li>
                        <li><a href="#"><?php the_field('categoria');?></a></li>
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

                    <!-- WP Query -->
                    <?php
                        $paged = ( get_query_var( 'paged' )) ? absint( get_query_var( 'paged' ) ) : 1;
                        $args = array (
                            'post_type' => 'vagas',
                            // 'posts_per_page' => 5,
                            'order'   => 'ASC',
                            'paged'   => $paged
                        );
                        $the_query = new WP_Query ( $args );
                    ?>
                   
                        <ul class="uk-flex uk-margin">
                            
                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="uk-margin uk-flex-column">
                                    <?php include(TEMPLATEPATH . "/inc/vaga.php"); ?> 
                            </li> 
                            <?php endwhile; else: endif; ?> 
                        </ul>  

                    <?php
                echo paginate_links (array(
                    'current' => max(1, get_query_var('paged') ),
                    'total' => $the_query->max_num_pages,
                    'prev_text' => __(""),
                    'next_text' => __("")
                ));
            ?>
                    <!--Fim Toogle vaga-->    
                </div>

            </div>

<?php endwhile; else : endif; ?>
<?php get_footer(); ?>