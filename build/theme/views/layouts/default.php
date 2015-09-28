<!doctype html>
<html lang="<?php bloginfo('language') ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/style.css">
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <? wp_head() ?>
</head>
<body>
    <?= $this->content() ?>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/retina.min.js"></script>
    <? wp_footer() ?>
</body>
</html>
