<aside id="secondary" class="sidebar">
    <div class="container">

        <?php if(is_active_sidebar('sidebar-blog')): ?>
            <?php dynamic_sidebar('sidebar-blog'); ?>
        <?php else: ?>
            <div class="widget-wrapper">
                <h4 class="widget-title">Sidebar</h4>
                <p>Add widgets in Appearance → Widgets → Blog Sidebar.</p>
            </div>
        <?php endif; ?>

    </div>
</aside>