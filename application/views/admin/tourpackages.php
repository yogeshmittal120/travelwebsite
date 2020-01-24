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
                            <li><a href="#">Tour</a></li>
                            <li class="active">Packages</li>
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tour</strong> <span class="offset-1"> <a href="<?php echo base_url() ?>Admin/tourpackages"><i class="fa fa-plus text-success" title="Add Testimonial"></i></a></span>
                    </div>
                    <div class="card-body">
                        <table id="package" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tour</th>
                                    <th>Images</th>
                                    <!-- <th>Images</th>
                                    <th>Time Slots</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                
                                // print_r($package);
                                if (!empty($package)) {

                                    for ($i = 0; $i < count($package); $i++) { ?>
                                        <tr>
                                            <td><?php echo $package[$i]['name'] ?></td>
                                            <td><?php echo $package[$i]['image'] ?></td>
                                            <!-- <td><?php echo $package[$i]['image_name'] ?></td>
                                    <td><?php echo $package[$i]['time_slots'] ?></td> -->
                                            <td><a href="<?php echo base_url('Admin/edittourpackages/').base64_encode($package[$i]['id'])?>"><i class="fa fa-edit edittour" title="Edit"></i></a> <i class="fa fa-trash deleteTour" title="Delete" attr="<?php echo base64_encode($package[$i]['id']);?>"></i></td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>adminassets/assets/js/lib/data-table/buttons.colVis.min.js"></script>


<script src="<?php echo base_url() ?>adminassets/assets/js/init/datatables-init.js"></script>


<script>
    $(document).ready(function() {
        $('#package').dataTable();
    });
</script>