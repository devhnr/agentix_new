<?php
$front_base_url = $this->config->item('front_base_url');
$base_url       = $this->config->item('base_url');
$index_url      = $this->config->item('index_url');
$findex_url         = $this->config->item('findex_url');
$base_url_views = $this->config->item('base_url_views');
$http_host = $this->config->item('http_host');

//echo $base_url;
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if($metatitle !=''){ ?>
      <title><?php echo $metatitle; ?></title>
    <?php }else{?>
      <title>Agentix</title>
    <?php } ?>

    <?php if($metakeywords !=''){ ?>
       <meta name="keywords" content="<?php echo $metakeywords; ?>" />
    <?php } ?>
    <?php if($metadescription !=''){ ?>
        <meta name="description" content="<?php echo $metadescription; ?>" />
    <?php } ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



    <link rel="stylesheet" href="<?php echo $base_url_views;?>css/style.css">

    <link rel="stylesheet" href="<?php echo $base_url_views;?>css/font-icons.min.css">

    <link rel="stylesheet" href="<?php echo $base_url_views;?>css/responsive.css">

    <link

  rel="stylesheet"

  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"

/>

<style>
.valierror {
    background-color: #ee2e34;
    border-color: #ee2e34;
    color: #fff;
}

.alert-message {
    background-size: 40px 40px;
    background-image: linear-gradient(
135deg, rgba(255, 255, 255, .05) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%, transparent 75%, transparent);
    /* box-shadow: inset 0 -1px 0 rgb(255 255 255 / 40%); */
    width: 100%;
    border: 0px solid;
    color: #fff;
    padding: 10px;
    /* position: fixed; */
    animation: animate-bg 5s linear infinite;
    display: block;
    margin-bottom: 5px;
}
.successmain {
    background-color: #09c6ab;
    border-color: #09c6ab;
}
.size_active {

    background: #ABABAB;
    color: #000;
    border: 1px solid #09c6ab !important;
}

.color_active {
    border: 1px solid #09c6ab !important;
}

.alert-message_cart {
    background-size: 40px 40px;
    background-image: linear-gradient(
135deg, rgba(255, 255, 255, .05) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%, transparent 75%, transparent);
    width: 100%;
    border: 0px solid;
    color: #000;
    padding: 10px;
    animation: animate-bg 5s linear infinite;
}
.topalert_cart {
    z-index: 9999;
    text-align: center;
    padding: 10px;
    font-size: 18px;
    color: #fff !important;
    position: fixed;
    top: 0px;
}
.successcart {
    background-color: #09c6ab;
    border-color: #09c6ab;
}
</style>

</head>

<body>



    <header>

        <nav class="main-nav navbar navbar-expand-lg ">

            <div class="container-fluid">

                <a class="navbar-brand" href="<?php echo $base_url?>">

                    <img src="<?php echo $base_url_views;?>img/logo.png" alt="">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarText">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="<?php echo $base_url?>products">Products</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo $base_url?>services">Services</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">Agent Resources</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo $base_url?>about-us">About us</a>

                    </li>

                </ul>

                <ul class="navbar-text">

                    <li><a href="<?php echo $base_url?>login" class="nav-link"><i class="fas fa-sign-in-alt"></i> My account</a></li>

                    <?php 

                    //echo "<pre>";print_r($this->session->userdata());echo"</pre>";
                    if($this->session->userdata('userid') == ''){ ?>

                    <li><a href="#" class="nav-link sub-btn btn">Subscribe Now</a></li>

                <?php } else { ?>
                    <li><a href="#" class="nav-link sub-btn btn">Logout</a></li>
                <?php } ?>

                </ul>

                </div>

            </div>

        </nav>

    </header>
     <div id="message_error" class="valierror alert-message topalert" style="display:none;text-align: center;position: fixed;"></div>
    <div id="message_succsess" class="successmain alert-message topalert" style="display:none;text-align: center;position: fixed;">
    </div>