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
            <!-- <?php print_r($testimonial)?> -->
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#"><?php if(isset($testimonial)){echo 'Edit';} else {echo "Add New Testimonial";}?></a></li>

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
                        <strong><?php if(isset($testimonial)){echo 'Edit';}else {echo "Testimonial Administration";}?></strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php if(isset($testimonial)){ echo base_url('Admin/edittestimonialPost'); } else { echo base_url('Admin/testimonialPost'); }?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="Name">Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" name="name" value="<?php if(isset($testimonial)){echo $testimonial[0]['name'];}?>" placeholder="Name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="5" placeholder="Description..." class="form-control" required><?php if(isset($testimonial)){echo $testimonial[0]['description'];}?></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="datevalid_from" class=" form-control-label">Address</label></div>
                                <div class="col-12 col-md-9"> <input type="Address" value="<?php if(isset($testimonial)){echo $testimonial[0]['address'];}?>" id="address" name="address" placeholder="Text" class="form-control" required></div>
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
                                            <input type="radio" id="Status" name="status" checked value='0' class="form-check-input">Activate
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="Status" name="status" value="1" class="form-check-input">Deactivate
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($testimonial)){echo $testimonial[0]['id'];}?>" >
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