<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
        <meta http-equiv="refresh" content="10" />
<?php $this->render('home/template_analytics'); ?>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('home/template_seo'); ?>
<?php $this->render('home/template_styles'); ?>
    </head>
    <body class="pfs-body">
        <div class="container pfs-box-shadow px-0">
<?php $this->render('error/template_header'); ?>
            <div class="jumbotron rounded-0 pfs-banner">
                <h1 class="display-1">Database Error</h1>
                <p>
                    There has been a problem with the information storage.
                </p>
            </div>
<?php $this->render('error/template_footer'); ?>
        </div>
<?php $this->render('home/template_scripts'); ?>
    </body>
</html>
