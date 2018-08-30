<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bangalore</title>
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
            <div class="col-lg-12 mb-2">
                <div class="section-title-bg mb-4">
                    <h1>Details</h1>
                </div>
            </div>
            <div class="bg">
                <div class="row">
                    <div class="col-lg-7">
                    <?php if (count($profile_image_key)) : ?>
                        <div class="preview-pic tab-content">
                            <?php foreach ($profile_image_key as $key => $profile_image_data) : ?>
                                <div class="tab-pane <?php if ($key == 1) : echo 'active' ; endif ;?>" id="pic-<?= $key ?>"><img src="<?= base_url('admin/post_image') ?>/<?= $profile_image_data->image_name ?>" /></div>
                            <?php endforeach ; ?>
                        </div>
                        <ul class="nav">
                            <?php foreach ($profile_image_key as $key => $profile_imagethumb_data) : ?>
                                <li><a data-target="#pic-<?= $key ?>" data-toggle="tab"><img style="width: 100px;height: 150px;padding: 5px" src="<?= base_url('admin/post_image') ?>/<?= $profile_imagethumb_data->image_name ?>" /></a></li>
                            <?php endforeach ; ?>
                        </ul>
                    <?php endif ; ?>
                    </div>
                    <div class="col-lg-5">
                        <h3><?= $this->config->item('site_name') ?></h3>
                        <p> NEW!!! Young and Sexy GFE!</p>
                        <table class="statstable" cellspacing="0" cellpadding="0" width="100%">
                            <tbody>
                                <tr>
                                    <td>Age:</td>
                                    <td><?= $profile_details_key->age ?></td>
                                </tr>
                                <tr>
                                    <td>Nationality:</td>
                                    <td><?= $profile_details_key->nationality ?></td>
                                </tr>
                                <tr>
                                    <td>Measurements:</td>
                                    <td><?= $profile_details_key->measurements ?></td>
                                </tr>
                                <tr>
                                    <td>Height:</td>
                                    <td><?= $profile_details_key->height ?></td>
                                </tr>
                                <tr>
                                    <td>Hair Colour:</td>
                                    <td><?= $profile_details_key->hair_colour ?></td>
                                </tr>
                                <tr>
                                    <td>Eye Colour:</td>
                                    <td><?= $profile_details_key->eye_colour ?></td>
                                </tr>
                                <tr>
                                    <td>Languages:</td>
                                    <td><?= $profile_details_key->languages ?></td>
                                </tr>
                                <tr>
                                    <td>Sees:</td>
                                    <td><?= $profile_details_key->seeking_for ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:</td>
                                    <td><a href="tel:<?= $profile_details_key->contact_number ?>"><?= $profile_details_key->contact_number ?></a></td>
                                </tr>
                                
                                <tr>
                                    <td>Email Id:</td>
                                    <td><a href="mailto:<?= $profile_details_key->email_id ?>"><?= $profile_details_key->email_id ?></a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <br />
                        <b>Rinki Patel is listed in</b>
                        <p>All services are at the lady's sole discretion</p>
                        <b>Rinki Patel Duos With</b>
                        <br /><br />  
                        <?php if (count($profile_image_key)) : ?>
                            <div class="img-box  mb-4">
                                <a href="#"> 
                                    <img src="<?= base_url('admin/post_image') ?>/<?= $profile_image_key[0]->image_name ?>" style="width:100%;" />
                                </a>
                            </div>
                        <?php endif ; ?>
                        <h5>Rinki Patel Rates</h5>
                        <table class="statstable" cellspacing="0" cellpadding="0" width="100%">
                            <tbody>
                                <tr>
                                    <td class="rates">Service Timeing</td>
                                    <td class="incall">Rates</td>
                                </tr>
                                <tr>
                                    <td class="rates">1 Hour&nbsp;</td>
                                    <td class="incall">&nbsp;Rs.<?= $profile_details_key->price_one_hour ?></td>
                                </tr>
                                <tr>
                                    <td class="rates">3 Hour&nbsp;</td>
                                    <td class="incall">&nbsp;Rs.<?= $profile_details_key->price_three_hour ?></td>
                                </tr>
                                <tr>
                                    <td class="rates">Full Night&nbsp;</td>
                                    <td class="incall">&nbsp;Rs.<?= $profile_details_key->price_over_night ?></td>
                                </tr>
                            </tbody>
                        </table>
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