<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $location_info_key->meta_title ?></title>
        <meta name="description" content="<?= $location_info_key->meta_description ?>" />
        <meta name="keywords" content="<?= $location_info_key->meta_keywords ?>" />
        <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <div class="container">
            <?php $this->load->view('common/header') ?>
        </div>
        <div class="container">
            <?php $this->load->view('common/nevbar') ?>
        </div>
        <div class="container mb-4">
            <div class="slider">
                <img src="<?= base_url('assets') ?>/images/slider-3.png" />
            </div>
        </div>
        <div class="container mb-4">
            <div class="col-lg-12 mb-2">
                <div class="section-title-bg mb-4">
                    <h1><?= $location_info_key->area_name ?></h1>
                </div>
            </div>
            <div class="bg">
                <?= $location_info_key->description ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($all_profile_key as $key => $all_profile_data) : ?>
                    <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <?php $url = base_url('benglore')."/".$all_profile_data->area_name."-escorts/".$this->friend->base64url_encode($all_profile_data->id) ; ?>
                        <a href="<?= $url ?>">
                            <div class="img-box-bg">
                                <div class="img-box"><img style="width: 277px;height: 340px;" src="<?= base_url('admin/post_image') ?>/<?= $all_profile_data->image_name ?>" />
                                </div>
                                <div class="img-text-box">
                                    <h4><?= $this->config->item('site_name') ?></h4>
                                    <p><?= $all_profile_data->area_name ?> Escorts</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ; ?>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <?php $this->load->view('common/services') ?>
                <?php $this->load->view('common/location_area') ?>
            </div>
        </div>
        <?php $this->load->view('common/category') ?>
        <div class="container">
            <?php $this->load->view('common/footer') ?>
        </div>
        <?php $this->load->view('common/js') ?>
    </body>
</html>