<?php
// Template Name: Home
get_header();
?>
            <div class="main_content">
                <!--Filtro lateral-->
                <asside class="filtro uk-flex uk-flex-center@s uk-width-1-3@l uk-width-1-3@m">
                            <div>
                                <h3>Filtros</h3>
                                <?php
                                    wp_nav_menu([
                                        'menu' => 'filtro_categoria',
                                        'menu_class' => 'uk-flex-column uk-flex-row@s uk-text-center uk-subnav uk-subnav-pill'
                                    ]);
                                ?>
                            </div>
                </asside>
                <!--fim filtro lateral-->

                <!--Container conteúdo principal-->
                <div class="container">

                    <!--Form pesquisa-->
                    <form class="search uk-search uk-search-default" action="<?php bloginfo('url'); ?>/" method="get">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" name="s" id="s" value="<?php the_search_query() ?>" placeholder="Pesquisar vaga...">
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
                            
                           
                            <li class="uk-margin uk-flex-column">
                                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php include(TEMPLATEPATH . "/inc/vaga.php"); ?>
                                <?php endwhile; ?>

                                <!-- Paginação -->
                                <?php 
                                    echo paginate_links (array(
                                    'current' => max(1, get_query_var('paged') ),
                                    'total' => $the_query->max_num_pages,
                                    'prev_text' => __(""),
                                    'next_text' => __("")
                                        ));
                                    ?>
                                <?php else: endif; ?> 
                            </li> 

                            
                            <?php wp_reset_query(); wp_reset_postdata(); ?> 
                        </ul>  

                    <!-- Paginação -->
                  
                    <!--Fim Toogle vaga-->    
                </div>

            </div>
<?php get_footer(); ?>