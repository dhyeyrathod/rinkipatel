<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Booking of Bangalore Escorts and Call Girls for Night Fun</title>
        <meta name="description" content="Bangalore Escorts. Rinki Patel is and Independent Bangalore Escorts provide Best Escorts Services in Bangalore." />
        <meta name="keywords" content="bangalore escort service, independent escort service in bangalore, call girls in bangalore, free dating website in bangalore, high profile vip models in bangalore, hot bangalore girls , escort rinki patel, bangalore female escorts, Bangalore Escorts, independent escorts in bangalore   " />
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
                <img src="<?= base_url('assets') ?>/images/slider-1.png" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="section-title-bg mb-4">
                        <h1>Booking</h1>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box"><img style="width: 100%" src="<?= base_url('assets') ?>/images/img-1.jpg" /></div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg">
                        <?= form_open('booking',array('class' =>'text-center 0 border-light p-4')) ?>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" value="<?= set_value('name') ?>" name="name" class="form-control" placeholder="Name">
                                    <small><?= form_error('name') ? form_error('name') : "" ; ?></small>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="date" value="<?= set_value('date_of_appointment') ?>" name="date_of_appointment" class="form-control" placeholder="Date of Appointment">
                                    <small><?= form_error('date_of_appointment') ? form_error('date_of_appointment') : ""  ;?></small>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="duration" value="<?= set_value('duration') ?>" class="form-control" placeholder="Duration">
                                    <small><?= form_error('duration') ? form_error('duration') : "" ; ?></small>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Your Email">
                                    <small><?= form_error('email') ? form_error('email') : "" ; ?></small>
                                </div>
                                <div class="col">
                                    <input type="text" name="contact_number" value="<?= set_value('contact_number') ?>" class="form-control" placeholder="Your phone"><small><?= form_error('contact_number') ? form_error('contact_number') : "" ; ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3" placeholder="Message"><?= set_value('message') ?></textarea>
                                <small><?= form_error('message') ? form_error('message') : "" ; ?></small>
                            </div>
                            <button class="btn send-button black-text" type="submit">Submit</button>
                        <?= form_close() ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box"><img style="width: 100%" src="<?= base_url('assets') ?>/images/img-2.jpg" /></div>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                var success = '<?= $this->session->userdata('success') ?>';
                if (success) {
                    swal("Success",Success, "success");
                }
            });
        </script>
    </body>
</html>