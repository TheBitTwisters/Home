<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/template_analytics'); ?>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('admin/template_noseo'); ?>
<?php $this->render('home/template_styles'); ?>
<?php $this->render('admin/template_styles'); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="/admin"><?=$this->config('SITE_TITLE')?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar-content">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <main class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <nav class="navbar navbar-expand-md p-0">
                        <div class="collapse navbar-collapse" id="sidebar-content">
                            <ul class="list-group mb-3 w-100">
                                <a href="/admin/index" class="list-group-item list-group-item-action active">
                                    Dashboard
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Media
                                </a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="content">
                        <div class="jumbotron">
                            Dashboard
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php $this->render('home/template_scripts'); ?>
<?php $this->render('admin/template_scripts'); ?>
    </body>
</html>
