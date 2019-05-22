<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
<head>
<title>Home &mdash; <?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/styles'); ?>
</head>
<body>
<div class="container">
    <main>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <div class="lead text-center">
                            <p class="card-text">
                                <i class="fas fa-unlink fa-2x"></i>
                            </p>
                            <p class="card-text">
                                This is home
                            </p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php $this->render('home/scripts'); ?>
</body>
</html>
<?php $this->printData(); ?>
