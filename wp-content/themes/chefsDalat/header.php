<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo THEME . "/dist/theme.css"?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body <?php body_class(); ?>>
    <header class=" bg-green mx-auto sticky top-0 z-10 text-white drop-shadow-xl ">
        <section class=" mx-auto p-6 flex-nowrap grid grid-cols-3 drop-shadow-xl ">
            <div class="menu">
                <button id="menuBtn" class="text-5xl forcus:outline-none ">&#9776</button>
            </div>
            <div class="logo text-center tracking-[8px] relative block">
                <div class=" absolute">
                    <a href="/" class="block w-1/2 mx-auto">
                        <img class="" src="<?php echo THEME . "/assets/logo.png"?>"/>
                        <div class=" mt-[-20px] p-8 pt-[10px] rounded-es-[50%] rounded-ee-[50%] ">
                            <br>
                            <span class="">FARM TO TABLE</span>
                        </div>
                        <div class=" oval bg-green w-1/2 h-[100%] absolute rounded-[100%] -z-10 top-[5px] "></div>
                    </a>
                    
                </div>
                
            </div>
            <div class="block relative text-end">
                <button id="menuBtn" class="text-5xl forcus:outline-none ">RESERVATION</button>
            </div>
        </section>
        
        <nav id="main-menu" class="menu absolute bg-orange w-screen text-center pt-[60px] -z-50 pb-[30px] collaped">
            <section class="contact"></section>
            
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', 
                    'menu_class' => 'chefs-menu', 
                )); 
            ?> 
        </nav>

    </header>
<?php
wp_body_open();
?>
