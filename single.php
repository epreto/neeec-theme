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
<?php get_header('post');?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <!-- Post Content -->
          <p> <?php the_content(''); ?> </p>
        </div>
    </div>
</div>
</article>


<hr>
<?php get_footer(); ?>

<!-- jQuery -->
  <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="http://localhost/wordpress/wp-content/themes/neeec-theme/js/clean-blog.min.js"></script>

</body>
