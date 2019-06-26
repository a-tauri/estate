<?php get_header(); ?> //header.phpを読み込むためのテンプレートタグ

<div id = "main">
    <?php
        if (have_posts()) :  //投稿があるかどうかチェック
            while (have_posts()) : the_post();
    ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a = href="<?php the_permalink()?>"> //記事のパーマリンクを取得し、リンク先に設定
            <?php the_title(); ?></a>
        </h2>
        <p class = "post-meta">
            <span class="post-date"><?php the_date(); ?></span>
            <span class="category">Category - <?php the_category(',')?></span>
            <span class="comment-num"><?php comments_popup_link('Comment : 0','Comment : 1', 'Comments : %'); ?></span>
        </p>
        <?php the_content('続きを読む &raquo;'); ?>
    </div>
<?php
    endwhile;
else :
?>
   <div class="post">
       <h2>記事はありません</h2>
       <p>お探しの記事は見つかりませんでした。</p>
   </div>
<?php
endif;
    if($wp_query->max_num_pages > 1) :　　//ページャーを表示
?>
   <div class="navigation">
       <div class="alignleft"><?php next_posts_link('&laquo; PREV'); ?></div>
       <div class="alignright"><?php previous_posts_link('NEXT &raquo;'); ?></div>
   </div>
<?php
    endif;
?>
   
    
</div><!-- /main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>