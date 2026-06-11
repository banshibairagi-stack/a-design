<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


   <!-- ─── NAV ─────────────────────────────────────── -->
    <header class="site-header">
        <div class="container">
            <nav class="nav">
                 <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                bloginfo('name');
            }
            ?>
        </a>
                <ul class="nav-links">
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <a href="#" class="nav-cta">Get started</a>
                <button class="nav-burger" aria-label="Open menu">&#9776;</button>
            </nav>
        </div>
    </header>

