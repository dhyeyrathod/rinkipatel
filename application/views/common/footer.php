<footer class="page-footer font-small  black">
    <div style="background-color: #ffe3a2;">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 black-text">Get connected with us on social networks!</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a class="fb-ic">
                    <i class="fa fa-facebook black-text mr-4"> </i>
                    </a>
                    <a class="tw-ic">
                    <i class="fa fa-twitter black-text mr-4"> </i>
                    </a>
                    <a class="gplus-ic">
                    <i class="fa fa-google-plus black-text mr-4"> </i>
                    </a>
                    <a class="li-ic">
                    <i class="fa fa-linkedin black-text mr-4"> </i>
                    </a>
                    <a class="ins-ic">
                    <i class="fa fa-instagram black-text"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left mt-4">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-lg-4">
                <h6 class="text-uppercase font-weight-bold">City</h6>
                <hr class="gold mb-3 mt-0 d-inline-block mx-auto" style="width: 30px;">
                <p>
                    <a href="<?= base_url(); ?>">Agra</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Ahmedabad</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Bangalore</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Chennai</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Chandigarh</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto pt-lg-5  mb-lg-4">
                <p>
                    <a href="<?= base_url(); ?>">Delhi</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Gurgaon</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Hyderabad</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Jaipur</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Kolkata</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto pt-lg-5  mb-lg-4">
                <p>
                    <a href="<?= base_url(); ?>">Lucknow</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Mumbai</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Nashik</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Pune</a>
                </p>
                <p>
                    <a href="<?= base_url(); ?>">Surat</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="gold mb-3 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> Bangalore
                </p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>
                    <a href="mailto:<?= $this->config->item('site_emal_id') ?> " class=" text-white"> <?= $this->config->item('site_emal_id') ?> </a>
                </p>
                <p>
                    <i class="fa fa-phone mr-3"></i>
                    <a href="tel:<?= $this->config->item('site_contact_number') ?>" class=" text-white"> <?= $this->config->item('site_contact_number') ?></a>
                </p>
            </div>
        </div>
    </div>
</footer>