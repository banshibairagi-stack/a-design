<?php get_header(); ?>

<main class="homepage">

    <section class="hero">
        <div class="container">
            <h1>Welcome to My Website</h1>
            <p>This content is coming from front-page.php</p>
        </div>
    </section>

    <section class="content">
        <div class="container">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();

                    the_content();

                endwhile;
            endif;
            ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>