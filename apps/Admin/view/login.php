<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" class="h-100">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/template_analytics'); ?>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('admin/template_noseo'); ?>
<?php $this->render('home/template_styles'); ?>
<?php $this->render('admin/template_styles'); ?>
    </head>
    <body class="bg-light h-100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col col-lg-4 col-md-6">
                    <img src="<?=$this->config('SITE_LOGO')?>" alt="" class="img-fluid w-50 mx-auto d-block mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div id="feedback-login"></div>
                                <div class="form-group">
                                    <label for="form-login-username" class="small">Username</label>
                                    <input type="text" class="form-control" id="form-login-username" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="form-login-password" class="small">Password</label>
                                    <input type="password" class="form-control" id="form-login-password" placeholder="Enter password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="form-login-rememberme">
                                    <label class="form-check-label" for="form-login-rememberme">Remember me</label>
                                </div>
                                <div class="text-right">
                                    <button type="button" id="form-login-submit" class="btn btn-primary">Login</button>
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
<?php $this->render('home/template_scripts'); ?>
<?php $this->render('admin/template_scripts'); ?>
        <script type="text/javascript">
            $(function() {

                $('#form-login-submit').on('click', login);

            });

            function login()
            {
                username = $('#form-login-username').val();
                password = $('#form-login-password').val();
                rememberme = $('#form-login-rememberme').val();
                csrf_token = '<?=\Home\Csrf::makeToken();?>';
                $.ajax({
                    type: 'POST',
                    url: '<?=$this->config('DEFAULT_LOGIN_URL')?>',
                    data: {
                        'username': username,
                        'password': password,
                        'rememberme': rememberme,
                        'csrf_token': csrf_token
                    },
                    success: function(result) {
                        console.log(JSON.stringify(result));
                        if (result.error) {
                            $('#feedback-login').feedback(result.feedback);
                        } else {
                            $('#feedback-login').feedback(result.feedback);
                            redirect(result.response.redirect_url);
                        }
                    }
                });
            }

            function redirect(url)
            {
                if (url) {
                    setTimeout(function() {
                        window.location.replace(url);
                    }, 5000);
                }
            }
        </script>
    </body>
</html>
