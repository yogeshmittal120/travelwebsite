<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#"><?php if (isset($tour_package)) {
                                    echo "Edit";
                                } else {
                                    echo "Add New";
                                } ?></a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php print_r($tour_package); ?> -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong><?php if (isset($tour_package)) {
                                    echo "Edit";
                                } else {
                                    echo "Add New";
                                } ?></strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php if (isset($tour_package)) {
                                            echo base_url('Admin/edittourpackagesPost');
                                        } else {
                                            echo base_url('Admin/addtourPackagePost');
                                        } ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="txtTour_Name">Tour Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="<?php if (isset($tour_package)) {
                                                                    print_r($tour_package[0]['name']);
                                                                } ?>" id="txtTour_Name" name="Tour_Name" placeholder="Tour Name" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" placeholder="description" id="textarea-input" rows="5" class="form-control"><?php if (!empty($tour_package)) {
                                                                                                                                                                            echo ($tour_package[0]['Description']);
                                                                                                                                                                        } ?></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="datevalid_from" class=" form-control-label">Valid From</label></div>
                                <div class="col-12 col-md-9"> <input type="date" id="datevalid_from" value="<?php if (isset($tour_package)) {
                                                                                                                print_r($tour_package[0]['valid_from']);
                                                                                                            } ?>" name="valid_from" placeholder="Text" class="form-control  datepicker"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="datevalid_to" class=" form-control-label">Valid To</label></div>
                                <div class="col-12 col-md-9"> <input type="date" id="datevalid_to" value="<?php if (isset($tour_package)) {
                                                                                                                print_r($tour_package[0]['valid_to']);
                                                                                                            } ?>" name="valid_to" placeholder="Text" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectplace" class=" form-control-label">Select Tour Place </label></div>
                                <div class="col-12 col-md-9">
                                    <select name="place" id="selectplace" class="form-control" name="from">
                                        <!-- <option> Select Place</option> -->
                                        <?php if (!empty($place)) {
                                            for ($i = 0; $i < count($place); $i++) {
                                        ?>
                                                <option>
                                                    <?php
                                                    if (isset($tour_package)) {
                                                        echo ($tour_package[0]['place']);
                                                    } else {
                                                        echo $place[$i]['name'];
                                                    } ?>
                                                    </option>
                                        <?php }
                                        } ?>


                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Cancellation</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-cancellation_status" class="form-check-label ">
                                            <input type="radio" id="inline-cancellation_status" name="cancellation_status" checked="<?php if (isset($tour_package[0]['cancellation_status'])) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>" value="0" class="form-check-input">Allowed
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="cancellation_status" checked="<?php if (isset($tour_package[0]['cancellation_status'])) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>" value="1" class="form-check-input">Not Allowed
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group " style="display:none;" id="C_charge">
                                <div class="col col-md-3"><label class=" form-control-label" for="txtCancellationCharge">Cancellation Charge (%)</label></div>
                                <div class="col-12 col-md-3">
                                    <input type="text" id="txtCancellationCharge" value="<?php if (isset($tour_package)) {
                                                                                                echo ($tour_package[0]['cancellation_charge']);
                                                                                            } ?>" name="cancellation_charge" placeholder="Cancellation charge" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group " style="display:none;" id="C_duraion">
                                <div class="col col-md-3"><label class=" form-control-label" for="cancellation_duraion">Cancellation Before(Hrs)</label></div>
                                <div class="col-12 col-md-3">
                                    <input type="text" id="cancellation_duraion" value="<?php if (isset($tour_package)) {
                                                                                            echo ($tour_package[0]['cancellation_duraion']);
                                                                                        } ?>" name="cancellation_duraion" placeholder="Cancellation Before(Hrs)" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload Images</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-Status" class="form-check-label ">
                                            <input type="radio" id="inline-Status" name="status" checked='<?php if (isset($tour_package[0]['status'])) {
                                                                                                        echo 'checked';
                                                                                                    } ?>' class="form-check-input">Activate
                                        </label>
                                        <label for="inline-Status1" class="form-check-label ">
                                            <input type="radio" id="inline-Status1" name="status" checked='<?php if (isset($tour_package[0]['status'])) {
                                                                                                        echo "checked";
                                                                                                    } ?>' class="form-check-input">Deactivate
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if (isset($tour_package)) {
                                                                        echo $tour_package[0]['id'];
                                                                    } ?>">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o text-success"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban text-danger"></i> Reset
                        </button>
                    </div>
                    </form>
                </div>

            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<script>
    $(document).ready(function() {

        $("#inline-cancellation_status").click(function() {
            $('#C_charge').show();
            $('#C_duraion').show();
        });
        $("#inline-radio2").click(function() {
            $('#C_charge').hide();
            $('#C_duraion').hide();
        });
    });
</script>