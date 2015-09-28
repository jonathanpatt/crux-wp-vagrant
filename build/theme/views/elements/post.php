<article id="post-<?= $post->id ?>">
    <header>
        <h1><a href="<?= $post->permalink ?>"><?= $post->title ?></a></h1>
    </header>
    <?= $post->content ?>
</article>
