    <?php include('includes/header.php');?>





<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />



<style>

 * , *:before, *:after{ 
     box-sizing:border-box; 
     -moz-box-sizing:border-box; 
     -webkit-box-sizing:border-box; 
     -ms-box-sizing:border-box;
   }

.h-vh {
    min-height: 83vh;
}

form.login-form {
    width: 100%;
    padding: 0;
    border: none;
    border-radius: 0;
}

span.select2-selection.select2-selection--multiple {
    padding: 0;
    border: none;
    
}


.select2-container--default.select2-container--focus .select2-selection--multiple{
    border: none;
}

.testimonial-name h6{
    color: #5c5c5c;
    font-size: 14px;
}


form.login-form input,  form.login-form textarea {
    width: 100% !Important;
    padding: 14px 20px;
    border: 1px solid #d3d1d1;
    margin-bottom: 20px;
    margin-top: 12px;
    transition: 0.3s;
    font-size: 13px !Important;
}


form.login-form input[type="radio"] {
    width: auto;
    padding: 10px;
    margin-right: 10px;
    height: auto;
    margin-top: 20px;
}


form.login-form input:focus, form.login-form textarea:focus {
    outline: 0;
    box-shadow: none;
}

.test-img {
    margin-bottom: -36px;
}




.form-check {



    margin-right: 20px;



    display: flex;



    align-items: center;



}



form.login-form input:focus{



    border-color: var(--altcolor)  ;



    box-shadow: none;



    outline: 0;



    



}







form.login-form button {



    width: 100%;



    text-align: center;



    background: var(--maincolor);



    padding: 10px;



    margin-top: 13px;



    color: #fff;



    text-transform: uppercase;



    transition: 0.3s;



    appearance: none;



    -webkit-appearance: none



}







form.login-form button:hover, form.login-form button:focus{



    background: var(--altcolor);



    color: #fff;



    



}



.lic-group {



    padding: 20px;



    border-radius: 12px;



    border: 1px solid #dfdfdf;



}

img.left-colon {
    max-height: 47px;
    margin-right: auto;
    margin-bottom: -18px;
}
img.rigth-colon {
    max-height: 47px;
    margin-left: auto;
    margin-top: -43px;
}
.form-inner {
    padding: 40px 86px;
}


.testimonial-section {
    min-height: 575px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 59px;
    background: #bfd8ff;
    padding: 70px;
}

.testimonial-name {
    text-align: center;
    padding: 40px 0;
}


.select2-container{
    width: 100% !important;
}

.test-img img {
    max-height: 100px;
}

.select2-container--default .select2-search--inline .select2-search__field {
    margin-bottom: 0;
    padding: 14px 20px;
    border: 1px solid #767676;
    margin: 0;
    /*margin-bottom: 20px;*/
    /*margin-top: 12px;*/
}

.select2-container--default .select2-selection--multiple .select2-selection__choice{
        display: flex;
    align-items: center;
    
}

