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
                            <?= form_open('location/area') ?>
                                <div class="form-group">
                                    <label for="exampleSelect1">Select City</label>
                                    <select class="form-control" name="city">
                                        <option value="">---Select City---</option>
                                        <?php foreach ($all_cities_key as $key => $all_cities_data) : ?>
                                            <option <?php if (set_value('city') == $all_cities_data->id): echo "selected " ; endif ; ?> value="<?= $all_cities_data->id ?>"><?= $all_cities_data->city_name ?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                    <span class="text-danger"><?= form_error('city') ? form_error('city') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Add New Area</label>
                                    <input class="form-control" value="<?= set_value('area_name') ?>" name="area_name" type="text" placeholder="Enter Area Name" autofocus>
                                    <span class="text-danger"><?= form_error('area_name') ? form_error('area_name') : "" ?></span>                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Area Description</label>
                                    <textarea class="form-control" name="description" rows="3"><?= set_value('area_name') ?></textarea>
                                    <span class="text-danger"><?= form_error('description') ? form_error('description') : "" ?></span>                                    
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            <?= form_close() ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>City name</th>
                                        <th>Area Name</th>
                                        <th>status</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_area_key as $key => $all_area_data) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $all_area_data->area_name ?></td>
                                            <td><?= $all_area_data->city_name ?></td>
                                            <td><?= $all_area_data->status ?></td>
                                            <td><a href="<?= base_url('location/area') ?>/<?= $this->friend->base64url_encode($all_area_data->id) ?>"><button class="btn btn-danger">Delete</button></a></td>
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
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <script type="text/javascript">
            var success_area = '<?= $this->session->flashdata('success_area') ? $this->session->flashdata('success_area') : "" ?>';
            var error_area = '<?= $this->session->flashdata('error_area') ? $this->session->flashdata('error_area') : "" ?>';

            if (success_area) {
                swal("Success", success_area, "success");
            }
            if (error_area) {
                swal("Opps..!!!", error_area, "error");   
            }
            CKEDITOR.replace( 'description' );
        </script>
    </body>
</html>