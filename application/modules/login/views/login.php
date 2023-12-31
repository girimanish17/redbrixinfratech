<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>RedbRIX! </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="<?php echo base_url('login'); ?>" method="post">
            <h1>Login Form</h1>
            <div>
              <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>" />			 
            </div>
            <div>
              <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password" />
			  <span style="color:red;"><?php echo form_error('email'); ?></span>
			  <span style="color:red;"><?php echo form_error('password'); ?></span>
			  <span style="color:red;"><?php echo $errors; ?></span>
            </div>
			 
            <div>
              <!-- <input type="submit" class="btn btn-default submit" value="Log in" > -->
              <button type="submit" class="btn btn-default submit">Login</button>
              <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
            </div>
            <div class="clearfix"></div>
            <div class="separator">

          <!--    <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p> -->
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> RedbRIX!</h1>

                <p>©2023 All Rights Reserved. </p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

           <!--   <p class="change_link">Already a member ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p> -->
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> RedbRIX!</h1>

                 <h1><i class="fa fa-paw" style="font-size: 26px;"></i> RedbRIX!</h1>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