.select2-container--default .select2-selection--multiple .select2-selection__choice button {
    width: 6%;
    margin: 0;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__display{
    padding: 10px;
}

.bg-test{
    background: #bfd8ff;
}
</style>


<section class="p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <form class="login-form" id="form" action="<?php echo $base_url;?>home/register" method="post">
                    <div class="form-inner">
                        
                    
                   <div class="row">
                      <div class="col-lg-12 text-center">
                         <h3>Boost Your Business with Agentix</h3>
                          <p>Signup Now!</p> 
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-6">
                         <input type="text" class="" placeholder="Agent Name" name="agent_name" id="agent_name">
                      </div>
                      <div class="col-lg-6">
                         <input type="mail" class="" placeholder="Email Id" name="agent_email" id="agent_email">
                      </div>
                      <div class="col-lg-6">
                         <input type="password" class="" placeholder="Password" name="agent_password" id="agent_password">
                      </div>
                      <div class="col-lg-6">
                         <input type="password" class="" placeholder="Confirm Password" name="agent_conf_password" id="agent_conf_password">
                      </div>
                      <div class="col-lg-8">
                         <input type="text" class="" placeholder="Mobile No" name="mobile" id="mobile">
                      </div>
                      <div class="col-lg-4" >
                         <div id="otp_button">
                            <?php 
                               $otp_number = rand (1000,9999);
                               
                               $this->session->set_userdata('register_otp',$otp_number);?>
                            <button type="button" class="btn" onclick="javascript:verifymobile();" id="send_otp">Send Otp</button>
                         </div>
                      </div>
                      <div class="col-lg-4" id="mobile_otp_display" style="display:none;">
                         <input id="otp" name="otp" class="form-control" placeholder="OTP">
                         <input type="hidden" name="otp_match" id="otp_match" value="" />
                         <input type="hidden" name="isverified_mobile" id="isverified_mobile" value="0">
                      </div>
                      <div class="col-lg-6" id="mobile_button_display" style="display:none">
                         <div class="col-lg-6 ver-email">
                            <button class="btn resendlink" type="button"
                               onclick="verifymobile();" id="resend_otp"> Resend OTP <span id="resend_otp_counter"></span></button>
                         </div>
                         <div class="col-lg-6 ver-email">
                            <button class="btn resendlink" id="verify_mobileOtp_new" type="button"
                               onclick="verify_mobileOtp();" disabled>Verify OTP</button>
                            
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <input type="text" class="" placeholder="Agent License No." name="agent_licence_no" id="agent_licence_no">
                      </div>
                      <div class="col-lg-6">
                         <input type="text" class="" placeholder="Agent PAN" name="agent_pan" id="agent_pan" oninput="convertToUppercase(this)" onchange="convertToUppercase(this)" onblur="convertToUppercase(this)">
                      </div>
                      <div class="col-lg-12">
                          <div class="select-area">
                                <select name="name_of_company_insurance[]" id="name_of_company_insurance" class="js-select2" multiple>
                            <option value="">Select Name of the Insurance Co</option>
                            <?php
                               if($insurance_company != ''){
                               
                               
                               
                                   foreach($insurance_company as $insurance_company_data){
                               
                               ?>
                            <option value="<?php echo $insurance_company_data->id;?>"><?php echo $insurance_company_data->name;?></option>
                            <?php } } ?>
                         </select>
                          </div>
                         
                      </div>
                     
                   </div>
                   <div class="col-lg-12 mt-3">
                      <span id="register_error" class="error alert-message valierror" style="display:none;"></span>
                      <span id="register_success" class="successmain alert-message" style="display:none;"></span>
                   </div>
                  
                   <div class="row mt-3">
                      <div class="col-lg-12">
                         <button type="button" onclick="javascript:contact_us();" class="btn">Signup</button>
                      </div>
                   </div>
                   </div>
                </form>
            </div>
            <div class="col-lg-6 p-0 bg-test">
                
                <div class="swiper signtest">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="testimonial-section">
                              <div class="text-center mt-3 mb-3">
                                    <h3>What Our Customer Says</h3>
                                 </div>
                              <div class="test-img">
                                      <img src="<?php echo $base_url_views;?>img/4042422.png" alt="">
                                  </div>
                              <img src="<?php echo $base_url_views;?>img/colon-l.png" class="left-colon">
                              <div class="testimonial-name">
                                  
                                  <p>Losing business to bigger brokers with flashy tools was disheartening. Agentix levelled the playing field for me, providing cutting-edge tools that make me competitive and relevant.</p>
                                  <h2>Anjali</h2>
                                   <h6><em>Director </em></h6>
                              </div>
                              <img src="<?php echo $base_url_views;?>img/colon-9.png" class="rigth-colon">
                          </div>
                      </div>
                      <div class="swiper-slide">
                           <div class="testimonial-section">
                               <div class="text-center mt-3 mb-3">
                                        <h3>What Our Customer Says</h3>
                                </div>
                              <div class="test-img">
                                      <img src="<?php echo $base_url_views;?>img/avatar.png" alt="">
                                  </div>
                              <img src="<?php echo $base_url_views;?>img/colon-l.png" class="left-colon">
                              <div class="testimonial-name">
                                  
                                  <p>Before Agentix, I was constantly losing businesscredits to the primary broker as a sub agent. Now, I have full ownership of my clients, and it s truly transformed the way I do business. Grateful for this platform!.</p>
                                  <h2>Mehra</h2>
                                   <h6><em>Director </em></h6>
                              </div>
                              <img src="<?php echo $base_url_views;?>img/colon-9.png" class="rigth-colon">
                          </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="testimonial-section">
                             <div class="text-center mt-3 mb-3">
                        <h3>What Our Customer Says</h3>
                </div>
                              <div class="test-img">
                                      <img src="<?php echo $base_url_views;?>img/avatar.png" alt="">
                                  </div>
                              <img src="<?php echo $base_url_views;?>img/colon-l.png" class="left-colon">
                              <div class="testimonial-name">
                                  
                                  <p>Being a sub agent meant my renewals would



                                        often go to the main broker. Thanks to Agentix,



                                        I have complete control over my renewals,



                                        ensuring consistency and trust with my clients.



                                        </p>
                                  <h2>Omkar</h2>
                                   <h6><em>Director </em></h6>
                              </div>
                              <img src="<?php echo $base_url_views;?>img/colon-9.png" class="rigth-colon">
                          </div>
                        </div>
                     
                    </div>
                  </div>
                </div>
        </div>
    </div>    
    
</section>






 



<?php include('includes/footer.php');?>
<script>
    var swiper = new Swiper(".signtest", {});
  </script>


<script>

function contact_us() {

    

    //alert('test');



    var agent_name = jQuery("#agent_name").val();

    if (agent_name == '') {

        

        //alert("name");

        jQuery('#register_error').html("Please enter Agent Name");

        jQuery('#register_error').show().delay(0).fadeIn('show');

        jQuery('#register_error').show().delay(2000).fadeOut('show');

        return false;

    }

    

    



    var agent_email = jQuery("#agent_email").val();

    if (agent_email == '') {

        jQuery('#register_error').html("Please enter email");

        jQuery('#register_error').show().delay(0).fadeIn('show');

        jQuery('#register_error').show().delay(2000).fadeOut('show');

        return false;

    }



    var em = jQuery('#agent_email').val();

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(em)) {

        jQuery('#register_error').html("Please enter valid email");

        jQuery('#register_error').show().delay(0).fadeIn('show');

        jQuery('#register_error').show().delay(2000).fadeOut('show');

        return false;

    }



    //alert('here');



    if (agent_email != '') {





        var url = '<?php echo $base_url;?>home/checkemail';



            $.ajax({

                url: url,

                type: 'post',

                data: 'email=' + agent_email,

                success: function(msg) {

                    if (msg == "0") {

                        $("#message_error").html("This email address is already registered with Agent");

                        $('#message_error').show().delay(0).fadeIn('show');

                        $('#message_error').show().delay(10000).fadeOut('show');



                    } else



                    {

                        





                        var agent_password = jQuery("#agent_password").val();

                        if (agent_password == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Plesae Enter Password");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }else{

                            if (agent_password.length < 8 || agent_password.length > 30) {

                                jQuery('#register_error').html("Your password must be between 8 to 30 characters");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[a-z]/i) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one alphabet.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[0-9]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one numeric.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[A-Z]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one capital letter.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least Special letter.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }

                        }





                        var agent_conf_password = jQuery("#agent_conf_password").val();

                        if (agent_conf_password == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Confirm Password");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }





                        if (agent_password != agent_conf_password) {



                            jQuery('#register_error').html("Password does not match");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var mobile = jQuery("#mobile").val();

                        if (mobile == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Mobile No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var mo = jQuery('#mobile').val();

                        var filter = /^\d{10}$/;

                        if (!filter.test(mo)) {

                            jQuery('#register_error').html("Please enter valid Mobile No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var isverified_mobile = jQuery("#isverified_mobile").val();

                        if (isverified_mobile == 0) {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Verify Mobile No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var agent_licence_no = jQuery("#agent_licence_no").val();

                        if (agent_licence_no == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Agent Licence No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var agent_pan = jQuery("#agent_pan").val();

                        if (agent_pan == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Agent Pan");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        if (agent_pan != '') {

                  

                          var panRegex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;

                          

                          if (!panRegex.test(agent_pan)) {

                                

                                jQuery('#register_error').html("Enter Valid pancard number");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;



                            } 



                        }



                        var name_of_company_insurance = jQuery("#name_of_company_insurance").val();

                        if (name_of_company_insurance == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Select Company Insurance");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }







                        



                        $('#form').submit();



                    }

                }

            });





    }

    

    

    

    

    

    // var message = jQuery("#message").val();

    // if (message == '') {

        

    //     //alert ('message alert');

    //     jQuery('#register_error').html("Plesae Enter Message");

    //     jQuery('#register_error').show().delay(0).fadeIn('show');

    //     jQuery('#register_error').show().delay(2000).fadeOut('show');

    //     return false;

    // }







}





function verifymobile() {





        var agent_name = jQuery("#agent_name").val();

        if (agent_name == '') {

            

            //alert("name");

            jQuery('#register_error').html("Please enter Agent Name");

            jQuery('#register_error').show().delay(0).fadeIn('show');

            jQuery('#register_error').show().delay(2000).fadeOut('show');

            return false;

        }

        

        



        var agent_email = jQuery("#agent_email").val();

        if (agent_email == '') {

            jQuery('#register_error').html("Please enter email");

            jQuery('#register_error').show().delay(0).fadeIn('show');

            jQuery('#register_error').show().delay(2000).fadeOut('show');

            return false;

        }



        var em = jQuery('#agent_email').val();

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(em)) {

            jQuery('#register_error').html("Please enter valid email");

            jQuery('#register_error').show().delay(0).fadeIn('show');

            jQuery('#register_error').show().delay(2000).fadeOut('show');

            return false;

        }





        if (agent_email != '') {

            var url = '<?php echo $base_url;?>home/checkemail';



            $.ajax({

                url: url,

                type: 'post',

                data: 'email=' + agent_email,

                success: function(msg) {

                    if (msg == "0") {

                        $("#message_error").html("This email address is already registered with FFT");

                        $('#message_error').show().delay(0).fadeIn('show');

                        $('#message_error').show().delay(10000).fadeOut('show');

                        //return false;

                    } else {





                        var agent_password = jQuery("#agent_password").val();

                        if (agent_password == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Plesae Enter Password");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }else{

                            if (agent_password.length < 8 || agent_password.length > 30) {

                                jQuery('#register_error').html("Your password must be between 8 to 30 characters");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[a-z]/i) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one alphabet.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[0-9]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one numeric.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[A-Z]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least one capital letter.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }



                            if (agent_password.search(/[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/) < 0) {

                                jQuery('#register_error').html("Your password must contain at least Special letter.");

                                jQuery('#register_error').show().delay(0).fadeIn('show');

                                jQuery('#register_error').show().delay(2000).fadeOut('show');

                                return false;

                            }

                        }







                        var agent_conf_password = jQuery("#agent_conf_password").val();

                        if (agent_conf_password == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Confirm Password");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }





                        if (agent_password != agent_conf_password) {



                            jQuery('#register_error').html("Password does not match");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var mobile = jQuery("#mobile").val();

                        if (mobile == '') {

                            

                            //alert ('message alert');

                            jQuery('#register_error').html("Please Enter Mobile No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        var mo = jQuery('#mobile').val();

                        var filter = /^\d{10}$/;

                        if (!filter.test(mo)) {

                            jQuery('#register_error').html("Please enter valid Mobile No");

                            jQuery('#register_error').show().delay(0).fadeIn('show');

                            jQuery('#register_error').show().delay(2000).fadeOut('show');

                            return false;

                        }



                        //alert(mobile);



                        var url = '<?php echo $base_url;?>home/send_register_otp';

                        $.ajax({

                            url: url,

                            type: 'post',

                            data: 'mobile=' + mobile,

                            success: function(msg) {

                                if (msg != "0") {



                                    //alert(msg);



                                    $("#mobile_otp_display").css("display", "block");

                                    $("#mobile_button_display").css("display", "flex");

                                    $("#message_succsess").html(

                                        "OTP Sent to your Mobile No  Successfully.");

                                    $('#message_succsess').show().delay(0).fadeIn('show');

                                    $('#message_succsess').show().delay(10000).fadeOut('show');

                                    $("#otp_button").css("display", "none");

                                    $("#resend_otp").prop('disabled', true);



                                    set_timer_for_resend_button();

                                }



                            }

                        });

                    }

                }

            });

        }







    }



    function set_timer_for_resend_button(){



        var timeleft = 30;

        var downloadTimer = setInterval(function(){

          if(timeleft <= 0){

            clearInterval(downloadTimer);

            $("#resend_otp").prop('disabled', false);

            document.getElementById("resend_otp_counter").innerHTML = " ";

          }

           else {

            document.getElementById("resend_otp_counter").innerHTML = "(" + timeleft + " s)";

          }

          timeleft -= 1;

        }, 1000);

        

       

    }



 $(document).ready(function(){

    $("#otp").keyup(function(){

        //alert('sd');

        var val = $("#otp").val();



        if(val == ""){

            $('#verify_mobileOtp_new').prop('disabled', true);

            



        }

        else{

            $('#verify_mobileOtp_new').prop('disabled', false);

            

        }

    });

 });





 function verify_mobileOtp() {



    //alert('here');



        var otp = jQuery("#otp").val();

        if (otp == '') {



            jQuery('#register_error').html("Please enter otp");

            jQuery('#register_error').show().delay(0).fadeIn('show');

            jQuery('#register_error').show().delay(2000).fadeOut('show');

            return false;

        }



        if (otp != '<?php echo $this->session->userdata('register_otp'); ?>') {

            // $("#contact_error").html("Please Enter Valid otp.");

            // $('#contact_error').show().delay(0).fadeIn('show');

            // $('#contact_error').show().delay(2000).fadeOut('show');

            // return false;



            jQuery('#register_error').html("Please enter valid otp");

            jQuery('#register_error').show().delay(0).fadeIn('show');

            jQuery('#register_error').show().delay(10000).fadeOut('show');

            

            return false;

        }



        if (otp == '<?php echo $this->session->userdata('register_otp'); ?>') {



            $("#message_succsess").html("Mobile Verified Successfully.");

            $('#message_succsess').show().delay(0).fadeIn('show');

            $('#message_succsess').show().delay(10000).fadeOut('show');

            $("#mobile_otp_display").hide();

            $("#mobile_button_display").hide();

            

            $("#isverified_mobile").val('1');

        }



    }





    function convertToUppercase(element) {

      element.value = element.value.toUpperCase();

    }



</script>



<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>

  $(document).ready(function() {

    $('#name_of_company_insurance').select2();

  });



  $(document).ready(function() {

    $('#name_of_company_insurance').select2({

      placeholder: 'Select Name of the Insurance Co',

      allowClear: true, // Option to clear selection

      // More options...

    });

  });



</script>