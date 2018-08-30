<div class="container mb-4">
    <div class="keyword">
        <ul>
            <?php foreach ($all_categoy_key as $key => $all_categoy_data) : ?>
            	<?php $category_url = base_url().str_replace(" ","-",$all_categoy_data->category_name)."-escotrs-in-".$this->config->item('site_location')."/".$this->friend->base64url_encode($all_categoy_data->id)."/".rand(1111111111,9999999999) ?>
            <li><a href="<?= $category_url ?>"><?= $all_categoy_data->category_name ?></a></li>
            <?php endforeach ; ?>
        </ul>
    </div>
</div>