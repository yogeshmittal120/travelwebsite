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



<div class="nav_heading bg-primary">
    <h3 id="tour-name"><?php echo $tour[0]['name'];
                        // echo '<pre>';
                        // print_r($tour);
                        ?></h3>
    <input type="hidden" id="tour-id" value="<?php echo $tour[0]['id']; ?>">
</div>
<div class="nav_heading bg-light stuck">
    <div class="row py-2">
        <div class="col-sm-3"> <i class="fa fa-calendar text-danger " aria-hidden="true"></i> Service: Daily</div>
        <div class="col-sm-3"> <i class="fa fa-hourglass-half text-secondary" style="color:aqua"></i> Duration:3 Hours</div>
        <div class="col-sm-3"> <i class="fa fa-clock-o text-primary" style="color:green"></i> Pick Up: 7:00 Pm</div>
        <div class="col-sm-3"> <i class="fa fa-car text-danger "></i> Pick up & Drop Back</div>

    </div>
    <div class="row py-10">
        <div class="col-sm-3"> <i class="fa fa-wifi text-danger" style="color:aqua"></i> Free Wifi Available</div>
        <div class="col-sm-3"><i class="fa fa-language " style="color:green"></i> Language: English / Arabic</div>
        <div class="col-sm-3"> <i class="fa fa-money" style="color:green"></i> Adult: AED 150</div>
        <div class="col-sm-3"><i class="fa fa-money " style="color:red"></i> Child: AED 135</div>
    </div>
    <div class="row"> <a href="" class="btn btn-primary" style="margin-left:90%;" data-toggle="modal" data-target="#myModal">BookNow</a></div>
</div>

<div class="conatiner resize">
    <h3>Description</h3>
    <?php echo $tour[0]['Description'] ?>
</div>


<div class="container">
    <!-- Modal -->
    <div class="modal right fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModal"><?php echo $tour[0]['name'] ?></h4>
                    <input type="hidden" id="tour_id" name="" value="<?php echo $tour[0]['id'] ?>">
                </div>

                <div class="modal-body">

                    <!-- <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </p> -->
                    <form method="Post" calss="add-to-cart-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="date">Select tour Date</label>
                                        <div class="form-field">
                                            <!-- <i class="icon icon-calendar2"></i> -->
                                            <input type="text" id="txtDate" class="form-control date" placeholder="Booking date" style="height:50px !important; ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="guests">Select tour Transfer</label>
                                        <div class="form-field ">
                                            <!-- <i class="icon icon-arrow-down3"></i> -->
                                            <select name="transfer" id="transfer" class="form-control p-30">
                                                <option value="1">With Transfer</option>
                                                <option value="2">Without Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="date">Number of Adults</label>
                                        <div class="form-field">
                                            <input type="number" id="adult_number" class="form-control number-of-tickets for-adult" min="1" value="1" placeholder="Adult" style="height:50px !important; margin-top:7px !important;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="date">Number of Child</label>
                                        <div class="form-field">
                                            <input type="number" id="child_number" class="form-control number-of-tickets for-child" value="0" min="0" placeholder="Child" style="height:50px !important; margin-top:7px !important;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 div_activities">
                                <label for="">Customize Additional Inclusions</label>
                            </div>
                            <div class="col-md-12 table-responsive padding-0 div_activities">
                                <table class="table txt-dark center-text-table">
                                    <thead class="">
                                        <tr class="">
                                            <th>Tour Option</th>
                                            <th>Per Adult Price</th>
                                            <th>Per Child Price</th>
                                            <th>No of Adults</th>
                                            <th>No of Child</th>
                                            <th>Addon Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-12"></div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="">Grand Total AED <span id="totalPrice"></span></label>
                        </div>
                        <div class="offset-6">
                            <button type="button" id="addtocart" class="btn btn-default bg-success">Add To Cart</button>
                        </div>
                    </div>

                </div>
                </form>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div>

