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
    <h3>Traveler Details</h3>
</div>
<style>
    label {
        font-weight: 700;
        font-size: 12px;
    }

    button {

        font-weight: 500 !important;
        margin-left: 20px !important;
    }

    .u_smallF {
        margin-left: 22px !important;
        font-size: 11px;
        font-weight: 600;
    }

    .u_smallF a {
        color: #0097DB !important;
    }
</style>
<div class="container" style="width:95%">
    <div class="row">
        <!-- Left side working -->
        <div class="left col-sm-8 p-20-0">
            <!-- Experience highlight area -->
            <div class="experience mb-25">
                <div class="traveler_body mb-25">
                    <p>
                        Please enter names as per valid id proof and contact information for guests traveling on this trip:
                    </p>

                    <!-- FOR ADULT -->

                    <div id="adult"></div>
                    <!-- FOR child -->
                    <div id="child"></div>
                    <!-- FOR INFANT -->
                    <div id="infants"></div>

                    <div class="f-item row m-0">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10  ">
                            <label class="form-check-label col-sm-12"><input type="checkbox" class="form-check-input" name="chkNmPpt" value="true">&nbsp; I have verified that names being entered are as per passport</label>
                            <label class="form-check-label col-sm-12"><input type="checkbox" class="form-check-input" name="chkPptExp" value="true">&nbsp; I have verified that all passports are valid for 6 months from the date of travel</label>
                            <label class="form-check-label col-sm-12"><input type="checkbox" class="form-check-input" name="chkDtsCrt" value="true">&nbsp; I confirm that the above details are correct and I am ready to bear any additional costs arising out of discrepancy in the above details</label>
                        </div>
                    </div>

                    <div class="pt-25">
                        <div class="form-group row p-8-0 center m-0">
                            <label for="email" class="col-sm-2">Email Address</label>
                            <input type="email" name="email" class="col-sm-3 border_light" required id="email">
                        </div>
                        <div class="form-group row p-8-0 center m-0">
                            <label for="number" class="col-sm-2">Contact Number</label>
                            <input type="text" name="cnumber" class="col-sm-3 border_light" required id="c_no">
                        </div>
                        <div class="form-group row p-8-0 center m-0">
                            <label for="city" class="col-sm-2">City of Residence</label>
                            <input type="city" name="City" class="col-sm-3 border_light" required id="city">
                        </div>
                    </div>
                </div>
                <div class="mb-20 pb-15">
                    <button type="button" class="btn btn-success" style="border-radius:8px">Proceed for Payment</button>
                    <p class="u_smallF padSmT">By proceeding to make payment, you agree to the <a href="#">terms and conditions</a>.</p>
                </div>

            </div>

            <!-- Secure Block -->
            <div class="mrgn3T secureBlock">
                <div class="left three-fourth">
                    <h4 class="guaranteedSecure">Guaranteed security and worry-free travel</h4>
                    <p class="col-sm-8 secureText">
                        Your transaction is backed by major commercial banks and your personal information is protected and kept private. We guarantee conformity to international credit card payment standards and use the latest methods to protect your information.
                        We ensure that all sensitive information is encrypted and safeguarded by the latest technology
                    </p>
                    <div class="mrgnT">
                        <img src="<?php echo base_url() ?>assets/images/visa_master_transparent.png" style="display:inline;vertical-align:middle; height:50px;">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-4 pl-45 pt-25">
            <div class="ticket_right p-10">
                <div id="order_price_summary">
                    <h3 style="font-size:20px;font-weight:bold;padding:1px 0px 5px 0">Your Price Summary</h3>
                    <div id="receipt-price p-0">
                        <div id="order_summary p-0" style="list-style:none;padding:0px;font-weight:600">
                            <div class="row m-0 p-0">
                                <div class="col-sm-7 p-0">Total price (incl. all taxes)</div>
                                <h3 class="col-sm-5 p-0" id="totalRate">AED 6644</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="text-wrap tour_details">

                <div style="position: absolute;right:0;top:15px" class="qttipB" data-hasqtip="1" oldtitle="If you find a cheaper offer elsewhere within 15 days of purchase we shall refund the difference back. Enjoy and book with confidence." title="" aria-describedby="qtip-1">
                    <img src="<?php echo base_url() ?>assets/images/price_match.png" style="height:75px;">
                </div>

                <ul id="details_breakdown" class="unstyled clearfix">
                    <li style="padding:10px 0px 0px 0px;margin-bottom:10px;background:#fefefe;margin-top:20px">
                        <span class="acco_text">
                            <span class="inner">Trip Details</span>
                        </span>
                    </li>

                    <li>
                        <span class="data" style="padding-left:5px">
                            <span class="inner" style="font-size:13px">Dubai Basic for Firs...</span>
                        </span>
                    </li>

                    <!-- <li>
						<span class="data" style="padding-left:5px">
							<span class="inner smalltext">Check-in: 30 Jan 2020</span>
						</span>
					</li> -->
                    <li style="padding-bottom:10px;">
                        <span class="data" style="padding-left:5px">
                            <!-- <span class="inner smalltext">Rooms: 1</span> -->
                            <span class="inner smalltext">1 adults and 2 children</span>
                        </span>
                    </li>


                    <li style="padding:20px 0px 0px 0px;margin:0 0 5px 0;background:#fefefe">

                        <div style="margin: 5px 0 15px 0;">
                            <img src="<?php echo base_url() ?>assets/images/Dubai3.jpg" style="height:130px;width:260px;padding:5px;background:#fff;box-shadow:0 0 2px rgba(0,0,0,.35);">
                        </div>

                        <span class="acco_text">

                            <span class="inner">Selected Activities</span>

                        </span>
                    </li>
                    <li>
                        <ul>

                            <li class="incWBlt">
                                4 nights in Dubai
                            </li>

                            <li class="incWBlt">
                                Stay at Hampton by Hilton Dubai Airport (3 star)
                            </li>

                            <li class="incWBlt">
                                Room Included - QUEEN ROOM WITH PULL-OUT SOFA SMOKING...FREE WI-FI/HOT BREAKFAST INCLUDED/MINI FRIDGE...SOFA BED/COFFEE-TEA FACILITIES/WALKIN SHOWER
                            </li>

                            <li class="incWBlt">
                                Non-refundable
                            </li>

                            <li class="incWBlt">
                                Bed and Breakfast
                            </li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let data = localStorage.getItem('data');
        localStorage.removeItem('data');
        if (data === null) {
            window.location = base_url + "Travel/index";
        } else {
            data = JSON.parse(data);
            console.log(data);
            console.log();
           let adults= data.adults; 
           console.log(adults);
           let childs= data.childs;
           let infants= data.infants;


            if (adults != null) {
                for (let index = 0; index <= adults.length; index++) {    
                    for (var key in adult[index]) {
                        let iteration = adults[index][key];
                        for (let i = 0; i < iteration; i++) {
                            let adulthtml = `  <div class="detail_form row m-0">
                        <div class="col-sm-2 form-group m-0 center">
                            <label for="usr" style="margin: 25px 0px">Adult ${i+ 1}</label>
                            <div></div>
                        </div>
                        <div class="col-sm-2 form-group m-0">
                            <div>Title</div>
                            <div>
                                <select name="" id="gender-title">
                                    <option value="">Title</option>
                                    <option value="">Mr</option>
                                    <option value="">Mrs</option>
                                    <option value="">Miss</option>
                                    <option value="">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>First Name</div>
                            <div><input type="text" class="form-control"></div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>Last Name</div>
                            <div><input type="text" class="form-control"></div>
                        </div>

                    </div>`
                            $('#adult').append(adulthtml);

                        }
                    }
                }
            }
            if (childs != null) {
                for (let index = 0; index <= childs.length; index++) {
                    // const element = array[index];
                    //  console.log(adult[index]);
                    let childhtml = `  <div class="detail_form row m-0">
                        <div class="col-sm-2 form-group m-0 center">
                            <label for="usr" style="margin: 25px 0px">Child ${index +1}</label>
                            <div></div>
                        </div>
                        <div class="col-sm-2 form-group m-0">
                            <div>Title</div>
                            <div>
                                <select name="" id="gender-title">
                                    <option value="">Title</option>
                                    <option value="">Mr</option>
                                    <option value="">Mrs</option>
                                    <option value="">Miss</option>
                                    <option value="">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>First Name</div>
                            <div><input type="text" name=child_fname${index} class="form-control"></div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>Last Name</div>
                            <div><input type="text" name=child_lname${index} class="form-control"></div>
                        </div>

                    </div>`
                    $('#child').append(childhtml);

                }
            }
            if (infants != null) {
                for (let index = 0; index <= infants.length; index++) {
         
                    let infornthtml = `  <div class="detail_form row m-0">
                        <div class="col-sm-2 form-group m-0 center">
                            <label for="usr" style="margin: 25px 0px">Infornt ${index+1}</label>
                            <div></div>
                        </div>
                        <div class="col-sm-2 form-group m-0">
                            <div>Title</div>
                            <div>
                                <select name="" id="gender-title">
                                    <option value="">Title</option>
                                    <option value="">Mr</option>
                                    <option value="">Mrs</option>
                                    <option value="">Miss</option>
                                    <option value="">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>First Name</div>
                            <div><input type="text" class="form-control"></div>
                        </div>
                        <div class="col-sm-4 form-group m-0 p-8">
                            <div>Last Name</div>
                            <div><input type="text" class="form-control"></div>
                        </div>
                    </div>`
                    $('#infants').append(infornthtml);

                }

            }

        }
    });
</script>
<!-- <script src="<?php echo base_url() ?>assets/js/booking.js"></script> -->