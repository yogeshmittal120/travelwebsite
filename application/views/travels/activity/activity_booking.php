<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?php echo base_url('assets/images/dubai_3.jpg') ?>)">
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


<div class="nav_heading">
    <h3 id="activity_name"><?php echo $activity[0]['activity'] ?></h3>
</div>


<div>
    <ul class="nav_link">
        <li class="nav-item">
            <a class="nav-link" href="#details"><i class="fas fa-file-alt"></i> Details</a>
        </li>
        <li class="nav-item" style="display:none">
            <a class="nav-link" href="#"><i class="fas fa-list"></i> Inclusions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#useful_info"><i class="fas fa-info-circle"></i> Useful Info</a>
        </li>
    </ul>
</div>


<div class="container" style="width:95%">
    <div class="row">
        <!-- Left side working -->
        <div class="left col-sm-8">
            <!-- Experience highlight area -->
            <div class="experience">
                <div class="experience_head"><i class="fa fa-star" aria-hidden="true"></i> Experience HighLights</div>
                <div class="experience_body">

                    <p><?php echo $activity[0]['usefull_information']; ?></p>
                    <!-- <ul class="m-0">
                        <li><?php $activity[0]['usefull_information']; ?></li>
                        <li>Explore the city highlights and famous landmarks during city tour</li>
                        <li>Go to the 124th Floor of world's highest building and experience panoramic views</li>
                    </ul> -->
                </div>

            </div>
            <!-- Details Area -->
            <div id="details">
                <hr class="sHd" data-content="Details">
                <div class="shadow">
                    <div class="content row m-0">
                        <div class="c_img col-sm-4">
                            <img class="card-img-top p-0" src="<?php echo base_url() ?>assets/images/Burj-Khalifa.jpg" alt="Card image" style='height:220px'>
                        </div>
                        <div class="c_text col-sm-8">
                            <div class="row m-0">
                                <div class="col-sm-2 day"><?php echo $activity[0]['duration'] ?></div>
                                <div class="col-sm-10 day_heading"><?php echo $activity[0]['activity'] ?></div>
                            </div>
                            <div>
                                <p style="margin:10px 0"><?php echo $activity[0]['inclusion']; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="content row m-0">
                        <div class="c_img col-sm-4">
                            <img class="card-img-top p-0" src="<?php echo base_url() ?>assets/images/person1.jpg" alt="Card image" style='height:220px'>
                        </div>
                        <div class="c_text col-sm-8">
                            <div class="row m-0">
                                <div class="col-sm-2 day">Day 2</div>
                                <div class="col-sm-10 day_heading">Morning Half Day City Tour and Evening Desert Safari</div>
                            </div>
                            <div>
                                <p style="margin:10px 0">Lorem ipsum dolor sit amet, et his quod eripuit. Natum graece te pro. Explicari adipiscing ad mei, omittam cotidieque cum te, adhuc invenire eu sed. Dolor essent graecis id per, dicam efficiantur no eam. At sed veri numquam interesset, eu mei postulant deseruisse, maiorum dissentias consectetuer ex nec. Eu postulant disputando his, melius detracto ea nec. Mucius laoreet efficiendi et mel, an nam soluta admodum.
                                    Sit iudico audire suavitate ne, dolorum intellegat ut has. Omnis consul intellegat per id, quaeque accusam atomorum sea in. At diam prompta vis, mea mundi semper quaeque ea. Novum eligendi no sit.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- info area -->
            <?php $data = json_decode($activity[0]['amt'], true);
            $amt_without = json_decode($activity[0]['with_transfer'], true); ?>
            <div id="useful_info">
                <hr class="sHd" data-content="Useful Info">
                <div class="shadow">
                    <div class="experience_head"><i class="fas fa-info-circle"></i> Useful Info Before Booking</div>
                    <ul class="tips_list">
                        <li>Pick up point : <?php echo $activity[0]['places']; ?></li>
                        <li>Time slot : <?php echo $activity[0]['time_slots']; ?></li>
                        <li> With Transefer Amount Per Person: Adult:<?php echo (isset($data)) ? $data['Adult'] : '0'; ?>, Child:<?php echo (isset($data)) ? $data['Child'] : '0'; ?>, Infrant: <?php echo (isset($data)) ? $data['Infont'] : '0'; ?></li>
                        <li> Without Transfer Amount Per Person: Adult:<?php echo (isset($amt_without)) ? $amt_without['Adult'] : '0'; ?>, Child:<?php echo (isset($amt_without)) ? $amt_without['Child'] : '0'; ?>, Infrant: <?php echo (isset($amt_without)) ? $amt_without['Infont'] : '0'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right_fixed col-sm-4">
            <div id="pkgQtSmryCtr" class="pkg-summ__i pkgQtSmryCtr inPkgQtMode">
                <div class="pkgPrcPPCtr">
                    <div class="fm">Starting from</div>
                    <div class="prcD">AED <?php echo (isset($data)) ? $data['Adult'] : '0'; ?></div>
                    <div class="prcQ">per person</div>
                </div>
            </div>

            <div class="shadow" id="booknow">
                <div class="experience_head"><i class="fas fa-check"></i> Choose your Activity</div>
                <?php
                if (!empty($activity)) {
                    for ($j = 0; $j < count($activity); $j++) { ?>
                        <div class="sub_activity">
                            <div id="<?php echo $activity[$j]['activity'] ?>" pid="<?php echo base64_encode($activity[0]['id']) ?>" data-toggle="collapse" data-target="#activity<?php echo $j ?>">
                                <div class="form-group form-check m-0 row">
                                    <input class="form-check-input col-sm-1 checked" checked name='activities' type="checkbox" value="<?php echo $activity[0]['tpa_id']; ?>">
                                    <label class="form-check-label col-sm-11 " id="checkedLevel">
                                        <?php echo $activity[$j]['activity'] ?>
                                    </label>

                                </div>
                            </div>

                        </div>


                <?php   }
                }
                ?>

            </div>

            <div class="form_chart shadow " id="fill_details" style="display:block">
                <div class="experience_head"><i class="fas fa-check"></i> Fill Your Details</div>
                <div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6 m-0">Transfer Option</label>
                        <select class="col-sm-6 m-0" id="transfer">
                            <option value="1">With Transfer</option>
                            <option value="2">Without Transfer</option>
                        </select>
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Tour Date</label>
                        <input type="text" placeholder="dd/mm/yyyy" name="date" id="ticket_date" required class="col-sm-6 date">
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Adult (1x <?php echo (isset($data)) ? $data['Adult'] : '0'; ?> AED)</label>
                        <input type="number" class=" col-sm-6" placeholder="0" required min=0 name="adult" value="1" id="adult" required>
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Child (2-12Yrs)</label>
                        <input type="number" class=" col-sm-6" placeholder="0" min=0 name="child" id="child">
                    </div>
                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Infant (0-2Yrs)</label>
                        <input type="number" class=" col-sm-6" placeholder="0" min=0 name="infant" id="infant">
                    </div>

                    <div class="form-group m-0 row">
                        <label class="form-check-label col-sm-6">Total Price</label>
                        <input type="text" disabled class="price col-sm-6" name="price" value="" id="price">
                    </div>

                </div>
                <button type="button" id="booking1" book-btn="" class="btn btn-primary book_btn mt-25 r_pos">Book Now</button>

            </div>
        </div>

    </div>

