<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="description" content="Bienvenue chez Romain Prévost, développeur web freelance Paris. Création de sites web sur mesure, spécialisation Wordpress. PHP, Javascript, intégration, front-end, back-end. Et si votre prochain projet web faisait décoller votre notoriété ? Demander un devis">
        <meta name="author" content="Romain Prévost">
        <meta name="google-site-verification" content="j_g0zGZ7TiwkbZ50o6mydrcpGdHlg5GLmvJC3qz05q8" />
        <title><?php print wp_get_document_title(); ?></title>
        <link href="<?php print get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="<?php print get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet"/>
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">
        <link rel="icon" sizes="64x64" href="favicon-64.png" type="image/png">
        <link rel="icon" sizes="96x96" href="favicon-96.png" type="image/png">
        <link rel="icon" sizes="196x196" href="favicon-196.png" type="image/png">
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
        <meta name="msapplication-TileImage" content="favicon-144.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <nav class="navbar navbar-custom navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="/#page-top">
                        <img src="<?php print get_template_directory_uri(); ?>/img/logo.png" alt="logo"/>
                    </a>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse',
                    'container_id' => 'mainNav',
                    'menu_class' => 'nav navbar-nav',
                    'walker' => new mono_walker(),
                ));
                ?>
            </div>
        </div>
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-lg-push-1 intro-title">
                        <h1 class="brand-heading mbm">Romain Prévost</h1>
                        <h2>Développeur Web</h2>
                        <p class="intro-text mbs">Concevoir, créer, adapter, développer, améliorer</p>
                        <ul class="social mbl">
                            <li><a href="https://www.facebook.com/romainprevostdev/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/pr_romain?lang=fr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/romain-prevost" target="_blank" ><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        <div id="section07">
                            <a href="/#about" class="page-scroll"><span class="mtm"></span><span class="mtm"></span><span class="mtm"></span></a>
                        </div>
                        <div>
                            <a class="btn btn-danger devis mtl fadeInUp animated page-scroll" href="/#contact">Demander un devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>