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
                            <li class="active">Testimonial</li>
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
                        <strong class="card-title">Testimonial</strong> <span class="offset-1"> <a href="<?php echo base_url()?>Admin/addtestimonial"><i class="fa fa-plus text-success" title="Add Testimonial"></i></a></span>
                    </div>
                    <div class="card-body">
                        <table id="testimonial" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <!-- <th>Description</th> -->
                                    <th>Images</th>
                                    <th>Action</th>
                              
                                </tr>
                            </thead>
                            <tbody>

                            <?php if(!empty($testimonial)){
                                for ($i=0; $i <count($testimonial) ; $i++) { ?>
                               <tr>
                                    <td><?php echo $testimonial[$i]['name']?></td>
                                    <td><?php echo $testimonial[$i]['address']?></td>
                                    <!-- <td><?php echo $testimonial[$i]['description']?></td> -->
                                    <td><?php echo $testimonial[$i]['image']?></td>
                                    <td><a href="<?php echo base_url('Admin/editTestimonial/').base64_encode($testimonial[$i]['id'])?>"><i class="fa fa-edit" title="Edit"></a></i> <a href="<?php echo base_url('Admin/deleteTestimonial/').base64_encode($testimonial[$i]['id'])?>"><i class="fa fa-trash" title="Delete"></i></a> </td>
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
        $('#testimonial').DataTable({
            
        });
    });
</script>