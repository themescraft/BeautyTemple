<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

get_header();
?>
<div class="container mx-auto">
<?php 
get_template_part('template-parts/new/header'); 
get_template_part('template-parts/new/featured'); 
get_template_part('template-parts/new/list'); 
get_template_part('template-parts/new/trending'); 
get_template_part('template-parts/new/newsletter'); 
get_template_part('template-parts/new/footer'); 
?>



<?php 
//get_footer();
