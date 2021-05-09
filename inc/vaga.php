<div class="vaga uk-flex">
    <a href="<?php the_permalink()?>" class="uk-flex uk-flex-row">
        <img src="<?php the_field('imagem_vaga') ?>" alt="thumnail_vaga">
            <div class="uk-flex uk-flex-column">
                <h1><?php the_field('titulo_vaga');?></h1>
                <h3><?php the_field('categoria');?></h3>
                <p><?php the_field('descricao_vaga');?></p>
            </div>
    </a>
</div>

<!-- Digamos que categoria seja um Array e eu uso cada posição dela nos botões do filtro -->