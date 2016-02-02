<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo get_bloginfo( 'name' ); ?> </title>

    <!-- Custom CSS -->
    <link href= "<?php echo get_bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
  <?php get_header('home'); ?>
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
              if ( get_query_var('paged') ) {
                $paged = get_query_var('paged');
              } elseif ( get_query_var('page') ) {
                $paged = get_query_var('page');
              } else {
                $paged = 1;
              }
              query_posts( array('posts_per_page' => 5, 'paged' => $paged ) );
            ?>
              <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="post-preview">
                    <a href="<?php echo get_permalink() ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                    </a>
                    <p class="post-meta">Publicado por <a href="<?php echo get_edit_user_link(); ?>"> <?php echo get_the_author(); ?> </a> em <?php echo the_date('d-m-Y');?></p>
                </div>
                <hr>
              <?php endwhile; ?>
              <ul class="pager">
                  <li class="next"> <?php next_posts_link('Próximo') ?> </li>
                  <li class= "previous"> <?php previous_posts_link('Anterior') ?> </li>

              </ul>
          </div>
      </div>
  </div>
  <hr>
  <?php get_footer(); ?>

  <!-- jQuery -->
    <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/clean-blog.min.js"></script>

</body>
