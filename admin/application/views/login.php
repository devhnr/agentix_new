<?php
$front_base_url = $this->config->item('front_base_url');
$base_url 		= $this->config->item('base_url');
$http_host 		= $this->config->item('http_host');
$base_url_views = $this->config->item('base_url_views');
$base_upload = $this->config->item('upload');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Agentix : Admin Panel</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Font CSS (Via CDN) -->
<!--	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>-->
<!--	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet">-->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/bootstrap.min.css">
	<link rel="shortcut icon" href="<?php echo $base_url_views;?>images/fav.png">
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/utility.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url_views;?>css/custom.css">
	<!-- Favicon -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
  </head>
<body class="minimal login-page imges_bodusss">
<script> var boxtest = localStorage.getItem('boxed'); if (boxtest === 'true') {document.body.className+=' boxed-layout';} </script> 
<!-- Start: Main -->
<div id="main">
  <div id="content">
    <div class="row">
      <div class="panel-bg">
        <div class="panel">
		<form class="form" id="loginform" method="post" action="<?php echo $base_url;?>welcome/login">
			<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		    <INPUT TYPE="hidden" NAME="action" VALUE="login">
          <div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock text-purple2"></span> Login </span> </div>
          <div class="panel-body">
            <div class="login-avatar"><img src="<?php echo $base_url_views;?>images/logo.png"  alt="Agentix" style="width: 140px;">
	  <?php if($L_strErrorMessage) 
  { ?>
		  <div class="error_div">			
				<b>Error!</b> <?php echo $L_strErrorMessage; ?>
			</div>
  <?php }   ?>
<?php if($this->session->flashdata('L_strErrorMessage')) 
  { ?>
		  <div class="success_div">			
				<b>Success!</b> <?php echo $this->session->flashdata('L_strErrorMessage'); ?>
			</div>
  <?php } 
  ?>
<?php if($this->session->flashdata('flashError')) { ?>
<div class="error_div">
		<b>Error!</b> <?php echo $this->session->flashdata('flashError'); ?>
	</div>
<?php }  ?>			</div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="User Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span> </span>
                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="panel-footer"> <!--<span class="text-muted fs12 lh30"><a> Forgotten Password?</a></span> -->
		  <button type="submit" class="btn btn-sm bg-purple2 pull-right" onclick="javascript:validate();return false;"><i class="fa fa-lock"></i> Login</button>
            <div class="clearfix"></div>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: Main -->
<div class="overlay-black"></div>
 <script>
	function validate(){
		var sid = $("#txtUserName").val();
		if(sid == ''){
			alert('Please Enter User Name');
			return false;
		}
		var email= $("#txtPassword").val();
		if(email==''){
			alert("Please Enter Password");
			return  false;
		}
		$('#loginform').submit();
	}
    </script>
 <style>
 body.login-page #page-logo {
  color: #fff;
  margin: 10px auto 35px;
  text-align: center;
}
.error_div {
  color: red;
  text-align: center;
}
.success_div {
  color: green;
  text-align: center;
}
 </style>
</body>
</html>