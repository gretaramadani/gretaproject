<article>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>Categories: <?php the_category(', '); ?><?php endif; ?>
            <?php if(has_tag()): ?>Tags: <?php the_tags('', ', '); ?><?php endif; ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>