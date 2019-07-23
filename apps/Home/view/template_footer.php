<footer class="pfs-footer">
    <div class="row align-items-center">
        <div class="col-md-3">
            <img class="img-fluid mb-md-0 mb-3 px-5" src="<?=$this->config('URL_ROOT')?>/img/pfs.png" alt="">
        </div>
        <div class="col-md-4">
            <p>
                <strong>Mission</strong>
                <br>
                <?=$this->data['company']['mission']?>
            </p>
        </div>
        <div class="col-md-4">
            <p>
                <strong>Vision</strong>
                <br>
                <?=$this->data['company']['vision']?>
            </p>
        </div>
    </div>
    <h6 class="text-center">
        &copy; 2019
        <strong><?=$this->config('SITE_TITLE')?></strong>
    </h6>
    <div class="text-center">
        <a href="<?=$this->config('SITE_TERMS')?>">Terms</a>
    </div>
</footer>
