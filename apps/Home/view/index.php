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
<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
    <head>
<?php $this->render('analytics'); ?>
        <title><?=$this->config('SITE_NAME')?> - <?=$this->config('SITE_CAPTION')?></title>
<?php $this->render('default_ogp'); ?>
<?php $this->render('required_meta'); ?>
<?php $this->render('seo'); ?>
    </head>
    <body>
<?php $this->render('fb_script'); ?>
        <div class="container">
<?php $this->render('header'); ?>
            <div class="jumbotron">
                <h1 class="title">Paradise Funeral Services</h1>
                <p class="slogan">Your loved ones' paradise resting in peace</p>
            </div>
            <main>
                <div class="row">
                    <div class="col-md-8">
<?php $this->render('quotes/message'); ?>
                        <h3 class="content-title">You can trust Us</h3>
                        <p class="content-text">
                            <?= $this->company->profile ?>
                        </p>
                        <h3 class="content-title">What&apos;s new?</h3>
<?php $this->render('news/list'); ?>
                    </div>
                    <div class="col-md-4">
<?php $this->render('offers/sidenav'); ?>
                    </div>
                </div>
            </main>
<?php $this->render('footer'); ?>
        </div>
<?php $this->render('scripts'); ?>
<?php $this->render('adsense'); ?>
    </body>
</html>
