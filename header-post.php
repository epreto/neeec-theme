<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">NEEEC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
            wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav navbar-right',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php
      if (has_post_thumbnail()){
        $thumb_id = get_post_thumbnail_id( $post->ID );
        $image = wp_get_attachment_image_src( $thumb_id,'full' );
        echo $image[0];
      } else {
        echo ('http://localhost/wordpress/wp-content/themes/neeec-theme/img/home-bg.png');
      } ?> ')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <?php while(have_posts()) : the_post();?>
                      <h1><?php the_title(); ?></h1>
                      <h2 class="subheading"><?php echo substr(get_the_excerpt(), 0,70); ?> [...]</h2>
                      <span class="meta">Publicado por <a href="<?php echo get_edit_user_link(); ?>"> <?php echo get_the_author(); ?> </a> em <?php echo the_date('d-m-Y');?></span>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</header>
