<!DOCTYPE html>
<html lang="<?=\Home\Config::get('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
<head>
<title>Page not found &mdash; <?=\Home\Config::get('SITE_TITLE')?></title>
<meta http-equiv="refresh" content="10; url=<?=\Home\Config::get('URL')?>">
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
</body>
</html>
