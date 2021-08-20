<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Your Posts</h2>
              <p class="mb-md-0">Your Submitted posts will appear here</p>
            </div>

          </div>

          <!-- <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div> -->
          <?php if ($this->session->flashdata('message') == 'Sucessfully Posted Blog.') { ?>
            <div class="alert alert-success" id="success-alert">
              <?php echo $this->session->flashdata('message') ?>
            </div>
          <?php } ?>
          <?php if ($this->session->flashdata('message') == 'Blog Deleted.') { ?>
            <div class="alert alert-danger" id="success-alert">
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
            <p class="card-title">post List</p>
            <div class="table-responsive">

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Author</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $index = $page;
                  if (isset($result)) {
                    foreach ($result as $item1) {
                      $index++;
                      $key = base64_encode($item1->id);

                  ?>
                      <tr>
                        <th scope="row"><?php echo ($index); ?></th>
                        <td><?php echo ($item1->title); ?></td>
                        <td><?php echo ($item1->datetime); ?></td>
                        <td><?php echo ($item1->user_name); ?></td>
                        <td>
                          <div class="inline">
                            <a type="button" class="btn btn-outline-warning" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Blog/updateData/$key"); ?>"> Edit </a>
                            <a type="button" class="btn btn-outline-danger" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url("Admin/Ad_Blog/deleteData/$key"); ?>"> Delete</a>
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