<div class="container pt-5">

  <div class="row">

    <!-- Blog Entries Column -->

    <?php
    $index = 0;
    if (isset($result)) {
      foreach ($result as $item1) {
        $index++;
        $key = base64_encode($item1->id);

    ?>
        <div class="col-md-8">

          <h2 class="bg-dark mt-5 p-3 iwhite" style=" margin: 0;"><?php echo ($item1->title);    ?></h2>

          <div class="author-profile col-lg-13 m-8  mx-auto">
            <a href="<?php echo base_url("Image/BlogImg/$item1->blog_image") ?>" target="_blank">
              <img class="img-fluid" src="<?php echo base_url("Image/BlogImg/$item1->blog_image") ?>" alt="NO IMAGE DATA" />

            </a>
          </div>


          <!-- Blog Post -->

          <div class="Post-list">



            <div class="post bg-dark p-4 mb-4">


              <div class="text-light m-1 mt-3 pt-1 row ml-0">
                <h5>Posted on</h5>
                <div class="post-time text-info mx-lg-1 mr-1"><?php echo ($item1->datetime); ?></div> by
                <div class="author text-info mx-1"><?php echo ($item1->user_name); ?></div>
              </div>

              <p class="iwhite"><?php echo ($item1->body);    ?></p>

              <div class="media flex-column flex-lg-row text-lg-center">

              </div>
            </div>

          </div>

        </div>
    <?php
      }
    }

    ?>

    <!-- Sidebar Widgets Column -->
    <div class="mt-lg-4 col-md-4">



      <!-- Categories Widget -->
      <div class="bg-dark my-4">
        <h5 class="card-header iwhite">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-styled category iwhite mb-0">
                <li>
                  <a href="#" class="iwhite dtex">Announcments You can’t tell that the person is true or fake unless you find yourself. If you find that the person is fake then throw them out of your life.</a>
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


    </div>

  </div>
  <!-- /.row -->

</div>