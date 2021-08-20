<?php if ($set == 'first') { ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="mr-md-3 mr-xl-5">
                                <h2>Staff Role Managment</h2>
                                <p class="mb-md-0">Maintain Role of staff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-title">Search by Username and Modify Roles</p>

                            <form class="needs-validation form-inline" method="POST" id="form" action="<?php echo base_url("Admin/Ad_Role_Manager/getUser"); ?>" enctype="multipart/form-data">
                                <div>

                                    <div class="input-group">
                                        <input class="form-control" type="text" name="user" list="users" placeholder="Select username" />
                                        <datalist id="users">

                                            <?php
                                            if (!empty($userList)) {
                                                foreach ($userList as $item1) {
                                                    echo '<option >' . $item1->user_name . '</option>';
                                                }
                                            }
                                            ?>
                                        </datalist>

                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-primary" type="submit" name="submit" id="submit"><i class="mdi mdi-account-search"></i></button>
                                        </div>

                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-title">Search by Role</p>
                            <?php $fil = "all" ?>
                            <form class="needs-validation" method="POST" id="signup-form" action="<?php echo base_url("Admin/Ad_Role_Manager/getList/$fil"); ?>" enctype="multipart/form-data">
                                <div class="input-group">
                                    <select id="Place" name="roleName" class="form-control" aria-placeholder="Selct role">
                                        <?php
                                        if (!empty($result)) {
                                            foreach ($result as $item1) {
                                                echo '<option >' . $item1->role_name . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit" name="submit" id="submit"><i class="mdi mdi-arrow-right "></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-title">Full Staff List</p>
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">UserName</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role </th>
                                            <th scope="col">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($staffList)) {
                                            $index = 0;

                                            foreach ($staffList as $item1) {

                                                $index++;
                                                $key = base64_encode($item1->id);

                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo ($index); ?></th>
                                                    <td><?php echo ($item1->first_name . " " . $item1->last_name); ?></td>
                                                    <td><?php echo ($item1->user_name); ?></td>
                                                    <td><?php echo ($item1->email); ?></td>
                                                    <td><?php echo ($item1->role_name); ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalConfirmDelete-<?php echo ($item1->id); ?>" data-id="<?php echo ($item1->id); ?>">Show Details</button>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }


                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <?php
        if (isset($staffList)) {
            foreach ($staffList as $item1) {
                if ($item1->youtuber == "on") {
                    $youtuber = "Yes";
                } else {
                    $youtuber = "No";
                }

        ?>

                <!--Modal: modalConfirmDelete-->
                <div class="modal fade" id="modalConfirmDelete-<?php echo ($item1->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="mr-auto">
                                    <h4 class="modal-title" id="myModalLabel">More About <?php echo ($item1->first_name . " " . $item1->last_name); ?></h4>
                                </div>
                            </div>
                            <div class="modal-body">

                                <div class="card-body">
                                    <div class="card-title mb-4">
                                        <div class="d-flex justify-content-start">
                                            <div class="image-container">
                                                <img src="<?php echo base_url("Image/UserImg/$item1->user_image") ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                            </div>
                                            <div class="userData ml-3">
                                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><?php echo ($item1->first_name . " " . $item1->last_name); ?></h2>
                                                <h6 class="d-block">Role: <span><?php echo (" " . $item1->role_name); ?></span></h6>
                                                <h6 class="d-block">Username: <span><?php echo (" " . $item1->user_name); ?></span></h6>
                                                <h6 class="d-block">Gamertag: <span><?php echo (" " . $item1->gamer_tag); ?></span></h6>
                                                <h6 class="d-block">Youtuber: <span><?php echo (" " . $youtuber); ?></span></h6>
                                                <h6 class="d-block">Country: <span><?php echo (" " . $item1->country); ?></span></h6>

                                            </div>
                                            <div class="ml-auto">
                                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">




                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Full Name</label>
                                                </div>
                                                <div class="col-md-9 col-6">
                                                    <?php echo ($item1->first_name . " " . $item1->last_name); ?>
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Birth Date</label>
                                                </div>
                                                <div class="col-md-9 col-6">
                                                    <?php echo ($item1->dob); ?>
                                                </div>
                                            </div>
                                            <hr />


                                            <div class="row">
                                                <div class="col-sm-3 col-md-12 col-5">
                                                    <label style="font-weight:bold; ">About (Bio)</label>
                                                </div>
                                                <p class="col-md-12 col-5" style="overflow-wrap: break-word;">
                                                    <?php echo ($item1->address); ?>
                                                </p>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Email</label>
                                                </div>
                                                <div class="col-md-9 col-6">
                                                    <?php echo ($item1->email); ?>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">State</label>
                                                </div>
                                                <div class="col-md-9 col-6">
                                                    <?php echo ($item1->state); ?>
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Came From</label>
                                                </div>
                                                <div class="col-md-9 col-6">
                                                    <?php echo ($item1->country_group); ?>
                                                </div>
                                            </div>



                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="modal-footer">
                                <center>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Hmm.. Got it! 👍</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>


        <?php
            }
        }
        ?>

    <?php } else if ($set == 'second') { ?>

        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <h2>Role Managment</h2>
                                    <p class="mb-md-0">Staff profile</p>
                                </div>


                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <?php $fil = "all" ?>
                                    <a type="button" class="btn btn-primary" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Role_Manager/getList/$fil"); ?>"> All </a>
                                    <?php $fil = "notVerified" ?>
                                    <a type="button" class="btn btn-warning" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Role_Manager/getList/$fil"); ?>"> Not Verified </a>
                                    <?php $fil = "verified" ?>
                                    <a type="button" class="btn btn-success" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Role_Manager/getList/$fil"); ?>"> Verified </a>
                                </div>

                            </div>
                            <?php if ($this->session->flashdata('message') == 'Sucessfully deleted.') { ?>
                                <div class="alert alert-danger" id="success-alert">
                                    <?php echo $this->session->flashdata('message') ?>
                                </div>
                            <?php } else if ($this->session->flashdata('message') == 'Sucessfully Assigned role.') { ?>
                                <div id="success-alert" class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('message') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="card-title"><?php if(isset($_SESSION['roleName'])){ echo ($_SESSION['roleName']);} ?> List</p>
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">UserName</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Details</th>
                                                    <th scope="col">Assign as <?php if(isset($_SESSION['roleName'])){ echo ($_SESSION['roleName']); }?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($result)) {
                                                $index = $page;
                                                foreach ($roleId as $item1) {
                                                    $rolId = $item1->role_id;
                                                }
                                                foreach ($result as $item1) {

                                                    $index++;
                                                    $key = base64_encode($item1->id);

                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ($index); ?></th>
                                                        <td><?php echo ($item1->first_name . " " . $item1->last_name); ?></td>
                                                        <td><?php echo ($item1->user_name); ?></td>
                                                        <td><?php echo ($item1->email); ?></td>
                                                        <td>

                                                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalConfirmDelete-<?php echo ($item1->id); ?>" data-id="<?php echo ($item1->id); ?>">Show Details</button>
                                                        </td>
                                                        <td>
                                                            <div class="inline">
                                                                <?php if ($item1->role !=  $rolId) {
                                                                ?>
                                                                    <a type="button" class="btn btn-outline-success" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Role_Manager/assignRole/$item1->user_name/$rolId"); ?>"> confirm </a>
                                                                <?php  } else { ?>
                                                                    <a type="button" class="btn btn-outline-danger" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Role_Manager/deleteRequest/$item1->user_name"); ?>"> Delete</a>
                                                                <?php } ?>
                                                            </div>

                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }


                                            ?>
                                        </tbody>
                                    </table>

                                    <nav class="m-2" aria-label="Page navigation">
                                        <?php echo $links; ?>
                                    </nav>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($result)) {
                $index = $page;
                foreach ($result as $item1) {
                    if ($item1->youtuber == "on") {
                        $youtuber = "Yes";
                    } else {
                        $youtuber = "No";
                    }

            ?>

                    <!--Modal: modalConfirmDelete-->
                    <div class="modal fade" id="modalConfirmDelete-<?php echo ($item1->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="mr-auto">
                                        <h4 class="modal-title" id="myModalLabel">More About <?php echo ($item1->first_name . " " . $item1->last_name); ?></h4>
                                    </div>
                                </div>
                                <div class="modal-body">

                                    <div class="card-body">
                                        <div class="card-title mb-4">
                                            <div class="d-flex justify-content-start">
                                                <div class="image-container">
                                                    <img src="<?php echo base_url("Image/UserImg/$item1->user_image") ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                </div>
                                                <div class="userData ml-3">
                                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><?php echo ($item1->first_name . " " . $item1->last_name); ?></h2>
                                                    <h6 class="d-block">Role: <span><?php echo (" " . $item1->role_name); ?></span></h6>
                                                    <h6 class="d-block">Username: <span><?php echo (" " . $item1->user_name); ?></span></h6>
                                                    <h6 class="d-block">Gamertag: <span><?php echo (" " . $item1->gamer_tag); ?></span></h6>
                                                    <h6 class="d-block">Youtuber: <span><?php echo (" " . $youtuber); ?></span></h6>
                                                    <h6 class="d-block">Country: <span><?php echo (" " . $item1->country); ?></span></h6>

                                                </div>
                                                <div class="ml-auto">
                                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">




                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Full Name</label>
                                                    </div>
                                                    <div class="col-md-9 col-6">
                                                        <?php echo ($item1->first_name . " " . $item1->last_name); ?>
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Birth Date</label>
                                                    </div>
                                                    <div class="col-md-9 col-6">
                                                        <?php echo ($item1->dob); ?>
                                                    </div>
                                                </div>
                                                <hr />


                                                <div class="row">
                                                    <div class="col-sm-3 col-md-12 col-5">
                                                        <label style="font-weight:bold; ">About (Bio)</label>
                                                    </div>
                                                    <p class="col-md-12 col-5" style="overflow-wrap: break-word;">
                                                        <?php echo ($item1->address); ?>
                                                    </p>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Email</label>
                                                    </div>
                                                    <div class="col-md-9 col-6">
                                                        <?php echo ($item1->email); ?>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">State</label>
                                                    </div>
                                                    <div class="col-md-9 col-6">
                                                        <?php echo ($item1->state); ?>
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Came From</label>
                                                    </div>
                                                    <div class="col-md-9 col-6">
                                                        <?php echo ($item1->country_group); ?>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Hmm.. Got it! 👍</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>


            <?php
                }
            }
            ?>


        <?php } else if ($set == 'third') { ?>




            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex align-items-end flex-wrap">
                                    <div class="mr-md-3 mr-xl-5">
                                        <h2>Role Managment</h2>
                                        <p class="mb-md-0">Maintain Role of staff</p>
                                    </div>
                                </div>
                                <?php if ($this->session->flashdata('message')) { ?>
                                    <div class="alert shadow alert-success" role="alert" id="success-alert">
                                        <?php echo $this->session->flashdata('message') ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($user)) {
                        foreach ($user as $item1) {
                            if ($item1->youtuber == "on") {
                                $youtuber = "Yes";
                            } else {
                                $youtuber = "No";
                            }

                    ?>


                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="modal-header">

                                                    <h4 class="modal-title" id="myModalLabel"> <?php echo ($item1->first_name . " " . $item1->last_name); ?></h4>
                                                    <form class="needs-validation" method="POST" id="signup-form" action="<?php echo base_url("Admin/Ad_Role_Manager/updateRole/$item1->user_name"); ?>" enctype="multipart/form-data">

                                                        <div class="input-group">
                                                            <select id="Place" name="roleName" class="form-control">
                                                                <option><?php echo ($item1->role_name); ?></option>

                                                                <?php
                                                                if (!empty($result)) {
                                                                    foreach ($result as $item2) {
                                                                        echo '<option >' . $item2->role_name . '</option>';
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-sm btn-primary" type="submit" name="submit" id="submit">Update</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="card-body">
                                                        <div class="card-title mb-4">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="image-container">
                                                                    <img src="<?php echo base_url("Image/UserImg/$item1->user_image") ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                                </div>
                                                                <div class="userData ml-3">
                                                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><?php echo ($item1->first_name . " " . $item1->last_name); ?></h2>
                                                                    <h6 class="d-block">Role: <span><?php echo (" " . $item1->role_name); ?></span></h6>
                                                                    <h6 class="d-block">Username: <span><?php echo (" " . $item1->user_name); ?></span></h6>
                                                                    <h6 class="d-block">Gamertag: <span><?php echo (" " . $item1->gamer_tag); ?></span></h6>
                                                                    <h6 class="d-block">Youtuber: <span><?php echo (" " . $youtuber); ?></span></h6>
                                                                    <h6 class="d-block">Country: <span><?php echo (" " . $item1->country); ?></span></h6>

                                                                </div>
                                                                <div class="ml-auto">
                                                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12">




                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-3 col-5">
                                                                        <label style="font-weight:bold;">Full Name</label>
                                                                    </div>
                                                                    <div class="col-md-9 col-6">
                                                                        <?php echo ($item1->first_name . " " . $item1->last_name); ?>
                                                                    </div>
                                                                </div>
                                                                <hr />

                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-3 col-5">
                                                                        <label style="font-weight:bold;">Birth Date</label>
                                                                    </div>
                                                                    <div class="col-md-9 col-6">
                                                                        <?php echo ($item1->dob); ?>
                                                                    </div>
                                                                </div>
                                                                <hr />


                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-12 col-5">
                                                                        <label style="font-weight:bold; ">About (Bio)</label>
                                                                    </div>
                                                                    <p class="col-md-12 col-5" style="overflow-wrap: break-word;">
                                                                        <?php echo ($item1->address); ?>
                                                                    </p>
                                                                </div>
                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-3 col-5">
                                                                        <label style="font-weight:bold;">Email</label>
                                                                    </div>
                                                                    <div class="col-md-9 col-6">
                                                                        <?php echo ($item1->email); ?>
                                                                    </div>
                                                                </div>
                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-3 col-5">
                                                                        <label style="font-weight:bold;">State</label>
                                                                    </div>
                                                                    <div class="col-md-9 col-6">
                                                                        <?php echo ($item1->state); ?>
                                                                    </div>
                                                                </div>
                                                                <hr />

                                                                <div class="row">
                                                                    <div class="col-sm-3 col-md-3 col-5">
                                                                        <label style="font-weight:bold;">Came From</label>
                                                                    </div>
                                                                    <div class="col-md-9 col-6">
                                                                        <?php echo ($item1->country_group); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
            <?php } ?>