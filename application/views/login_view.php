<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>
<body>
<div class="container">
     <div class="row">
          <div class="text-center">
               <h1>Twitter Application</h1>
          </div>
          <!--<div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
               </ul>
               
          </div>-->
     </div>
</div>
<hr/>

<div class="container">
     <div class="row text-center">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <?php 
                $attributes = array("id" => "loginform", "name" => "loginform");
                echo form_open("login/index", $attributes);
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>   Enter Details To Login </strong>  
                </div>
                <div class="panel-body">
                    <form role="form">
                        <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                            </div>            
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                            </div>                       
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12 text-center">
                                <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary" value="Login" />
                                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <?php echo $this->session->flashdata('msg'); ?> 
                        <span class="alert-danger fade in"><?php echo form_error('txt_username'); ?></span>
                        <span class="alert-danger fade in"><?php echo form_error('txt_password'); ?></span>
                    </form>
                </div>
            </div>          
        </div>
     </div>
</div>
     
<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url("assets/js/jquery.metisMenu.js"); ?>"></script>
    <!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
</body>
</html>