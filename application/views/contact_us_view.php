<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/favicon.png">
        <title>Contact us- Bangalore Escorts Service in Bangalore | Bangalore Call Girls - Rinki Patel </title>
        <meta name="description" content="Bangalore Escorts - Call (9121300296) Rinki Patel the most hot independent escorts service in bangalore which offer premium bangalore escorts and call girls services to VIP customers " />
        <meta name="keywords" content="bangalore escort service, independent escort service in bangalore, call girls in bangalore, free dating website in bangalore, high profile vip models in bangalore, hot bangalore girls , escort rinki patel, bangalore female escorts, Bangalore Escorts, independent escorts in bangalore   " />
        <meta name="google-site-verification" content="m19ItkvASq_cKe1wJplL6JsfJMuohEZgd3RJ5842Vog" />
        <meta name="robots" content="index, follow" />
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="section-title-bg mb-4">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg">
                        <form class="text-center ">
                            <h2 class="section-title mb-4" >Form</h2>
                            <!-- Name -->
                            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                            <!-- Email -->
                            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
                            <input type="mobile" id="defaultContactFormnumber" class="form-control mb-4" placeholder="Mobile Number">
                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                            </div>
                            <!-- Send button -->
                            <button class="btn send-button btn-block black-text" type="submit">Send</button>
                        </form>
                        <!-- Default form contact -->
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="bg">
                        <h2 class="section-title mb-4" >Adress</h2>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <p class="text-center"><i class="fa fa-map-marker fa-2x"></i></p>
                                <p class="text-center">  <?= $this->config->item('site_location') ?></p>
                            </li>
                            <li>
                                <p class="text-center"><i class="fa fa-phone mt-4 fa-2x"></i></p>
                                <p class="text-center"> <a href="tel:<?= $this->config->item('site_contact_number') ?>" class=" text-white"><?= $this->config->item('site_contact_number') ?></a></p>
                            </li>
                            <li>
                                <p class="text-center mb-4"><i class="fa fa-envelope mt-4 fa-2x"></i></p>
                                <p class="text-center"> <a href="mailto:<?= $this->config->item('site_emal_id') ?> " class=" text-white"> <?= $this->config->item('site_emal_id') ?></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
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