<?php get_header(); ?>


<div id="main">
<?php
    if(have_posts()) :
    while(have_posts()) : the_post();
?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    </div>
</div>