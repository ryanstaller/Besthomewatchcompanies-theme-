<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="brbo-top-bar">
    <span class="brbo-top-bar-left">BestRBOConsultants.com &nbsp;&middot;&nbsp; Independently ranked &nbsp;&middot;&nbsp; Updated monthly</span>
    <div class="brbo-top-bar-right">
        <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="highlight">List Your Practice</a>
        <a href="<?php echo esc_url(home_url('/my-account/')); ?>">Consultant Login</a>
    </div>
</div>

<nav class="brbo-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="brbo-nav-logo">
        <img src="<?php echo esc_url( plugins_url( 'public/img/logo.png', WP_PLUGIN_DIR . '/best-rbo-consultants/best-rbo-consultants.php' ) ); ?>"
             alt="BestVRBO Consultants"
             class="brbo-nav-logo-img"
             width="220" height="73">
    </a>
    <div class="brbo-nav-links">
        <a href="<?php echo esc_url(home_url('/rankings/')); ?>">Top Consultants</a>
        <a href="<?php echo esc_url(home_url('/resources/')); ?>">RBO Resources</a>
        <a href="<?php echo esc_url(home_url('/rental-income-calculator/')); ?>">Income Calculator</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
    </div>
    <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="brbo-nav-cta">Get Listed Free</a>
</nav>
