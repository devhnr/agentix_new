<?php include('includes/header.php');?>



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
    padding: 40px;
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
        <div class="row align-items-center">
            <div class="col-lg-4 p-0">
                 <form class="login-form" method="post" action="<?php echo $base_url;?>home/login"  enctype="multipart/form-data" id="loginModal">

                        <input type="hidden" name="action" value="login" />
                        
                        <?php
                        
                        $last_ursl = $_SERVER['HTTP_REFERER'];
                        
                        $explode_urls = explode('/',$last_ursl);
                         $end_urls = end($explode_urls);
                        
                        if($end_urls != 'register' && $end_urls != 'register')
                        {
                            
                         $this->session->set_userdata('redirect_url',$_SERVER['HTTP_REFERER']);  ?>

                        <?php } ?>


                    <div class="row">

                        <div class="col-lg-12 text-center">

                            <h3>Agentix Login</h3>

                            <!--<p>Please enter correct details to login</p>-->

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12">

                            <input type="text" class="" placeholder="Enter Email Id" name="login_email" id="loginEmail">

                        </div>

                        <div class="col-lg-12">

                            <input type="password" class="" placeholder="Enter password" name="login_password" id="LoginPassword">

                        </div>

                        <div class="col-lg-12">

                        <span id="contact_error_login" class="error alert-message valierror " style="display: none;"></span>
                            <span id="contact_success" class="successmain alert-message" style="display:none;"></span>

                        </div>

                        <div class="col-lg-5">
                            <a href="<?php echo $base_url?>forgot-password" class="mt-4">Forgot Password</a>
                        </div>

                        <div class="col-lg-7">

                            <button type="button" class="btn" onclick="javascript:login_validation();">Login</button>

                            <!-- <button type="button" class="btn" >Login</button> -->

                        </div>

                    </div>

                </form>
            </div>
            <div class="col-lg-8 p-0 bg-test">
                
                <div class="swiper logtest">
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
    </div>
</section>



 

<?php include('includes/footer.php');?>

<script>
function login_validation() {
    var loginEmail = jQuery("#loginEmail").val();
    if (loginEmail == '') {
        jQuery('#contact_error_login').html("Please enter Email");
        jQuery('#contact_error_login').show().delay(0).fadeIn('show');
        jQuery('#contact_error_login').show().delay(2000).fadeOut('show');
        return false;
    }

    var em = jQuery('#loginEmail').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(em)) {
        jQuery('#contact_error_login').html("Enter Valid Email Address.");
        jQuery('#contact_error_login').show().delay(0).fadeIn('show');
        jQuery('#contact_error_login').show().delay(2000).fadeOut('show');
        return false;
    }

    var LoginPassword = jQuery("#LoginPassword").val();
    if (LoginPassword == '') {
        jQuery('#contact_error_login').html("Please enter Password");
        jQuery('#contact_error_login').show().delay(0).fadeIn('show');
        jQuery('#contact_error_login').show().delay(2000).fadeOut('show');
        return false;
    }
    /*if(!$("#rememberMe").prop("checked"))
    {
        jQuery('#contact_error').html("Please Select Remember Me");
        jQuery('#contact_error').show().delay(0).fadeIn('show');
        jQuery('#contact_error').show().delay(2000).fadeOut('show');
        return false;
    }*/

    var url = '<?php echo $base_url; ?>home/checlogin';
    $.ajax({
        url: url,
        type: 'post',
        data: 'email=' + loginEmail + '&password=' + LoginPassword,
        dataType : 'json',
        success: function(msg) {

            console.log(msg);
             if(msg == 'not_exist'){

                $('#contact_error_login').html("User does not exist, Please enter correct credentail.");
                $('#contact_error_login').show().delay(0).fadeIn('show');
                $('#contact_error_login').show().delay(2000).fadeOut('show');
                return false;

             }else if(msg == 'password_fail'){

                $('#contact_error_login').html("Password does not match, Please enter correct.");
                $('#contact_error_login').show().delay(0).fadeIn('show');
                $('#contact_error_login').show().delay(2000).fadeOut('show');
                return false;
             }else if(msg == 'success'){
                $('#loginModal').submit();
             }

            // if (msg == "0") {
            //     $('#contact_error_login').html("Please enter Correct Email & Password");
            //     $('#contact_error_login').show().delay(0).fadeIn('show');
            //     $('#contact_error_login').show().delay(2000).fadeOut('show');
            //     return false;
            // } else {
            //     //$('#loginModal').submit();
            // }

        }
    });
    
    
    
    
    
}
</script>

<script>
    var swiper = new Swiper(".logtest", {});
  </script>

