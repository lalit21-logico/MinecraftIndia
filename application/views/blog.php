<div class="container pt-5">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h2 class="bg-dark mt-5 p-3 iwhite">Latest Posts</h2>




      <!-- Blog Post -->

      <div class="Post-list">


        <?php
        $index = $page;
        if (isset($result)) {
          foreach ($result as $item1) {
            $index++;
            $key = base64_encode($item1->id);
            $img = base64_encode($item1->blog_image);

        ?>

            <div class="post bg-dark p-4 mb-4">

              <h3 class="row">
                <a style="text-decoration: none;" class="iwhite hover-me" href="#"><?php echo ($item1->title);    ?></a>
              </h3>
              <div class="post-header row">
                <div class="text-light m-1 mt-3 pt-1 row ml-0">Posted on<div class="post-time text-info mx-lg-1 mr-1"><?php echo ($item1->datetime); ?></div> by <div class="author text-info mx-1"> <?php echo ($item1->user_name); ?></div>
                </div>

              </div>

              <div class="media flex-column flex-lg-row text-lg-center">
                <div class="author-profile col-lg-4 m-4  mx-auto">
                  <a href="<?php echo base_url("Blog/seeImg/$img") ?>" target="_blank">
                    <img class="img-fluid" src="<?php echo base_url("Image/BlogImg/$item1->blog_image") ?>" alt="NO IMAGE DATA" />

                  </a>
                </div>
                <div class="media-body m-3 text-lg-left">
                  <p class="card-text  mb-auto blog-snippet" style="color: white;"><?php echo ($item1->body);    ?>

                  </p>
                  <a class="iwhite snippet-fade r-snippet-fade" href="#"></a>

                </div>
              </div>

              <div class="post-foot m-3"> <a href="<?php echo base_url("Blog/blog_post/$key"); ?>" class="btn btn-primary">Read More &rarr;</a></div>

            </div>

        <?php
          }
        }

        ?>


      </div>


      <!-- !Blog Posts -->



      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <h3 class="text-center  d-block p-3 bg-dark text-white">
          <?php echo $links; ?>
        </h3>
      </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="mt-lg-0 col-md-4">

      <!-- Search Widget -->
      <div class="bg-dark mt-md-5 mb-4">
        <h5 class="pb-0 card-header iwhite">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control m-1" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="bg-dark my-4">
        <h5 class="card-header iwhite">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-styled category iwhite mb-0">
                <li>
                  <a href="#" class="iwhite dtex">Announcments</a>
                </li>
                <li>
                  <a href="#" class="iwhite dtex">Minecraft Bedrock</a>
                </li>
                <li>
                  <a href="#" class="iwhite dtex">Minecraft Java</a>
                </li>
              </ul>
            </div>
            <!-- <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div> -->
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="bg-dark my-4">
        <h5 class="card-header iwhite">Widget</h5>
        <div class="card-body iwhite">
          can be used to show ads!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>