<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
<head>
<title>Home &mdash; <?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/styles'); ?>
</head>
<body>
<div class="container">
    <?php $this->printData(); ?>
</div>
<?php $this->render('home/scripts'); ?>
</body>
</html>
