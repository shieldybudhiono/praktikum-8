<link href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap/dist/css/mycss.min.css" rel="stylesheet" id="bootstrap-css">


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2 style="color: #2ecc71">Login</h2>
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url('Login/aksi_login') ?>" method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" style="background-color: #2ecc71" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->

  </div>
</div>