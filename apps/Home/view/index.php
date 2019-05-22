<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#" class="h-100">
<head>
<title>Home &mdash; <?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/styles'); ?>
<style media="screen">
    body
    {
        background: #c7b58c;
        background-image: url('<?=$this->config('SITE_PREVIEW')?>');
        background-size: cover;
        background-position: center;
    }
</style>
</head>
<body class="h-100">
    <div class="container-fluid">
        <div class="fixed-bottom">
            <p>
                <a href="<?=$this->config('SNS_FACEBOOK')?>" class="colors-facebook" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="<?=$this->config('SNS_INSTAGRAM')?>" class="colors-instagram" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="<?=$this->config('SNS_YOUTUBE')?>" class="colors-youtube" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </p>
        </div>
    </div>
<?php $this->render('home/scripts'); ?>
</body>
</html>
