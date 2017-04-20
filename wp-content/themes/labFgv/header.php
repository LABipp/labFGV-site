<?php $home = get_template_directory_uri();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab FGV</title>
        <link rel="stylesheet" type="text/css" href="<?=$home?>/css/vendor/foundation.css">
        <link rel="stylesheet" type="text/css" href="<?=$home?>/css/vendor/slick.css">
        <link rel="stylesheet" type="text/css" href="<?=$home?>/css/vendor/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="<?=$home?>/style.css">
    </head>
    <body>
    <!-- MENU HEADER -->          
    <div class="row menuHeader fullWidth">
        <div class="background fullWidth">
        </div>
        <div class="content small-9 small-centered column fullWidth">
            <div class="row">
                <div class="small-4 column">
                    <img src="<?=$home?>/img/labfgv.png">
                </div>
                <div class="small-8 column menu">
                    <?php wp_nav_menu( array('theme_location' => 'header-menu')); ?>
                </div>
            </div>
        </div>
    </div>
