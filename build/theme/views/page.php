<div id="content">
    <?php while (have_posts()): ?>
        <?php the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>
</div>
<aside id="sidebar">
    <ul>
        <?php dynamic_sidebar('sidebar') ?>
    </ul>
</aside>
