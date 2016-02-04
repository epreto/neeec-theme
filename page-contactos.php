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
<?php get_header('contactos') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>Preenche então o formulário e rapidamente entraremos em contacto contigo!</p>

            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Telemóvel</label>
                        <input type="tel" class="form-control" placeholder="Telemóvel" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Mensagem</label>
                        <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
            <hr>
            <!-- Map -->
            <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.0164624849444!2d-8.418928384611112!3d40.1864470793925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f99534710f55%3A0x6f9fbebbec1bd8ea!2sDepartamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores!5e0!3m2!1spt-PT!2spt!4v1448860957689"></iframe>
              <br/>
              <small>
                  <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48755.789284588616!2d-8.399598431396484!3d40.20379451447572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f99534710f55%3A0x6f9fbebbec1bd8ea!2sDepartamento+de+Engenharia+Electrot%C3%A9cnica+e+de+Computadores!5e0!3m2!1spt-PT!2spt!4v1448855198619"></a>
              </small>
            </iframe>
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
