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

<div class="">
    <div class="container" style="margin-top: 500px;">
        <table class="table border">
            <thead class="text-dark">
                <tr style="color:black">
                    <th></th>
                    <th>Date</th>
                    <th>Tour Name</th>
                    <th>tickets</th>
                    <th>Adult</th>
                    <th>Child</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo '<pre>';
                // print_r($cart);
                // $count2 = 0;
                $grandTotal = 0;
                if (isset($cart)) {
                    foreach ($cart  as $items) { ?>
                        <tr style="color:black">

                            <td><?php echo  $items["id"] ?></td>
                            <td><?php echo $items["booking_date"] ?></td>
                            <td><?php echo $items["name"] ?></td>
                            <td><?php echo $items["quantity"] ?></td>
                            <td><?php echo $items["adult"] ?></td>
                            <td><?php echo $items["child"] ?></td>
                            <td><?php echo $items["grand_total"] ?></td>
                            <td> <button type="button" name="remove" class="btn btn-danger remove_inventory" id="' . $items[" rowid"] . '">Remove</button></td>
                </tr>
                <?php
                        $count2 = 0;
                        if (isset($items['selected_activity'])) {
                            // echo '<pre>';
                            // print_r($items['selected_activity']);
                            foreach ($items['selected_activity'] as $activity) {
                            $count2++;
                ?>
                            <tr style="color: black;">
                             <td style="margin-left:50px;" ><?php echo $count2++ ?></td>
                                <td><?php echo  $activity['activity']; ?></td>
                                <!-- <td><?php echo  $activity['totalAdult']; ?></td>
                                <td><?php echo  $activity['totalChild']; ?></td> -->
                                <td></td>

                            </tr>
                 

               <?php
                            }
                        }
                ?>
                <?php

                        $grandTotal += $items["grand_total"];
                    }
                } ?>
        <tr style="color:black">
		 <td colspan="7">Grand Total</td>
		 <td><?php echo $grandTotal ?></td>
		</tr>
	
	   </div>
	 </tbody> </table> </div> <div class="container">
                                    <form id="form-personal-details">
                                        <div class="">
                                            <h2>Personal Information</h2>
                                            <div class="col-sm-4">
                                                <label for="txt-first-name">First Name</label>
                                                <input type="text" class="" id="txt-first-name" placeholder="Enter first name">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="txt-last-name">Last Name</label>
                                                <input type="text" class="" id="txt-last-name" placeholder="Enter last name">
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="txt-email">Email Adderss</label>
                                                <input type="email" class="" id="txt-email" placeholder=" Enter email adderss">
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="txt-mobile">Mobile Number</label>
                                                <input type="text" class="" id="txt-mobile" placeholder="Enter mobile number">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="txt-whatsapp-number">WhatsApp Number</label>
                                                <input type="text" class="" id="txt-whatsapp-number" placeholder="Enter WhatsApp number">
                                            </div>

                                            <div class="col-sm-3">
                                                <label for="txt-pickup-points">Pickup Points</label>
                                                <input type="text" class="" id="txt-pickup-points" placeholder="Enter pickup point">

                                            </div>

                                            <div class="col-sm-2">
                                                <label for="select-paymet-method">Payment Option</label>
                                                <select class="" id="selected-paymet-method">
                                                    <option value="1">Payment Method</option>
                                                    <option value="2">Online Payment By Credit Card</option>
                                                    <option value="3">Bank Tansfer</option>
                                                    <option value="4">Western Union</option>
                                                    <option value="5">On Pick time by Cash</option>
                                                </select>
                                            </div>
                                            <div class="row" id="paymaen-by-credit-card" style="display:none;">
                                                <div class="col-sm-12">
                                                    <h2>Billing Details</h2>
                                                </div>

                                                <div class="col-sm-8">
                                                    <label for="txt-full-address">Full Address</label>
                                                    <input type="text" class="" id="txt-full-address" placeholder="Full address">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="select-country">Select Country</label>
                                                    <select class="" id="select-country">
                                                        <option>Select country</option>
                                                        <?php if (isset($country)) {
                                                            foreach ($country as $items) {


                                                        ?>
                                                                <option><?php echo $items['name'] ?></option>
                                                        <?php }
                                                        } ?>

                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="txt-State">State</label>
                                                    <input type="text" class="" id="txt-State" placeholder="Enter State">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="txt-State">City</label>
                                                    <input type="text" class="" id="txt-City" placeholder="Enter City">
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="txt-State">Postal Code</label>
                                                    <input type="text" class="" id="txt-postal-code" placeholder="Enter postal code">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="txt-message">Message</label>
                                                    <textarea name="" id="" cols="" rows="" placeholder="Enter message (if any)"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <input type="submit" class="btn-submit" value=" Pay Now">
                                            </div>
                                        </div>
    </div>
    </form>
</div>

</div>

<style>
    input[type=text],
    [type=email],
    select {
        width: 100%;
        padding: 10px 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        height: 50px;
    }



    input[type=submit] {
        /* width: 100%; */
        background-color: #4CAF50;
        color: white;
        /* padding: 5px 5px; */
        margin: 8px 50%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    textarea {
        width: 100%;
    }

    .personal-information {
        margin: 0;
        width: auto;
        /* padding-left: 30%; */
        /* padding-right: 20px; */
    }

    #form-personal-details {

        width: auto;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>

<script>
    $(document).ready(() => {
        $(' #selected-paymet-method').change(()=> {
                                    const payment_method = $('#selected-paymet-method').val();
                                    (payment_method == '2') ? $('#paymaen-by-credit-card').show(): $('#paymaen-by-credit-card').hide();
                                    });

                                    $(document).on('click', '.remove_inventory', function() {
                                    var row_id = $(this).attr("id");
                                    if (confirm("Are you sure you want to remove this?")) {
                                    $.ajax({
                                    url: "<?php echo base_url(); ?>Travel/remove",
                                    method: "POST",
                                    data: {
                                    row_id: row_id
                                    },
                                    success: function(data) {
                                    alert("Product removed from Cart");
                                    $('#cart_details').html(data);
                                    setTimeout(function() {
                                    window.location.reload();
                                    window.location = base_url + 'Travel/index'
                                    }, 1000);
                                    }
                                    });
                                    } else {
                                    return false;
                                    }
                                    });

                                    $(document).on('click', '#clear_cart', function() {
                                    if (confirm("Are you sure you want to clear cart?")) {
                                    $.ajax({
                                    url: "<?php echo base_url(); ?>Travel/clear",
                                    success: function(data) {
                                    alert("Your cart has been clear...");
                                    $('#cart_details').html(data);
                                    }
                                    });
                                    } else {
                                    return false;
                                    }
                                    });
                                    })
                                    </script>