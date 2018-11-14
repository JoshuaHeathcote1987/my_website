    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Blog Home Two
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 2</li>
      </ol>

      <!-- Blog Post -->
      <?php if ($query->num_rows() > 0) : ?>
      <?php foreach ($query->result() as $row) : ?>
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="<?php echo base_url('images/').$row->image; ?>" alt="" style="width: 750px; height: 300px;">
                
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $row->title; ?></h2>
              <p class="card-text"><?php echo $row->body; ?></p>
              <a href="<?php echo base_url('welcome/blogpost/').$row->id; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <?php echo $row->date_time; ?>
          <a href="#">Start Bootstrap</a>
        </div>
      </div>
      <?php endforeach ; ?>
      <?php endif ; ?>

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

  </div>
  <!-- /.container -->