</div>

<script>
    $(document).ready(function() {
        amt = () => {
            var transfer = $('#transfer').val();
            var adult = $('#adult').val();
            var child = $('#child').val();
            var infant = $('#infant').val();
            if (transfer == "1") {
                return (adult * <?php echo (isset($data)) ? $data['Adult'] : 0; ?>) + (child * <?php echo (isset($data['Child'])) ? $data['Child'] : 0; ?>) + (infant * <?php echo (isset($data)) ? $data['Infont'] : 0 ?>);
            } else if (transfer == "2") {
                return (adult * <?php echo (isset($amt_without)) ? $amt_without['Adult'] : 0; ?>) + (child * <?php echo (isset($amt_without['Child'])) ? $amt_without['Child'] : 0; ?>) + (infant * <?php echo (isset($amt_without)) ? $amt_without['Infont'] : 0 ?>);
            }
        };

        $('#transfer').change(() => {
            let amount = amt();
            $('#price').val(amount);
        });

        $('#adult').change(() => {
            let amount = amt();
            $('#price').val(amount);
        });

        $('#adult').trigger('change');

        $('#child').change(() => {
            let amount = amt();

            $('#price').val(amount);
        });

        $('#infant').change(() => {
            let amount = amt();

            $('#price').val(amount);
        });

        $('#booking1').click(function() {
            // if (tour_id != "") {
            let adult = $('#adult').val();
            let child = $('#child').val();
            let infant = $('#infant').val();
            let tour_id = $('.checked').val();
            let tbalance = $('#price').val();
            let date = $('#ticket_date').val();
            let transfer = $('#transfer').val();
            let activity = $('#checkedLevel').text().trim();

            let subActivityId = tour_id;
            if (adult == "") {
                showAlert("Required! Adult", 'danger');
                return false
            } else if (date > Date()) {
                showAlert("Required! Date", 'danger');
                return false
            }
            localStorage.setItem("data", JSON.stringify({
                subActivityId,
                adult,
                child,
                infant,
                date,
                tbalance,
                transfer,
                activity
            }));
            window.location = base_url + "Travel/ticket";
        });

        $('#ticket_date').datepicker();
        $('#ticket_date').datepicker('setDate', 'today');
    });
</script>