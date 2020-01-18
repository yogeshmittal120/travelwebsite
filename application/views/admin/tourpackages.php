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
                        <strong class="card-title">Tour</strong>
                    </div>
                    <div class="card-body">
                        <table id="package" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Packages Name</th>
                                    <th>Status</th>
                                    <th>Activity</th>
                                    <th>Rate</th>
                                    <th>Valid Up to</th>
                              
                                </tr>
                            </thead>
                            <tbody>

                            <?php if(!empty($package)){

                                for ($i=0; $i <count($package) ; $i++) { ?>
                               <tr>
                                    <td>Packages Name</td>
                                    <td>Status</td>
                                    <td>Activity</td>
                                    <td>Rate</td>
                                    <td>Valid Up to</td>
                              
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