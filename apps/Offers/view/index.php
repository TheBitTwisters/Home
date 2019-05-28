<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/template_analytics'); ?>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('home/template_seo'); ?>
<?php $this->render('home/template_styles'); ?>
    </head>
    <body>
        <div class="container">
<?php $this->render('home/template_header'); ?>
            <div class="jumbotron">
                <h1 class="title"><?=$this->config('SITE_TITLE')?></h1>
                <p class="slogan"><?=$this->config('SITE_CAPTION')?></p>
            </div>
            <main>
                <div class="row">
                    <div class="col-md-8">
<?php $this->render('quotes/message'); ?>
                        <h3 class="content-title">You can trust Us</h3>
                        <p class="content-text">
                            <?= $this->data['profile'] ?>
                        </p>
                        <h3 class="content-title">What&apos;s new?</h3>
<?php $this->render('news/list'); ?>
                    </div>
                    <div class="col-md-4">
<?php $this->render('offers/sidenav'); ?>
                    </div>
                </div>
            </main>
<?php $this->render('home/template_footer'); ?>
        </div>
<?php $this->render('home/template_scripts'); ?>
<?php $this->render('home/template_adsense'); ?>
    </body>
</html>
