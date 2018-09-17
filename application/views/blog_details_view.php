<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/favicon.png">
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
                <img src="<?= base_url('assets/images') ?>/slider-1.png" />
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
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-lg-12">
                        <img src="<?= base_url('admin/blog_image') ?>/<?= $blog_info->image ?>" alt="Sample image"  class="img-fluid blog-detals mr-3 mb-2">
                        <!-- Post title -->
                        <h3 class="font-weight-bold mb-3"><strong><?= $blog_info->title ?></strong></h3>
                        <!-- Excerpt -->
                        <?= $blog_info->description ?>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
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