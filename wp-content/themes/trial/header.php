<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php
            if(is_single()) :
                wp_title('::',true,'right');
            endif;
            bloginfo('name');
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
    <?php
        if(is_singular()) {wp_enqueue_script('comment-reply')};
        wp_head();
    ?>
    
</head>
<body>
    
</body>
</html>