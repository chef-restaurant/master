<?php 
    get_header();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
        }
    } 
?>

credentialing

<?php 
get_footer();
?>