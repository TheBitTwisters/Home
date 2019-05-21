<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
<head>
<title>Error <?=$this->data['code']?> &mdash; <?=$this->config('SITE_TITLE')?></title>
<meta http-equiv="refresh" content="10; url=<?=$this->config('URL')?>">
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
                                The page you are looking for
                                might have been removed,
                                had its link changed,
                                or is temporarily unavailable.
                            </p>
                            <p class="card-text">
                                You will be redirected to homepage.
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