<style>
    /*Right*/
    .modal.right.fade .modal-dialog {
        right: -320px;
        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
        -o-transition: opacity 0.3s linear, right 0.3s ease-out;
        transition: opacity 0.3s linear, right 0.3s ease-out;
        margin-right: auto;
        width: 90%;
    }

    .p-60 {
        top: 60px;
    }

    .txt-dark {
        color: gray !important;
    }

    .p-30 {
        height: 48px !important;
    }

    .modal.right.fade.in .modal-dialog {
        right: 0;
    }
</style>



<script>
    $(document).ready(() => {
        <?php
        echo 'let p_with_transfer =' . $tour[0]['p_with_transfer'] . ";";
        echo 'let p_without_transfer =' . $tour[0]['p_without_transfer'] . ";";
        //$p_with_trnf = json_decode($tour[0]['p_without_transfer'], true);
        ?>
        let activities = [];
        let activitiesrow = $('#tbody');
        let transfer = $('#transfer');
        let adult = $('#adult_number');
        let child = $('#child_number');
        activitiesrow.empty();

        function loadActivites(list) {
            for (let activity of list) {

                // console.log(activity);
                // console.log(activity.amt);
                let amount = JSON.parse(activity.amt)
                let rowTemplate = $(`<tr id="row${activity.id}">
                                                    <td>
                                                        <div class="checkbox padding-right-10">
                                                            <label>
                                                                <input  type="checkbox"  class="activity-checkbox">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                ${activity.activity}
                                                            </label>
                                                            <input type="hidden" id="addontitle_${activity.id}" name="addon_title[]" value="${activity.activity}">
                                                        </div>
                                                    </td>
                                                    <td>AED <span class="price" style="text-align: center !important"> ${amount.Adult}</span></td>
                                                    <td>AED<span class="price"> ${amount.Child}</span></td>

                                                    <td>
                                                        <input   type="number" class="activity-tickets adlquantity" name="adlquantity" min="1" value="0" disabled>
                                                    </td>
                                                    <td><input type="number" class="activity-tickets cdlquantity" min="0" value="0" disabled></td>
                                                   
                                                    <td id=""> AED <span class="totalcostspan "></span></td>
                                                </tr>`);

                let totalcostspan = rowTemplate.find('.totalcostspan');
                let activityCheckbox = rowTemplate.find('.activity-checkbox');
                activityCheckbox.data("id", activity.id);
                activityCheckbox.on('change', activityCheckBox_Change);
                // Activity
                let adlquantityInput = rowTemplate.find('.adlquantity');
                adlquantityInput.data("id", activity.id);
                adlquantityInput.data("totalSpan", totalcostspan);
                adlquantityInput.data("itemKey", 'totalAdult');
                adlquantityInput.on('keyup change', quantityInput_keyup);
                activitiesrow.append(rowTemplate);
                // pick data from child table
                let cdlquantityInput = rowTemplate.find('.cdlquantity');
                cdlquantityInput.data("id", activity.id);
                cdlquantityInput.data("totalSpan", totalcostspan);
                cdlquantityInput.data("itemKey", 'totalChild');
                cdlquantityInput.on('keyup change', quantityInput_keyup);
                activitiesrow.append(rowTemplate);
                // 

                activityCheckbox.data("adlquantityInput", adlquantityInput);
                activityCheckbox.data("cdlquantityInput", cdlquantityInput);

            }
        }

        function activityCheckBox_Change() {
            let activityCheckbox = $(this);
            let checked = $(this).prop('checked');

            let activityId = activityCheckbox.data('id');

            let adlquantityInput = activityCheckbox.data('adlquantityInput');
            let cdlquantityInput = activityCheckbox.data('cdlquantityInput');

            let activity = activities.find((ob) => ob.id == activityId);
            // console.log(activity);
            activity.selected = checked;

            adlquantityInput.prop('disabled', !checked);
            cdlquantityInput.prop('disabled', !checked);


            calculateGrandTotal();

        }

        function quantityInput_keyup() {
            let adlquantityInput = $(this);
            let activityId = adlquantityInput.data('id');
            let totalSpan = adlquantityInput.data('totalSpan');
            let itemKey = adlquantityInput.data('itemKey');

            let activity = activities.find((ob) => ob.id == activityId);

            let checkbox_selected = activity.selected === undefined ? false : activity.selected;
            if (checkbox_selected) {
                activity[itemKey] = adlquantityInput.val();
                // let amount = JSON.parse(item.amt)
                let totalPrice = calculateActivityPrice(activity);
                totalSpan.text(totalPrice);
                calculateGrandTotal();
            }

        }

        function calculateActivityPrice(activity) {
            let totalAdult = (activity.totalAdult === undefined) ? 0 : activity.totalAdult;
            let totalChild = (activity.totalChild === undefined) ? 0 : activity.totalChild;
            let rates = JSON.parse(activity.amt)
            return ((totalAdult * rates.Adult) + (totalChild * rates.Child));
        }

        function calculateGrandTotal() {
            let total = 0;
            for (let activity of activities) {
                let checkbox_selected = activity.selected === undefined ? false : activity.selected;
                if (checkbox_selected) {
                    total += calculateActivityPrice(activity);
                }
            }
            let paymentType = transfer.val();
            let tourAdultP = 0;
            let tourChildP = 0;
            if (paymentType == '1') {
                tourAdultP = p_with_transfer.Adult;
                tourChildP = p_with_transfer.Child;
            } else if (paymentType == '2') {
                tourAdultP = p_without_transfer.Adult;
                tourChildP = p_without_transfer.Child;
            }

            let totalTourAdult = adult.val();
            let totalTourChild = child.val();
            let totalPrice = (totalTourAdult * tourAdultP) + (totalTourChild * tourChildP);
            let GrandTotal = totalPrice + total;
            $('#totalPrice').text(GrandTotal);
            // console.log(total);
        }


        adult.on('change keyup', () => {

            //let Input = $(this);
            calculateGrandTotal();
            // $('#totalPrice').text(amount);
        });
        child.on('change keyup', () => {

            //let Input = $(this);
            calculateGrandTotal();
            // $('#totalPrice').text(amount);
        });
        transfer.change(function() {

            calculateGrandTotal();
        });

        const tour_id = $('#tour-id').val();
        const formData = {
            tourid: tour_id
        }
        // console.log(tour_id);
        $.ajax({
            type: "POST",
            url: base_url + 'Travel/getActivityNecessaryDetails',
            data: formData,
            success: function(data, success) {
                if (data != 'false') {
                    activities = JSON.parse(data);

                    loadActivites(activities);
                } else {
                    $('.div_activities').hide();
                }
                transfer.change();
            },
        });

        $('#addtocart').on('click', () => {
            function selectedItem(item) {
                if (item.selected == true) {
                    return true
                }
            }

            let act = activities.filter(selectedItem)

            console.log(act);

            let transfer = $('#transfer').val().trim();
            let adult = $('#adult_number').val().trim();
            let child = $('#child_number').val().trim();
            let tour_id = $('#tour_id').val().trim();
            let date = $('#txtDate').val().trim();
            let total_ticket_amount = $('#totalPrice').text().trim();
            let tour_name = $('#tour-name').text().trim();
            let tickets = parseInt(adult) + parseInt(child);
            // let tour_id=[], tour_name=[];

            let formData = {
                transfer_type: transfer,
                tour_id: tour_id,
                total_adult: adult,
                total_child: child,
                booking_date: date,
                ticket_booking_amount: total_ticket_amount,
                total_ticket: tickets,
                tour_name: tour_name,
                selectedActivities: act
            }
            // console.log(formData)
            // $.ajax({
            //     type: "POST",
            //     url: base_url + 'Travel/addToCart',
            //     data: formData,
            //     success: function(data, success) {
            //         // // alert(data);
            //         // console.log(data);
            //         // window.location = base_url + 'Travel/billingCart'

            //     },
            // });

        });

        $('#txtDate').datepicker();
        $('#txtDate').datepicker('setDate', 'today');
    });
</script>