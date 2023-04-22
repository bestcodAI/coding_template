<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <link rel="stylesheet" href="<?php echo base_url('')?>/styles.css">
</head>
<body>
    <section class="notFound">
        <div class="img">
        <img src="https://assets.codepen.io/5647096/backToTheHomepage.png" alt="Back to the Homepage"/>
        <img src="https://assets.codepen.io/5647096/Delorean.png" alt="El Delorean, El Doc y Marti McFly"/>
        </div>
        <div class="text">
        <h1>404</h1>
        <h2>PAGE NOT FOUND</h2>
        <h3>BACK TO HOME?</h3>
        <a href="<?php echo site_url('/')?>" class="yes">YES</a>
        <a href="https://www.youtube.com/channel/UC9DflhK_PPCmdzgJRf6rynA">NO</a>
        </div>
    </section>
</body>
</html>
