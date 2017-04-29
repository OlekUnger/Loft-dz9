<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php bloginfo('name');?><?php wp_title();?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">

</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/"><img src="<?php bloginfo('template_url'); ?>../img/logo.svg"
                                                            alt="Логотип" class="logo-wrap__logo-img"></a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <?php wp_nav_menu(array('container' => false,
                            'menu_class' => 'nav-list',));
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form role="search" class="search-form" id="searchform" method="get" action="<?php echo home_url('/');?>">
                    <input type="text" name="s" id="s" placeholder="Поиск..." class="search-form__input" >
                    <button class="search-form__btn-search" type="submit"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>