<link rel="canonical"               href="<?=$this->config('URL_ROOT').$_SERVER['REQUEST_URI']?>">
<meta property="og:url"             content="<?=$this->config('URL_ROOT').$_SERVER['REQUEST_URI']?>">
<meta property="og:site_name"       content="<?=$this->config('SITE_TITLE')?>">
<meta property="og:locale"          content="<?=$this->config('SITE_LOCALE')?>">
<meta property="og:type"            content="website">
<meta property="og:title"           content="<?=$this->config('SITE_NAME')?>">
<meta property="og:description"     content="<?=$this->config('SITE_DESCRIPT')?>">
<meta property="og:image"           content="<?=$this->config('SITE_PREVIEW')?>">
<meta property="og:image:width"     content="<?=$this->config('IMAGE_MAXWIDTH')?>">
<meta property="og:image:height"    content="<?=$this->config('IMAGE_MAXHEIGHT')?>">
<meta property="fb:app_id"          content="<?=$this->config('FB_APP_ID')?>">
<meta property="fb:pages"           content="<?=$this->config('FB_PAGE_ID')?>">
<meta name="twitter:card"           content="summary_large_image">
<meta name="twitter:title"          content="<?=$this->config('SITE_NAME')?>">
<meta name="twitter:description"    content="<?=$this->config('SITE_DESCRIPT')?>">
<meta name="twitter:image"          content="<?=$this->config('SITE_PREVIEW')?>">
<meta name="twitter:domain"         content="<?=$this->config('URL')?>">
<meta name="pinterest-rich-pin"     content="true" />
<meta name="description"            content="<?= $this->config('SITE_CAPTION') ?>">
<meta name="keywords"               content="<?= $this->config('SITE_KEYWORDS') ?>">
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "image": {
        "@type": "ImageObject",
        "url": "<?=$this->config('SITE_PREVIEW')?>",
        "width": "<?=$this->config('IMAGE_MAXWIDTH')?>",
        "height": "<?=$this->config('IMAGE_MAXHEIGHT')?>"
    },
    "author": "KPOParazzi",
    "mainEntityOfPage": "<?=$this->config('URL_ROOT').$_SERVER['REQUEST_URI']?>",
    "keywords": "<?=$this->config('SITE_KEYWORDS')?>",
    "publisher": {
        "@type": "Organization",
        "name": "ParadiseFuneralServices.net",
        "url": "http://www.paradisefuneralservices.net/",
        "logo": {
            "@type": "ImageObject",
            "url": "<?=$this->config('SITE_LOGO')?>",
            "width": "<?=$this->config('IMAGE_LOGO_WIDTH')?>",
            "height": "<?=$this->config('IMAGE_LOGO_HEIGHT')?>"
        }
    },
    "url": "<?=$this->config('URL_ROOT').$_SERVER['REQUEST_URI']?>",
    "description": "<?=$this->config('SITE_CAPTION')?>",
    "name": "<?=$this->config('SITE_CAPTION')?>"
}
</script>
