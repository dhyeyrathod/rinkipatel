<div class="col-lg-6">
    <div class="bg">
        <h2 class="section-title mb-4" >Location</h2>
        <div class="vertical-menu">
            <ul>
                <?php foreach ($all_location_key as $all_location_data) : ?>
                <li>
                    <img src="<?= base_url('assets') ?>/images/giphy.gif" />
                    <?php $location_url = base_url().$all_location_data->area_name."/escorts/".$this->friend->base64url_encode($all_location_data->id) ?>
                    <a href="<?= $location_url ?>" title="Banaswadi Escorts"><?= $all_location_data->area_name ?></a>
                </li>   
                <?php endforeach ; ?>
            </ul>
        </div>
    </div>
</div>