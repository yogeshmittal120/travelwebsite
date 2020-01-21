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
<div class="container" style="background: #EBEEF2;display: block;float: left;width: 100%;padding:10px">
    <?php if (!empty($tour)) {
        for ($i = 0; $i < count($tour); $i++) { ?>
            <div class="card row">
                <img class="card-img-top col-sm-4 p-0" src="<?php echo base_url() ?>assets/images/Burj-Khalifa.jpg" alt="Card image" style='height:220px;width:20%'>
                <div class="card-body col-sm-8 card-right" style="width:80%">
                    <div class="row p-0 m-0">
                        <div class="left col-sm-7 p-0">
                            <div>
                                <h3 class="card-title fw-600 mb-8"><?php echo $tour[$i]['name'] ?></h3>
                                <p class="m-0 stars"><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                                <p class="card-text stars m-0">
                                    <i class="fas fa-check-square"><span> Instant Confirmation</span></i>
                                    <i class="fas fa-check-square"><span> Free Cancellation 48hrs Prior</span></i>
                                </p>
                            </div>
                            <div class="row <?php echo strlen($tour[$i]['name']) > '33' ? '' : 'pt-25' ?> m-0 info_links" id="modal_open">
                                <div class="col-sm-2"><i class="fas fa-file-alt text-danger"></i>
                                    <p class="m-0">Description</p>
                                </div>
                                <div class="col-sm-2"><i class="fas fa-list text-warning"></i>
                                    <p class="m-0">Inclusions</p>
                                </div>
                                <div class="col-sm-2"><i class="fas fa-clock text-primary"></i>
                                    <p class="m-0">Timings</p>
                                </div>
                                <div class="col-sm-2"><i class="fas fa-info-circle text-info"></i>
                                    <p class="m-0">Useful Info</p>
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
                                <h3 class="fw-600 mb-5">AED 56</h3>
                                <p>per person</p>
                                <p class="m-0" style="line-height:12.5px;color:#6C757D">Duration</p>
                                <p>6 Days</p>
                                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo<?php echo $i ?>">Select</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="demo<?php echo $i ?>" class="collapse container p-10 collapse-card">
                <div class="p-10-5 bg_dark">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tour Option <i class="fas fa-info-circle text-warning"></i></th>
                                <th>Transfer Option <i class="fas fa-info-circle text-warning"></i></th>
                                <th class="w-50">Tour Date <i class="fas fa-info-circle text-warning"></i></th>
                                <th>Adult</th>
                                <th>Child <p style="margin:0px;font-size:9px">(2-12Yrs)</p>
                                </th>
                                <th>Infant <p style="margin:0px;font-size:9px">(0-2Yrs)</p>
                                </th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $subActivity = $this->CustomModel->selectAllFromWhere('tour_activity', array('tp_id' => $tour[$i]['id']), 'id');
                            for ($j = 0; $j < count($subActivity); $j++) {
                            ?>
                                <tr>
                                    <td id="<?php echo $subActivity[$j]['id'] ?>" pid="<?php echo base64_encode($tour[$i]['id']) ?>">
                                        <div class="form-group form-check m-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name='activities' type="checkbox"><?php echo $subActivity[$j]['activity'] ?>
                                            </label>
                                            <i class="fas fa-info-circle text-warning"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group m-0">
                                            <select class="form-control p-0" id="sel1">
                                                <option>With Transfer</option>
                                                <option>Without Transfer</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group m-0">
                                            <input type="date" name="date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group m-0">
                                            <input type="number" class="form-control" name="adult" id="adult" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group m-0">
                                            <input type="number" class="form-control" name="child" id="adult">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group m-0">
                                            <input type="number" class="form-control" name="infant" id="adult">
                                        </div>
                                    </td>
                                    <td>
                                        AED 0.00
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="button" id="book" book-btn class="btn btn-primary book_btn right mt-25">Book Now</button>
                </div>
            </div>
    <?php }
    } ?>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header row m-0">
                <h4 class="modal-title col-sm-11" id="heading">Modal Heading</h4>
                <button type="button" class="close col-sm-1" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

        </div>
    </div>
</div>


