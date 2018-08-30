<div class="col-lg-6">
    <div class="bg">
        <h2 class="section-title mb-4">Services</h2>
        <div class="vertical-menu">
            <ul>
            <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                <li>
                    <img src="<?= base_url('assets') ?>/images/giphy.gif" />
                    <?php $services_url = base_url().str_replace(" ","-",$all_services_data->services_name)."-in-".$this->config->item('site_location')."/".$this->friend->base64url_encode($all_services_data->id) ?>
                    <a href="<?= $services_url ?>"><?= $all_services_data->services_name ?></a>
                </li>
            <?php endforeach ; ?>
            </ul>
        </div>
    </div>
</div>