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
                <!-- profile -->
                <div class="pfs-panel">
                    <h3 class="pfs-title">You can trust Us</h3>
                    <p class="pfs-paragraph">
                        <?= $this->data['profile'] ?>
                    </p>
                </div>
                <!-- offers -->
                <div id="offers">
                    <h3 class="pfs-title">Our Offers</h3>
                    <p class="pfs-paragraph">
                        Our staff is committed to providing your family with the highest quality care and service in your time of need.
                    </p>
<?php if (!empty($this->data['offers'])): ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
<?php foreach ($this->data['offers'] as $offer): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <a class="thumbnail" href="<?=PostUtil::getLink($offer->offer_id, 'offers')?>">
                                    <img src="<?=PostUtil::getImageLink($offer->thumb_url)?>" alt="<?=PostUtil::getSafetyText($offer->title)?>">
                                    <div class="caption">
                                        <?=PostUtil::getSafetyText($offer->title)?>
                                    </div>
                                </a>
                            </div>
<?php endforeach; ?>
                        </div>
                    </div>
<?php endif; ?>
                </div>

            </main>
<?php $this->render('home/template_footer'); ?>
        </div>
<?php $this->render('home/template_scripts'); ?>
<?php $this->render('home/template_adsense'); ?>
    </body>
</html>
