<style>

</style>

<div class="container">
    <div class="void-top-15 sign-cont">
        <div class="py-2 text-center">
            <p class="lead bg-dark text-uppercase iwhite py-2">Profile
            </p>

        </div>

        <?php
        if (isset($result)) {
            foreach ($result as $item1) {
                $key = base64_encode($item1->id);

        ?>

                <div class="bg-dark text-light mb-4">



                    <div class="pt-4 mb-4">




                        <div class="media flex-column flex-lg-row text-lg-center">
                            <div class="col-lg-4 col-md-12 my-4 text-center ml-auto">
                                <div class="profile-img">
                                    <img class="img-fluid img-thumbnail " src="<?php echo base_url("Image/UserImg/$item1->user_image") ?>" alt="NO IMAGE DATA" />
                                    <div class="up-file btn btn-block w-75 btn-primary">
                                        Change Photo
                                        <input type="file" class="w-75" name="file">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 text-lg-left mr-auto">
                                <div class="pt-4 p-sm-3 p-md-4 p-lg-5 py-md-5">
                                    <h4 class="lead float-right">MI <span class="text-capitalize">Points</span> : <span>85</span></h4>
                                    <h3 class="text-capitalize font-weight-bold">
                                        <?php echo ($item1->first_name . ' ' . $item1->last_name);    ?>
                                    </h3>
                                    <p>
                                        Username : <?php echo ($item1->user_name);    ?> <br>
                                        Xbox Gamertag : <?php echo ($item1->gamer_tag);    ?>
                                    </p>


                                    <p> BIO BIO Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, ad nobis. Facilis, natus repellat eos totam numquam, dolorum, aut</p>
                                </div>
                            </div>

                        </div>
                        <hr class="bg-light w-75">



                    </div>

                    <div class="pb-5">

                        <div class="media flex-column flex-lg-row text-lg-center">
                            <div class="col-lg-4 col-md-12 my-4 ml-auto">
                                <div class="p-sm-3 p-md-4 p-lg-0">
                                    <div class="nav nav-tabs flex-column" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Personal Details</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Subscription details</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Transaction History</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 text-lg-left mr-auto">
                                <div class="tab-content p-sm-3 p-md-4 p-lg-0 mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        Email : <?php echo ($item1->email); ?><br>
                                        DOB : <?php echo ($item1->dob); ?><br>
                                        Address : <?php echo ($item1->address); ?><br>
                                        State : <?php echo ($item1->state); ?><br>
                                        country : <?php echo ($item1->country); ?><br>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Subscription / Plan Details will Shown here.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quam ab? Iste, accusantium nobis dolor dolore ullam aliquam facere libero enim officiis mollitia consectetur beatae! Enim nisi omnis beatae quas.</div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">All faild and successful payment will show here</div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Other Settings</div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
        <?php
            }
        }

        ?>

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

                <p><b>
                        <div class="text-danger">Password is too.. short</div> <br> must contain at least six characters
                    </b></p>

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

                <p><b>Please check if you've properly entered and confirm your password !<br>
                        <div class="text-danger">Password Not Matching</div>
                    </b></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cool! Got it</button>
            </div>
        </div>

    </div>
</div>