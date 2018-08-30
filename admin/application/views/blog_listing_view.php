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
                    <h1><i class="fa fa-dashboard"></i> Blog Listing</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>image</th>
                                        <th>title</th>
                                        <th>Created Date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_blog_list as $key => $all_blog_data) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><img src="<?= base_url('blog_image') ?>/<?= $all_blog_data->image ?>"></td>
                                            <td><?= $all_blog_data->title ?></td>
                                            <td><?= $all_blog_data->created_date ?></td>
                                            <td><a href="<?= base_url('blog/delete_blog') ?>/<?= $this->friend->base64url_encode($all_blog_data->id) ?>"><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    <?php endforeach ; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Essential javascripts for application to work-->
        <?php $this->load->view('common/js') ?>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <script type="text/javascript">
            var success = '<?= $this->session->flashdata('success') ? $this->session->flashdata('success') : "" ?>';
            var error = '<?= $this->session->flashdata('error') ? $this->session->flashdata('error') : "" ?>';

            if (success) {
                swal("Success", success, "success");
            }
            if (error) {
                swal("Opsss..!!", error, "error");
            }
        </script>
    </body>
</html>