<div class="jumbotron rounded-0 pfs-banner">
    <h1 class="pfs-banner-title"><?=$this->config('SITE_TITLE')?></h1>
    <p class="pfs-banner-caption"><?=$this->config('SITE_CAPTION')?></p>
</div>
<div class="sticky-top">
    <div class="card bg-info rounded-0 text-light">
        <div class="card-body py-2">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="media mb-2 mb-md-0">
                        <i class="fas fa-phone-alt fa-fw fa-lg align-self-center mr-3"></i>
                        <div class="media-body">
                            <?=$this->data['phones']?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="media">
                        <i class="fas fa-map-marker-alt fa-fw fa-lg align-self-center mr-3"></i>
                        <div class="media-body small">
                            <?=$this->data['address']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark rounded-0 pfs-bg-dark">
        <a class="navbar-brand" href="<?=$this->config('URL_ROOT')?>"><?=$this->config('SITE_TITLE')?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/offers">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
