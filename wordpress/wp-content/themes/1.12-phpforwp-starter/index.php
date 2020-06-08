<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
        <?php if ( is_front_page() && !is_home() ):

            echo '<p>Teste Front Page Estatica</p>';

        endif; ?>
      <!-- Blog Home -->
        <?php if( is_home() ): 

        echo '<p>Teste pagina de blogs</p>';

        endif; ?>

      <!-- Page (Not Front Page) -->

        <?php if( is_page() && !is_front_page()): ?>

            <p>Página que não é frontpage</p>
            <?php
            // Sintaxe feijoada abaixo, como teste
                if ( have_posts() ) {
                    while (have_posts()) {
                        the_post();
            ?>

                            <?php the_content() ?>

            <?php
                    }
                } else { ?>

                    <p>Não existe conteúdo nesta página.</p>

                <?php }
                
            ?>

        <?php endif; ?>

      <!-- Single Post -->
      <?php // Tipo de post abaixo é para posts que não são Attachment Page
             if ( is_single() && !is_attachment() ): 
                
                echo '<h1>Isto é um post único, mas não é Attachment Page</h1>';
                
                the_post();

                the_content();
            ?>
      <?php endif; ?>

      <!-- Single Attachment (Media) -->
      <?php // Tipo de post abaixo é para posts que são Attachment Page
             if ( is_single() && is_attachment() ): 
                
                echo '<h1>Isto é um post único e é Attachment Page</h1>';

                the_post();

                the_content();
            endif;
        ?>

      <!-- Category Archive -->
        <?php

            if( is_category() ):
    
                echo '<p>Página de categorias</p>';
                echo '<h1>' . single_cat_title() . '</h1>';
            
            endif;
        ?>

      <!-- Tag Archive -->
        <?php

            if( is_tag() ):

                echo '<p>Página de tags</p>';
                echo '<h1>' . single_tag_title() . '</h1>';

            endif;

        ?>

      <!-- Author Archive -->
        <?php

            if( is_author() ):

                echo '<p>Página de autor</p>';
                echo '<h1>' . the_archive_title() . '</h1>';

                if( have_posts() ): while( have_posts() ): the_post();

                        echo '<p>' . the_title() . '</p>';

                    endwhile;
                endif;
            endif;

        ?>

      <!-- Date Archive -->
        <?php

            if( is_date() ):

                echo '<p>Página de autor</p>';
                echo '<h1>' . the_archive_title() . '</h1>';

                if( have_posts() ): while( have_posts() ): the_post();

                        echo '<p>' . the_title() . '</p>';

                    endwhile;
                endif;

            endif;

        ?>

      <!-- 404 Page -->
        <?php

            if( is_404() ):

                echo '<h1>404 - Página não encontrada</h1>';

            endif;

        ?>

    </div>

<?php get_footer(); ?>
