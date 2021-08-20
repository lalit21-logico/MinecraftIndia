<div class="container">
  <div class="mt-5 pt-5 log-cont">


    <form class="form-signin bg-dark iwhite my-5 p-4" action="<?php echo base_url("Login/verify"); ?>" method="post">
      <?php if ($status == 1) { ?>
        <h1 class="h4 mb-3 font-weight-normal mt-2">Welcome Back! </h1>
      <?php } else if ($status == 2) { ?>
        <h1 class="h4 mb-3 font-weight-normal mt-2 text-danger">Invalid username or PassWord </h1>
      <?php } ?>

      <label for="username" class="sr-only">Username</label>

      <input type="username" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>

      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

      <div class="mb-3 mt-3">
        <label class="iwhite">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class=" mb-3 btn btn-lg btn-primary btn-block" type="submit">log in</button>
      <a class="mt-4 mb-3 iwhite hover-me text-lighten-2" href="#">Forgot Password?</a>

    </form>



  </div>
</div>