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
                            <li class="active">Activity</li>
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
                        <strong class="card-title">Tour Activity</strong><span class="offset-1"> <a href="<?php echo base_url() ?>Admin/addActivity"><i class="fa fa-plus text-success" title="Add Testimonial"></i></a></span>
                    </div>
                    <div class="card-body">
                        <table id="package" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Activity</th>
                                    <th>Duration</th>
                                    <!-- <th>Images</th> -->
                                    <th>Time Slots</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php if(!empty($activity)){

                                for ($i=0; $i <count($activity) ; $i++) { ?>
                               <tr>
                                    <td><?php echo $activity[$i]['activity']?></td>
                                    <td><?php echo $activity[$i]['duration']?></td>
                                    <!-- <td><?php echo $activity[$i]['image_name']?></td> -->
                                    <td><?php echo $activity[$i]['time_slots']?></td>
                                    <td><a href="<?php echo base_url('Admin/editActivity/').base64_encode($activity[$i]['id'])?>"><i class="fa fa-edit" title="Edit"></a></i> <a href="<?php echo base_url('Admin/deleteActivity/').base64_encode($activity[$i]['id'])?>"><i class="fa fa-trash" title="Delete"></i></a> </td>
                              
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
        $('#package').DataTable();
    });
</script>