<?php include('includes/header.php');?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                     <a href="javascript:void(0)" class="btn com-add-sub" id="backButton" style="text-align: center;
    background: var(--maincolor);color: #fff;padding: 10px;"><i class="feather icon-feather-chevron-left"></i> Back</a>
                </div>
            <div class="col-lg-12">
                <div class="main-title mb-2">
                     <?php if($recommended_poster != ''){?>
                        <h1>Recommended Poster</h1>
                    <?php } else { ?>
                        <h1>No Recommended Poster Available</h1>

                    <?php } ?>
                    
                </div>
            </div>
          
        </div>

        <?php if($recommended_poster != ''){?>
        <div class="row">
             <?php foreach($recommended_poster as $recommended_poster_data){ ?>
            <div class="col-lg-3">
                 <div class="ce-down-list">
                      <div class="ce-down-img">
                         <?php if($recommended_poster_data->image != ''){?>
                            <img src="<?php echo $base_url?>upload/poster/<?php echo $recommended_poster_data->image;?>" alt="" class="w-100">
                        <?php } else { ?>
                            <img src="<?php echo $base_url?>upload/poster/no-image.png" alt="" class="w-100">

                            <<?php } ?>
                      </div>
                        <?php if($recommended_poster_data->image != ''){?>
                          <div class="ce-down-cta">
                              <a href="<?php echo $base_url?>agent_admin/poster_doc_download/<?php echo $recommended_poster_data->image;?>" class="btn"><i class="feather icon-feather-download"></i>Download</a>
                          </div>
                        <?php } ?>
                  </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-3">
                 <div class="ce-down-list">
                      <div class="ce-down-img">
                          <img src="<?php echo $base_url_views ?>agent-admin/img/img2.png" alt="" class="w-100">
                      </div>
                      <div class="ce-down-cta">
                          <a href="#" class="btn"><i class="feather icon-feather-download"></i>Download</a>
                      </div>
                  </div>
            </div>
            <div class="col-lg-3">
                 <div class="ce-down-list">
                      <div class="ce-down-img">
                          <img src="<?php echo $base_url_views ?>agent-admin/img/img2.png" alt="" class="w-100">
                      </div>
                      <div class="ce-down-cta">
                          <a href="#" class="btn"><i class="feather icon-feather-download"></i>Download</a>
                      </div>
                  </div>
            </div>
            <div class="col-lg-3">
                 <div class="ce-down-list">
                      <div class="ce-down-img">
                          <img src="<?php echo $base_url_views ?>agent-admin/img/img2.png" alt="" class="w-100">
                      </div>
                      <div class="ce-down-cta">
                          <a href="#" class="btn"><i class="feather icon-feather-download"></i>Download</a>
                      </div>
                  </div>
            </div> -->
        </div>
    <?php } ?>
    </div>
</section>
<?php include('includes/footer.php');?>