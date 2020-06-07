<?php get_header() ?>

<body <?php body_class() ?>">

  <header id="masthead">
    <h1><a href="#"><?php bloginfo() ?></a></h1>
  </header>

  <div id="content">

  <!-- Add any template tags outside of loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Add any post template tags inside of loop -->
      <article class="<?php post_class() ?>">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <small><?php the_meta(); ?></small>
        <small></small>

        <footer>
          <ul class="meta">
            <li>Autor: <a href="<?php echo get_author_posts_url( $post->post_author )  ?>"><small><?php the_author(); ?></small></a></li>
            <li>Data: <small><?php the_date('j, M, Y') ?></small> | <small><?php the_time() ?></small></li>
            <li>Categorias: <small><?php the_category( ', ' ) ?></small></li>
            <li>Tags: <small><?php the_tags( '', ',', '' ) ?></small></li>
            <li><a href="<?php the_permalink() ?>">Permalink</a></li>
          </ul>
        </footer>
      </article>


    <?php endwhile; else: ?>

      <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
      <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

    <?php endif; ?>

  </div>

  <?php get_footer() ?>
      
</body>
</html>
