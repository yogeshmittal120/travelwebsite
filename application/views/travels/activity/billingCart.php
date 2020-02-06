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

<div class="personal-information">
    <?php echo $cart ?>
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
                <div class="col-sm-2">
                    <input type="submit" class="offset-8" offset-7 value=" Pay Now">
                </div>
            </div>
        </div>
    </form>
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
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    textarea {
        width: 100%;
    }

    .personal-information {
        margin: 0;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>

<script>
    $(document).ready(() => {
        $('#selected-paymet-method').change(() => {
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