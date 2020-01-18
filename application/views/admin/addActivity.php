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
                            <li><a href="#">Add Tour Activity</a></li>

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
                        <strong>Tour Activity Administration</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo base_url(); ?>Admin/addActivityPost" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Tour</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="tour_id" id="selectLg" class="form-control form-control" required>

                                        <option value="0">Please select</option>
                                        <?php if (!empty($tour)) {
                                            for ($i = 0; $i < count($tour); $i++) { ?>
                                                <option value="<?php echo $tour[$i]['id']; ?>"><?php echo $tour[$i]['name']; ?></option>
                                        <?php  }
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="Activity" class=" form-control-label">Activity Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="Activity" name="Tour_Name" placeholder="Activity Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="Information" class=" form-control-label">Usefull Information</label></div>
                                <div class="col-12 col-md-9"><textarea name="Information" id="Information" rows="5" placeholder="Description..." class="form-control"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="Inclusion" class=" form-control-label">Inclusion</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" id="Inclusion" rows="5" placeholder="Inclusion..." class="form-control"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="Duration" class=" form-control-label">Duration</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="Duration" name="Duration" placeholder="duraion" class="form-control" required></div>
                            </div>
               
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectTimeSlots" class=" form-control-label">Select Time Slots</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectTimeSlots" id="selectTimeSlots" class="form-control" required>
                                        <option value="0">Please select</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Morning & Evening">Morning & Evening</option>

                                    </select>
                                </div>
                            </div>

                            <!-- <b><label for="inputvalid_to"></label></b> -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for='setprice' class=" form-control-label">Set Titcket Price</label></div>
                                <div class="col-2 col-md-3"> <input type="text" id="setprice" name="Adult" placeholder="Adult" class="form-control" required></div>
                                <div class="col-2 col-md-3"> <input type="text" id="setprice" name="Child" placeholder="Child" class="form-control"></div>
                                <div class="col-2 col-md-3"> <input type="text" id="setprice" name="Infont" placeholder="Infont" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLpicup" class=" form-control-label">Select PickUp Points</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectLpicup[]" id="selectLpicup" multiple="multiple" class="form-control">
                                   
                                        <?php if ($pickUp) {
                                            for ($i = 0; $i < count($pickUp); $i++) { ?>
                                                <option value="<?php echo $pickUp[$i]['pickup_point'] ?>"><?php echo $pickUp[$i]['pickup_point'] ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input_Images" class=" form-control-label">Upload Images</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input_Images" name="file_input_Images" class="form-control-file"></div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-dot-circle-o text-success"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-ban text-danger"></i> Reset
                        </button>
                    </div>
                    </form>
                </div>

            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<?php if ($this->session->flashdata('msg') != "") { ?>
    <script>
        alert("<?php echo $this->session->flashdata('msg'); ?>")
        // showAlert("<?php echo $this->session->flashdata('msg'); ?>", 'success');
    </script>
<?php } ?>

<script>
    // $(".js-example-basic-multiple-limit").select2({
    //   maximumSelectionLength: 
    // });
    $('#selectLpicup').select2({
        placeholder: 'Select pickUp points',
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' ']
    });
</script>