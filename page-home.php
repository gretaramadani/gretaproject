<?php get_header(); ?>

<div id="container">
    <div id="inner_container">
        <div class="img_container"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></div>
        <div class="img_container"><img src="<?php echo get_template_directory_uri(); ?>/images/foto2.jpg"></div>
        <div class="img_container"><img src="<?php echo get_template_directory_uri(); ?>/images/foto3.jpg"></div>

        <div id="overlay">
            <div id="left_button" class="overlay_button" onclick="onLeftButton()"><</div>
            <div id="right_button" class="overlay_button" onclick="onRightButton()">></div>
        </div>
    </div>
</div>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="hero">Hero Section</section>

            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <?php for($i=1;$i<=3;$i++): ?>
                        <div class="services-item">
                            <?php if(is_active_sidebar("services-$i")) dynamic_sidebar("services-$i"); ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>

            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category__in' => array(9,10,15),
                        'category__not_in' => array(1)
                    );
                    $postlist = new WP_Query($args);
                    if($postlist->have_posts()):
                        while($postlist->have_posts()): $postlist->the_post();
                            get_template_part('parts/content','latest-news');
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>Nothing yet to be displayed</p>
                    <?php endif; ?>
                </div>
            </section>

        </main>
    </div>
</div>

<?php get_footer(); ?>