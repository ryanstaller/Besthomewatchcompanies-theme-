<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<?php
// Suppress the title banner on city/location pages that have their own hero
$brbo_shortcodes = ['brbo_city', 'brbo_national', 'brbo_state', 'brbo_city_shortcode', 'brbo_rankings', 'brbo_city_overview'];
$has_brbo = false;
foreach ($brbo_shortcodes as $sc) {
    if (has_shortcode(get_the_content(), $sc)) {
        $has_brbo = true;
        break;
    }
}
?>

<?php if (!$has_brbo) : ?>
<div style="background:linear-gradient(135deg,#1C2B3A,#263d52);padding:48px 24px;border-bottom:1px solid rgba(255,255,255,.06);">
    <div style="max-width:1100px;margin:0 auto;">
        <div style="font-size:10px;font-weight:800;color:rgba(192,92,46,.8);text-transform:uppercase;letter-spacing:.12em;margin-bottom:10px;">BestRBOConsultants.com</div>
        <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:2.2rem;color:#fff;margin:0;font-weight:700;"><?php the_title(); ?></h1>
    </div>
</div>
<?php endif; ?>

<div style="max-width:1100px;margin:0 auto;padding:<?php echo $has_brbo ? '0' : '40px'; ?> 24px;">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
