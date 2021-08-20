<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Create a Blog Post</h2>
              <p class="mb-md-0">Write someting really nice!😉</p>
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

        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <p class="card-title">New Post</p>
            <div class="table-responsive">


              <form method="POST" id="blog-form" action="<?php echo base_url('Admin/Ad_Blog/submitBlogData'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="postTitle">Title</label>
                  <input type="postTitle" class="form-control" id="postTitle" name="postTitle" placeholder="A good title here" required>
                </div>

                <div class="form-group">
                  <label>Title image (Square image recommended)</label>
                  <input type="file" name="userfile" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload image which will appear on blog">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Select Image</button>
                    </span>

                  </div>

                </div>

                <div class="form-group">
                  <label for="postBody">Main Content</label>
                  <textarea class="form-control" id="postBody" name="postBody" rows="20" required></textarea>
                </div>


                <div class="row mr-0">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="blogCategory">Select a category</label>
                      <select class="form-control" id="blogCategory" name="blogCategory" required>
                        <option value="">Choose...</option>
                        <option>Announcments</option>
                        <option>Minecraft Bedrock</option>
                        <option>Minecraft Java</option>
                        <option>Downloads</option>
                        <option>Other Updates</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <button class="pub btn btn-primary btn-lg btn-block" type="submit" name="submit" id="submit">Publish</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>