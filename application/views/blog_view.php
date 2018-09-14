<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blogs- Read Articles and Stories of Bangalore Escorts and Call Girls</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
                <img src="<?= base_url('assets') ?>/images/slider-1.png" />
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="section-title-bg mb-4">
                        <h1>Rinki Patel Blog</h1>
                    </div>
                </div>
            </div>
            <div class="bg">
                <?php foreach ($all_blog_key as $key => $all_blog_data) : ?>
                    <div class="row">
                        <div class="col-lg-5 col-xl-4">
                            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                                <img class="img-fluid" src="<?= base_url('admin/blog_image') ?>/<?= $all_blog_data->image ?>" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <h3 class="font-weight-bold mb-3"><strong><?= $all_blog_data->title ?></strong></h3>
                            <p class="dark-grey-text"><?= mb_substr($all_blog_data->description, 0, 500); ?></p>
                            <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
                            <a class="btn read btn-md">Read more</a>
                        </div>
                    </div>
                    <hr class="my-5">
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