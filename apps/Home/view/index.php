<!DOCTYPE html>
<html lang="<?=$this->config('SITE_LOCALE')?>" prefix="og: http://ogp.me/ns#">
    <head>
        <title><?=$this->config('SITE_TITLE')?></title>
<?php $this->render('home/template_analytics'); ?>
<?php $this->render('home/template_meta'); ?>
<?php $this->render('home/template_seo'); ?>
<?php $this->render('home/template_styles'); ?>
    </head>
    <body class="pfs-body">
        <div class="container pfs-box-shadow px-0">
<?php $this->render('home/template_header'); ?>
            <!-- profile -->
            <div id="profile" class="pfs-content">
                <div class="row align-items-center no-gutters">
                    <div class="col-md-5 order-md-last">
                        <img class="img-fluid mr-md-4 mb-3 mb-md-0 p-3" src="<?=$this->config('URL_ROOT')?>/img/bench-carved-stones-cemetery.jpg" alt="">
                    </div>
                    <div class="col-md-7 order-md-first">
                        <h3 class="pfs-title">You can Trust Us</h3>
                        <p class="pfs-paragraph">
                            <?=$this->data['company']['profile']?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- offers -->
            <!-- <div id="offers" class="pfs-content pfs-content-alter">
                <h3 class="pfs-title">Offers</h3>
                <p class="pfs-paragraph">
                    Our staff is committed to providing your family with the highest quality care and service in your time of need.
                </p>
            </div> -->
            <!-- contact -->
            <div id="contact" class="pfs-content">
                <div class="row align-items-start no-gutters">
                    <div class="col-md-4">
                        <img class="img-fluid mr-md-4 mb-3 mb-md-0 p-3" src="<?=$this->config('URL_ROOT')?>/img/fingers-hand-reaching.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <h3 class="pfs-title">Contact Us</h3>
                        <p class="pfs-paragraph">
                            Never hesitate to call us or leave us a message when you have inquiries, comments and want to arrange a meeting with our experienced professionals. We would be honored to discuss to you the quality service we render in further details and we're greatly happy ot assist you in any way we can.
                        </p>
                        <div class="card bg-light">
                            <div class="card-body">
                                <form action="/home/contact_send" method="post">
                                    <div class="form-group row mb-1">
                                        <label for="form-contact-name" class="col-md-4 col-xl-3 col-form-label text-md-right">Name:</label>
                                        <div class="col-md-8 col-xl-9">
                                            <input type="text" class="form-control" id="form-contact-name" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label for="form-contact-email" class="col-md-4 col-xl-3 col-form-label text-md-right">Email / Phone:</label>
                                        <div class="col-md-8 col-xl-9">
                                            <input type="text" class="form-control" id="form-contact-email" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label for="form-contact-message" class="col-md-4 col-xl-3 col-form-label text-md-right">Message:</label>
                                        <div class="col-md-8 col-xl-9">
                                            <textarea class="form-control" id="form-contact-message" name="message" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="form-contact-message" class="col-md-4 col-xl-3 col-form-label text-md-right"></label>
                                        <div class="col-md-8 col-xl-9">
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $this->render('home/template_footer'); ?>
        </div>
<?php $this->render('home/template_scripts'); ?>
<?php // $this->render('home/template_adsense'); ?>
    </body>
</html>
