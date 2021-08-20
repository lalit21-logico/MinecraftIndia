  <div class="container">
    <div class="mt-5 pt-5 sign-cont">
      <div class="p-2 text-center">

        <h2 class="iwhite">Sign Up Form</h2>
        <p class="lead bg-dark iwhite p-2"><strong>SIGN UP</strong> to the Minecraft India and became a part of the community.
        </p>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>We respect your privacy <i class="far fa-smile-beam"></i> </strong>, You can check the reason behind collecting these data <a class="team" data-toggle="modal" data-target="#privacyModal" class="alert-link">Here..</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>

      <div class="modal fade" id="privacyModal" role="dialog">
        <div class="modal-dialog d-flex h-100">

          <!-- Modal content-->
          <div class="modal-content row justify-content-center align-self-center">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Privacy</h4>
            </div>
            <div class="modal-body">
              <p><b>Coming Soon</b></p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cool! Got it</button>
            </div>
          </div>

        </div>
      </div>

      <div class="row bg-dark p-3 mb-4">


        <div class="col-lg-12">
          <p class="mb-3 mt-3 iwhite">Some fileds are mandatory *</p>

          <form class="needs-validation" method="POST" id="signup-form" action="<?php echo base_url('Signup/SubmitUserData'); ?>" onsubmit="return checkForm(this);" enctype="multipart/form-data" validate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name*</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" name="firstName" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name*</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" name="lastName" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-3">
                <label for="username">Choose Username*</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="userName" placeholder="Username" name="userName" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>



              <div class="col-lg-6 mb-3">
                <label for="gamertag">Your Xbox Gamertag*</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-xbox"></i></span>
                  </div>
                  <input type="text" class="form-control" id="GamerTag" placeholder="Gamertag" name="GamerTag" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>


              <div class="col-md-6 mb-3">
                <label for="password">Password*</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" value="" name="password" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="re-password">Re-type Password*</label>
                <input type="password" class="form-control" id="re_password" placeholder="Re-enter Password" value="" name="re_password" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>


              <div class="col-lg-12 mb-3">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

            </div>



            <div class="row">

              <div class="col-lg-12">

                <hr class="mb-4 iwhite" style="background-color: white;">


                <div class="row">

                  <div class="col-lg-6 mb-3">

                    <p class="iwhite">Upload a Square shape image (JPG/PNG) for profile.</p>
                    <p class="iwhite">resolution should be at least 800x800 or More</p>
                  </div>

                  <div class="form-group col-lg-6 mb-3">
                    <label for="exampleFormControlFile1">Choose your Image</label>
                    <input type="file" name="userfile" class="form-control-file iwhite" id="userfile" required>
                  </div>

                </div>

                <hr class="mb-4 iwhite" style="background-color: white;">
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" name="country" required>
                  <option value="">Choose...</option>
                  <?php
                  if (!empty($country)) {
                    foreach ($country as $item1) {
                      echo '<option >' . $item1->name . '</option>';
                    }
                  }
                  ?>
                  <option>Other..</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">State (Only for Indian residence)</label>
                <select class="custom-select d-block w-100" id="state" name="state">
                  <option value="">Choose...</option>
                  <?php
                  if (!empty($state)) {
                    foreach ($state as $item1) {
                      echo '<option >' . $item1->name . '</option>';
                    }
                  }
                  ?>
                  <option>Other..</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>
            <div class="mb-3 col-lg-12">
              <label for="address">About Yourself</label>
              <textarea type="text" class="form-control" id="address" placeholder="Some words about Yourself, so we can easily approve your ID" name="address" required></textarea>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>







            <div class="row">

              <div class="col-lg-12">


                <hr class="mb-4 iwhite" style="background-color: white;">


                <div class="row">

                  <div class="col-lg-6 mb-3">

                    <label>Date Of Birth</label>

                    <input type="date" id="datepicker" class="form-control" placeholder="Choose" name="dob" reqiured>

                  </div>


                  <div class="col-md-6 mb-3">
                    <label for="country">I came here from</label>
                    <select class="custom-select d-block w-100" id="countryGrp" name="countryGrp" required>
                      <option value="">Choose...</option>
                      <?php
                      if (!empty($group)) {
                        foreach ($group as $item1) {
                          echo '<option >' . $item1->group_name . '</option>';
                        }
                      }
                      ?>

                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>

                  </div>

                </div>
              </div>
            </div>


            <div class="row">

              <div class="col-lg-12">

                <hr class="mb-4 iwhite" style="background-color: white;">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="same-address" name="youtuber">
                  <label class="custom-control-label" for="same-address">I'm a Youtuber and i'm eager to get some help from community</label>
                </div>

                <hr class="mb-4" style="background-color: white;">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="save-info" required>
                  <label class="custom-control-label" for="save-info">I'm accepting the terms and conditions including privacy policy and the Minecraft India's End User License Agreement.</label>
                </div>

                <hr class="mb-5 iwhite" style="background-color: white;">

                <button class="btn mb-4 btn-primary btn-lg btn-block" type="submit" name="submit" id="submit">Sign Up</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>


  <div class="modal fade" id="specialCharModel" role="dialog">
    <div class="modal-dialog d-flex h-100">

      <!-- Modal content-->
      <div class="modal-content row justify-content-center align-self-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp Error</h4>
        </div>
        <div class="modal-body text-center">
          <p><b>Username must contains only <div class="text-danger">letters, numbers and underscores!</div> </b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cool! Got it</button>
        </div>
      </div>

    </div>
  </div>



  <div class="modal fade" id="shortPassModel" role="dialog">
    <div class="modal-dialog d-flex h-100">

      <!-- Modal content-->
      <div class="modal-content row justify-content-center align-self-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp Error</h4>
        </div>
        <div class="modal-body">

          <p><b><div class="text-danger">Password is too.. short</div> <br> must contain at least six characters</b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cool! Got it</button>
        </div>
      </div>

    </div>
  </div>

  <div class="modal fade" id="PassModel" role="dialog">
    <div class="modal-dialog d-flex h-100">

      <!-- Modal content-->
      <div class="modal-content row justify-content-center align-self-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp Error</h4>
        </div>
        <div class="modal-body">

          <p><b>Please check if you've properly entered and confirm your password !<br><div class="text-danger">Password Not Matching</div></b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cool! Got it</button>
        </div>
      </div>

    </div>
  </div>