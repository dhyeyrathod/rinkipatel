<header>
    <div class="row">
        <div class=" col-lg-6 p-lg-4 p-xl-4">
            <div class="logo">
                <a href="<?= base_url() ?>">
                <img src="<?= base_url('assets') ?>/images/logo3.png" />
                </a>
            </div>
        </div>
        <div class="col-lg-6 p-lg-4 p-xl-4 text-lg-right">
            <div class="social">
                <ul>
                    <li>
                        <a href="tel:<?= $this->config->item('site_contact_number') ?>">
                        <i class="fa fa-phone mr-2"></i> <?= $this->config->item('site_contact_number') ?>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?= $this->config->item('site_emal_id') ?>">
                        <i class="fa fa-envelope-o mr-2"></i> <?= $this->config->item('site_emal_id') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>