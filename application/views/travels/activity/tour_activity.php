<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?php echo base_url('assets/images/Dubai-City-Tour.jpg') ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1 style="margin-bottom:0">Dubai</h1>
                                <h3 style="color:white!important;font-weight:300">Top Holiday Experiences</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<style>
    h3 {
        color: #333 !important;
    }

    .text-danger {
        color: #DC3545 !important;
    }

    .text-warning {
        color: #FFC107 !important;
    }

    .text-primary {
        color: #007BFF !important;
    }

    .text-info {
        color: #17A2B8 !important;
    }

    .table {
        margin-bottom: 0px !important;
    }

    .table tbody tr select {
        height: 24px;
        background: white;
        border: 0.5px solid rgba(0, 0, 0, 0.6);
    }

    .table tbody tr input[type="date"] {
        color: black;
        border: 0.5px solid rgba(0, 0, 0, 0.6);
    }

    .table thead th i {
        float: right;
    }

    .table tbody td i {
        float: right;
    }

    label {
        font-weight: 400 !important;
        font-size: 12px;
    }

    input[type='number'] {
        height: 22px;
        width: 55px;
        background: white;
        padding: 0px 5px;
    }

    input[type='date'] {
        width: 141px;
    }
</style>
<!-- <?php echo "<pre>";
print_r($activity);

// $amt=json_decode($activity[0]['amt'],true);
// print_r($amt);
?> -->

<div class="container" style="background: #EBEEF2;display: block;float: left;width: 100%;padding:10px">
    <?php if (!empty($activity)) {
        for ($i = 0; $i < count($activity); $i++) { ?>
            <div class="card row" id="<?php echo $activity[$i]['activity'] ?>">
                <img class="card-img-top col-sm-4 p-0" src="<?php echo base_url() ?>assets/images/Burj-Khalifa.jpg" alt="Card image" style='height:220px;width:20%'>
                <div class="card-body col-sm-8 card-right" style="width:80%">
                    <div class="row p-0 m-0">
                        <div class="left col-sm-7 p-0">
                            <div>
                                <h3 class="card-title fw-600 mb-8"><?php echo $activity[$i]['activity'] ?></h3>
                                <p class="m-0 stars"><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="card-text stars m-0">
                                    <i class="fas fa-check-square"><span> Instant Confirmation</span></i>
                                    <i class="fas fa-check-square"><span> Free Cancellation 48hrs Prior</span></i>
                                </p>
                            </div>
                            <div class="row <?php echo strlen($activity[$i]['activity']) > '33' ? '' : 'pt-25' ?> m-0 info_links" id="modal_open">
                                <div class="col-sm-2" pid="<?php echo base64_encode($activity[$i]['tpa_id']) ?>">
                                    <i class="fas fa-file-alt text-danger"></i>
                                    <a href="<?php echo base_url('Travel/bookactivity/').base64_encode($activity[$i]['tpa_id'])?>" class="m-0">Description</a>

                                </div>
                                <div class="col-sm-2"><i class="fas fa-list text-warning"></i>
                                    <p class="m-0">Inclusions</p>
                                </div>
                                <div class="col-sm-2"><i class="fas fa-clock text-primary"></i>
                                    <p class="m-0">Timings</p>
                                </div>
                                    <div class="col-sm-2" activityuseful_info pid="<?php echo base_url('Travel/bookactivity/').$activity[$i]['tpa_id']?>"><i class="fas fa-info-circle text-info"></i>
                                    <p class="m-0 text-grey"> <a href="<?php echo base_url('Travel/bookactivity/').base64_encode($activity[$i]['tpa_id'])?>"> Useful Info</a></p>
                                    
                                </div>

                            </div>
                        </div>
                        <div class="middle col-sm-3 p-0">
                            <div class="middle-align">
                                <button type="button" class="btn btn-primary bg-warning"><i class="fas fa-envelope"></i> Add to flyer</button>
                                <button type="button" class="btn btn-primary"><i class="fas fa-heart"></i> Add Wishlist</button>
                            </div>
                        </div>
                        <div class="right col-sm-2 p-0">
                            <div>
                                <h3 class="fw-600 mb-5">AED <?php 
                                $amt=json_decode($activity[$i]['amt'],true);
                                echo $amt['Adult'];?></h3>
                                <p>per person</p>
                                <p class="m-0" style="line-height:12.5px;color:#6C757D">Duration</p>
                                <p><?php echo $activity[$i]['duration']?></p>
                                <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo<?php echo $i ?>">Select</button> -->
                                <a  class="btn btn-success book_btn" href="<?php echo base_url('Travel/bookactivity/').base64_encode($activity[$i]['tpa_id'])?>">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
    } ?>
</div>
