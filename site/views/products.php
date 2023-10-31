<?php include('includes/header.php');?>

<style>
    .tab {
    margin-top: 0;
}

.tab button img {

    max-height: 55px;
    width: auto;
    padding: 0;
    padding-bottom: 14px;
}

.main-products-sec {
    padding: 35px;
 
    border-radius: 12px;
    min-height: 315px;
    margin-bottom: 20px;
}

.m-pro-head-flex {
    display: flex;
    align-items: center;
    justify-content: center;
   
}

.pro-numb {
    width: 24%;
    background: #fff;
    margin-right: 13px;
    border-radius: 12px;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pro-head {
    width: 76%;
}

.pro-numb h6 {
    margin: 0;
    font-size: 35px;
    font-weight: 600;
    color: var(--altcolor);
}

.pro-desc {
    margin-top: 19px;
}

.bg-light-blue-pro{
    background: #D6E6FF;
}

.bg-light-green-pro{
    background: #C8FFDF;
}

.pro-head h5 {
    font-size: 18px;
    font-weight: 600;
}
</style>
 <section class="pt-0">
     
   
        <div class="container-fluid">

            <div class="row">

                <!--<div class="col-lg-12">-->

                <!--    <div class="main-title">-->

                <!--        <h3>Our Products</h3>-->

                <!--        <div class="line-gree-sm"></div>-->

                <!--    </div>-->

                <!--</div>-->

            </div>

            <div class="row mt-5">

                <div class="col-lg-12">

                   <div class="tab">

                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">

                            <img src="<?php echo $base_url_views;?>img/serv1.png" alt="">

                        </button>

                        <button class="tablinks" onclick="openCity(event, 'Paris')">

                            <img src="<?php echo $base_url_views;?>img/serv2.png" alt="">

                        </button>

                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">

                            <img src="<?php echo $base_url_views;?>img/serv3.png" alt="">

                        </button>

                      </div>

                </div>

                <div class="col-lg-12">

                      <div id="London" class="tabcontent">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>01</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Comprehensive Product Compare</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>View and contrast various insurance products side by side. Utilize user-friendly filters to narrow down the best options based on specific client needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>02</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Transparent Pricing Breakdown</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Obtain clear and detailed pricing comparisons. Empower clients with a clear understanding of their investment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>03</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>API-Enabled Policy Issuance</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Streamline the policy issuance process with integrated API functionalities. Ensure speedy, efficient, and error-free transactions every time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>04</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>In-Depth Risk Inspections</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Conduct thorough inspections to identify potential coverage gaps. Receive GAP analysis reports, assisting agents in suggesting appropriate coverage adjustments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>05</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Intuitive Underwriting & Placement</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Facilitate underwriting processes with data-driven insights and suggestions. Simplify product placements, ensuring each client gets the best-fit policy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>06</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>User-Friendly Interface</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Navigate the platform with ease thanks to its intuitive design. Access essential tools and features with just a few clicks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>07</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Operational Support</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Dive into a streamlined operational ecosystem that eases policy issuance, endorsement processing, and more. Minimize manual tasks and potential errors with automated workflows, resulting in reduced operational costs. EnjoyS consistent backend support, ensuring smooth and efficient day-to-day transactions, allowing you to focus on client relationships and grow.</p>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

                      </div>



                      <div id="Paris" class="tabcontent">
                          <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>01</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>CRM Tool for Individuals and Corporates</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Streamlined client management with dedicated interfaces for both individual and corporate customers.Effortless tracking, segmentation, and engagement for improved relationship management.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>02</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Insurer Agnostic Portfolio View</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Experience a unified dashboard, presenting a comprehensive view of insurance portfolios across all classes, irrespective of the insurer.Optimal for both individuals and corporates, ensuring clarity and convenience.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>03</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Employee Benefits Servicing</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>End-to-end management encompassing employee enrollments, claims handling, hospital affiliations and more. Dedicated HR view for seamless policy and endorsement oversight.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>04</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Risk Management & Tracking</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Centralized monitoring across risk locations, branches, and corporate subsidiaries.Efficient accumulation tracking ensuring safety and compliance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>05</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Continuous Risk Monitoring</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Stay updated with real-time risk evaluations and alerts.Make informed decisions backed by consistent surveillance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>06</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Exclusive Partner Services</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Unlock discounted services such as health check-ups, ambulance access, property valuations, and more.Enhance value for clients with free offerings like telemedicine, wellness sessions, and doctor- on-call facilities.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>07</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Claims Analytics</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Deep dive into claim trends, patterns, and insights.Drive strategic decisions backed by comprehensive data analytics.Hazard Mapping & Disaster Management:Prepare and respond with tailored mapping tools.Equip your clients with best-in-class disaster management assistance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>08</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Claims Assistance & Consulting</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Ensure clients' claims are efficiently managed and supported.Benefit from expert consulting, ensuring optimal outcomes.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>09</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Top-Rated Provider Access</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Connect with an ecosystem of premium service providers and partners.Deliver unparalleled quality and variety to your clientele.</p>
                                    </div>
                                </div>
                            </div>
                            
                          </div>
                         
                      </div>

                      

                      <div id="Tokyo" class="tabcontent">
                           <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>01</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Sharable Content for Client Engagement</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Access a curated library of content designed to resonate with your audience. Engage clients effectively with information that matters to them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>02</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Social Media Creatives</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Propel your online presence with ready-to-use, high-quality graphics. Tailor your message across various platforms, ensuring brand consistency.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>03</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Product Reviews and Comparisons</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Educate and inform with transparent, easy-to-understand product breakdowns. Guide clients toward informed decisions with comprehensive insights.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>04</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Lead Generation</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Tap into a suite of tools designed to attract, capture, and nurture potential clients. Optimize your growth with targeted strategies that work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>05</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Email Marketing Templates</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Communicate effectively with professionally designed email campaigns. Customize to your needs, ensuring personal touches in every outreach.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-green-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>06</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Educational Material</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Establish your authority with informative resources. Help clients understand the intricacies of insurance, building trust.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div cLass="main-products-sec bg-light-blue-pro">
                                    <div class="m-pro-head-flex">
                                        <div class="pro-numb">
                                            <h6>07</h6>
                                        </div>
                                        <div class="pro-head">
                                            <h5>Agent Website & Social Media Setups</h5>
                                        </div>
                                    </div>
                                    <div class="pro-desc">
                                        <p>Launch or revamp your digital identity with user-friendly site builders. Integrate seamlessly with social platforms, ensuring holistic online visibility.</p>
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

        function openCity(evt, cityName) {

          var i, tabcontent, tablinks;

          tabcontent = document.getElementsByClassName("tabcontent");

          for (i = 0; i < tabcontent.length; i++) {

            tabcontent[i].style.display = "none";

          }

          tablinks = document.getElementsByClassName("tablinks");

          for (i = 0; i < tablinks.length; i++) {

            tablinks[i].className = tablinks[i].className.replace(" prodactive", "");

          }

          document.getElementById(cityName).style.display = "block";

          evt.currentTarget.className += " prodactive";

        }

        

        // Get the element with id="defaultOpen" and click on it

        document.getElementById("defaultOpen").click();

        </script>
