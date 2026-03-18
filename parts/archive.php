<div class="container">
    <?php the_archive_title('<h1 class="archive-title">','</h1>'); ?>
    <?php the_archive_description('<div class="archive-description">','</div>'); ?>
    <?php
    if(have_posts()):
        while(have_posts()): the_post();
            get_template_part('parts/content');
        endwhile;
    else: ?>
        <p>Nothing yet to be displayed</p>
    <?php endif; ?>
</div>