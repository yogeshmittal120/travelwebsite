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
                            <li><a href="#">Add Tour</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Tour Administration</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url() ?>Admin/addtourPackagePost" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="txtTour_Name">Tour Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="txtTour_Name" name="Tour_Name" placeholder="Tour Name" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="5" placeholder="Description..." class="form-control"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="datevalid_from" class=" form-control-label">Valid From</label></div>
                                <div class="col-12 col-md-9"> <input type="date" id="datevalid_from" name="valid_from" placeholder="Text" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="datevalid_to" class=" form-control-label">Valid To</label></div>
                                <div class="col-12 col-md-9"> <input type="date" id="datevalid_to" name="valid_to" placeholder="Text" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Select Tour Place </label></div>
                                <div class="col-12 col-md-9">
                                    <select name="place" id="select" class="form-control" name="from">
                                        <option value="0">Please select</option>
                                        <?php if (!empty($place)) {

                                            for ($i = 0; $i < count($place); $i++) {
                                        ?>
                                                <option value="<?php echo $place[$i]['name'] ?>"><?php echo $place[$i]['name'] ?></option>
                                        <?php }
                                        } ?>


                                    </select>
                                </div>
                            </div>
                            <div class="row form-group" >
                                <div class="col col-md-3"><label class=" form-control-label">Cancellation</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="cancellation_status" value="0" class="form-check-input">Allowed
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="cancellation_status" value="1" class="form-check-input">Not Allowed
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group " style="display:none;" id="C_charge">
                                <div class="col col-md-3"><label class=" form-control-label" for="txtCancellationCharge">Cancellation Charge (%)</label></div>
                                <div class="col-12 col-md-3">
                                    <input type="text" id="txtCancellationCharge" name="cancellation_charge" placeholder="Cancellation charge" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group " style="display:none;" id="C_duraion">
                                <div class="col col-md-3"><label class=" form-control-label" for="cancellation_duraion">Cancellation Before(Hrs)</label></div>
                                <div class="col-12 col-md-3">
                                    <input type="text" id="cancellation_duraion" name="cancellation_duraion" placeholder="Cancellation Before(Hrs)" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload Images</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                            </div>
                            <div class="row form-group" >
                                <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="Status" name="status" value='0' class="form-check-input">Activate
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="Status" name="status" value="1" class="form-check-input">Deactivate
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
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

        $("#inline-radio1").click(function() {
               $('#C_charge').show(); $('#C_duraion').show();
        });
        $("#inline-radio2").click(function() {
               $('#C_charge').hide(); $('#C_duraion').hide();
        });
    });
</script>

<?php if ($this->session->flashdata('msg') != "") { ?>
  <script>
      alert("<?php echo $this->session->flashdata('msg'); ?>")
    showAlert("<?php echo $this->session->flashdata('msg'); ?>", 'success');
  </script>
<?php } ?>