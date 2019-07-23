<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" class="h-100">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('admin/template_noseo'); ?>
<?php $this->render('admin/template_styles'); ?>
    </head>
    <body class="bg-light h-100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col col-lg-4 col-md-6">
                    <img src="<?=$this->config('SITE_LOGO')?>" alt="" class="img-fluid w-50 mx-auto d-block mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="<?=$this->config('DEFAULT_LOGIN_URL')?>" method="post">
                                <div class="form-group">
                                    <label for="form-login-username" class="small">Username</label>
                                    <input type="text" class="form-control" id="form-login-username" name="username" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="form-login-password" class="small">Password</label>
                                    <input type="password" class="form-control" id="form-login-password" name="password" placeholder="Enter password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="form-login-rememberme" name="rememberme">
                                    <label class="form-check-label" for="form-login-rememberme">Remember me</label>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="small">
                        <a href="<?=$this->config('URL')?>">&larr; Back to <?=$this->config('SITE_TITLE')?></a>
                    </div>
                </div>
            </div>
        </div>
<?php $this->render('admin/template_scripts'); ?>
    </body>
</html>
