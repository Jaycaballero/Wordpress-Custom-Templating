<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jay Caballero Test</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>
  <section id="top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <header id="header_nav">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
              <div class="col-4 pl-0">
                <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>">
                  <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  ?><img src="<?php echo $image[0]; ?>" alt="">
                </a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="col-8">
                <div class="menu-wrapper text-end">
                  <div class="nav-wrapper d-inline-block"><?php get_template_part('template-parts/header', 'nav'); ?></div>
                  <div class="header-button-wrapper d-inline-block"><?php dynamic_sidebar( 'header-widget' ); ?></div>
                </div>
              </div>
            </nav>
          </header>
        </div>
      </div>
    </div>
  </section>
