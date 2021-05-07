<div class="vaga uk-flex tag-dev">
    <a href="/single/" class="uk-flex uk-flex-row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icone-vaga.png" alt="thumnail_vaga">
            <div class="uk-flex uk-flex-column">
                <h1><?php the_field('titulo_vaga');?></h1>
                <h3><?php the_field('tipo_vaga');?></h3>
                <p><?php the_field('desc_vaga');?></p>
            </div>
    </a>
</div>
