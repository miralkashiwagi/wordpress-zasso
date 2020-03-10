<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>

<body>
<div id="wrap">
<header>
    <h1 class="logo">
        <?php bloginfo('name'); ?>
    </h1>
    <?php if (has_nav_menu('global-menu')) { //管理画面からメニュー登録する時用のコード?>
        <?php add_globalmenu(); ?>
    <?php } ?>
</header>


