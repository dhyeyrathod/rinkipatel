<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Samples - Vali Admin</title>
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
                    <h1><i class="fa fa-edit"></i>Add New Escorts Form</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Add New Escorts</h3>
                        <div class="tile-body">
                            <?php if ($this->session->flashdata('error')) : ?>
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-danger text-center">
                                    <button class="close" type="button" data-dismiss="alert">×</button><strong><?= $this->session->flashdata('error') ?></strong>
                                </div>
                            </div>
                            <?php endif ; ?>
                            <?php if ($this->session->flashdata('success')) : ?>
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-success text-center">
                                    <button class="close" type="button" data-dismiss="alert">×</button><strong><?= $this->session->flashdata('success') ?></strong>
                                </div>
                            </div>
                            <?php endif ; ?>
                            <?= form_open_multipart('profile/add_new') ?>
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input class="form-control" type="text" value="<?= set_value('name') ?>" name="name" placeholder="Enter full name">
                                    <small class="form-text text-danger"><?= form_error('name') ? form_error('name') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Age</label>
                                    <input class="form-control" type="text" name="age" value="<?= set_value('age') ?>" placeholder="Enter Age">
                                    <small class="form-text text-danger"><?= form_error('age') ? form_error('age') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nationality</label>
                                    <input class="form-control" type="text" name="nationality" value="<?= set_value('nationality') ?>" placeholder="Enter nationality">
                                    <small class="form-text text-danger"><?= form_error('nationality') ? form_error('nationality') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Measurements</label>
                                    <input class="form-control" type="text" name="measurements" value="<?= set_value('measurements') ?>" placeholder="Enter measurements">
                                    <small class="form-text text-danger"><?= form_error('measurements') ? form_error('measurements') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">height</label>
                                    <input class="form-control" type="text" name="height" value="<?= set_value('height') ?>" placeholder="Enter height">
                                    <small class="form-text text-danger"><?= form_error('height') ? form_error('height') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">hair_colour</label>
                                    <input class="form-control" type="text" value="<?= set_value('hair_colour') ?>" name="hair_colour" placeholder="Enter hair_colour">
                                    <small class="form-text text-danger"><?= form_error('hair_colour') ? form_error('hair_colour') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">eye_colour</label>
                                    <input class="form-control" value="<?= set_value('eye_colour') ?>" type="text" name="eye_colour" placeholder="Enter eye_colour">
                                    <small class="form-text text-danger"><?= form_error('eye_colour') ? form_error('eye_colour') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">languages</label>
                                    <input class="form-control" value="<?= set_value('languages') ?>" type="text" name="languages" placeholder="Enter languages">
                                    <small class="form-text text-danger"><?= form_error('languages') ? form_error('languages') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">price_one_hour</label>
                                    <input class="form-control" value="<?= set_value('price_one_hour') ?>" type="text" name="price_one_hour" placeholder="Enter price_one_hour">
                                    <small class="form-text text-danger"><?= form_error('price_one_hour') ? form_error('price_one_hour') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">price_three_hour</label>
                                    <input class="form-control" value="<?= set_value('price_three_hour') ?>" type="text" name="price_three_hour" placeholder="Enter price_three_hour">
                                    <small class="form-text text-danger"><?= form_error('price_three_hour') ? form_error('price_three_hour') : "" ?></small>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">price_over_night</label>
                                    <input class="form-control" value="<?= set_value('price_over_night') ?>" type="text" name="price_over_night" placeholder="Enter price_over_night">
                                    <small class="form-text text-danger"><?= form_error('price_over_night') ? form_error('price_over_night') : "" ?></small>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label">Seeking for</label>
                                    <input class="form-control" value="<?= set_value('seeking_for') ?>" type="text" name="seeking_for" placeholder="Enter Seeking for">
                                    <small class="form-text text-danger"><?= form_error('seeking_for') ? form_error('seeking_for') : "" ?></small>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" value="<?= set_value('email') ?>" type="text" name="email" placeholder="Enter Email">
                                    <small class="form-text text-danger"><?= form_error('email') ? form_error('email') : "" ?></small>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Contact Number</label>
                                    <input class="form-control" value="<?= set_value('contact_number') ?>" type="text" name="contact_number" placeholder="Enter Contact Number">
                                    <small class="form-text text-danger"><?= form_error('contact_number') ? form_error('contact_number') : "" ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect1">Select City</label>
                                    <select id="select_city" name="fk_city_id" class="form-control">
                                        <option value="">---Select City---</option>
                                        <?php foreach ($all_cities_key as $key => $all_cities_data) : ?>
                                            <option value="<?= $all_cities_data->id ?>"><?= $all_cities_data->city_name ?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('fk_city_id') ? form_error('fk_city_id') : "" ?></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect1">Select Area</label>
                                    <select id="select_area" name="fk_area_id" class="form-control">
                                        <option value="">---Select Area---</option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('fk_area_id') ? form_error('fk_area_id') : "" ?></small>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Image Upload</label>
                                    <input class="form-control-file" name="escorts_images[]" multiple type="file" aria-describedby="fileHelp">
                                    <small class="form-text text-muted" id="fileHelp">For upload multiple image hold conroll key and select multiple image</small>
                                </div>

                                <div class="tile-footer">
                                    <button type="Submit" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('common/js') ?>
        <script type="text/javascript">
            $("#select_city").change(function() {
                var city_id = $("#select_city").val();
                var ajex_url = base_url + "/profile/area";
                $.ajax({
                    type: "POST",
                    url: ajex_url,
                    data: {city_id:city_id},
                    success: function(response){
                        if (response.status == "success" && response.area_data.length > 0) {
                            var html_str = '<option value="">---Select Area---</option>';
                            $("#select_area").html('');
                            for (var i = 0 ; i < response.area_data.length ; i++ )
                            {
                                html_str += '<option value = "'+ response.area_data[i].id +'">'+ response.area_data[i].area_name +'</option>';
                            }
                            $("#select_area").html(html_str);
                        } else {
                            alert("in this cities area is not present");
                        }
                    },
                    error : function(response){
                        alert(response.responseText);
                    }
                });
            });
        </script>
    </body>
</html>