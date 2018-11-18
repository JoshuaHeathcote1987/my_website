    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Blog Home One
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 1</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        
        <div class="col-md-8">
        <?php foreach($query->result() as $row) { ?>
          <!-- PHP beginning for Blog Posts -->
          

          <div class="card mb-4">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row->head ?></h2>
              <p class="card-text"><?php echo $row->body ?></p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            </div>
          </div>

          <?php } ?>
          <!-- PHP End -->

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">France</a>
                    </li>
                    <li>
                      <a href="#">Italy</a>
                    </li>
                    <li>
                      <a href="#">Albania</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Greece</a>
                    </li>
                    <li>
                      <a href="#">Turkey</a>
                    </li>
                    <li>
                      <a href="#">Romania</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Hungary</a>
                    </li>
                    <li>
                      <a href="#">Serbia</a>
                    </li>
                    <li>
                      <a href="#">Croatia</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Czech</a>
                    </li>
                    <li>
                      <a href="#">Poland</a>
                    </li>
                    <li>
                      <a href="#">Portugal</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Macidonia</a>
                    </li>
                    <li>
                      <a href="#">Montengro</a>
                    </li>
                    <li>
                      <a href="#">Bulgaria</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->