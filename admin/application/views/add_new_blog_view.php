<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blank Page - Vali Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('common/css') ?>
    </head>
    <body class="app sidebar-mini rtl">
        <!-- Navbar-->
        <?php $this->load->view('common/header') ?>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <?php $this->load->view('common/sidebar') ?>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
                    <p>Start a beautiful journey here</p>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="col-lg-10">
                            <?php if (isset($image_upload_error['error'])) : ?>
                                <div class="alert alert-danger text-center">
                                    <strong><?= $image_upload_error['error'] ?></strong>
                                </div>
                            <?php endif ; ?>
                            <?= form_open_multipart('blog/add_new_blog') ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input class="form-control" value="<?= set_value('title') ?>" name="title" type="text" placeholder="Enter Blog Title" autofocus>
                                    <span class="text-danger"><?= form_error('title') ? form_error('title') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meta Title</label>
                                    <input class="form-control" value="<?= set_value('meta_title') ?>" name="meta_title" type="text" placeholder="Enter Meta Title">
                                    <span class="text-danger"><?= form_error('meta_title') ? form_error('meta_title') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meta Description</label>
                                    <input class="form-control" value="<?= set_value('meta_description') ?>" name="meta_description" type="text" placeholder="Enter Meta Description">
                                    <span class="text-danger"><?= form_error('meta_description') ? form_error('meta_description') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input class="form-control-file" id="exampleInputFile" name="file_upload" type="file" aria-describedby="fileHelp">
                                    <small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" name="description" rows="3"><?= set_value('description') ?></textarea>
                                    <span class="text-danger"><?= form_error('description') ? form_error('description') : "" ?></span>                                    
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            <?= form_close() ?> 
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Essential javascripts for application to work-->
        <?php $this->load->view('common/js') ?>
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <script type="text/javascript">
            var success = '<?= $this->session->flashdata('success') ? $this->session->flashdata('success') : "" ?>';
            if (success) {
                swal("Success", success, "success");
            }
            CKEDITOR.replace( 'description' );
        </script>
    </body>
</html>