<?php get_header(); ?>
<div style="max-width:1100px;margin:0 auto;padding:40px 24px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article style="margin-bottom:32px;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
