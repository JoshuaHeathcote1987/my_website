  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Pricing
      <small>Plan</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Pricing</li>
    </ol>

    <!-- Content Row -->
    <form action="cart" method="POST">
    <div class="row">
    <?php $x = 0; ?>
    <?php foreach($query->result() as $row) { ?>
      
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header"><?php echo $row->name ?></h3>
          <div class="card-body">
            <div class="display-4"><?php echo $row->price ?></div>
            <div class="font-italic">per page</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $row->description ?></li>
            <li class="list-group-item">
            <input type="submit" name="<?php echo $x ?>" value="More..">
            <?php $x++; ?>
            </li>
          </ul>
        </div>
      </div>
      


    <?php } ?>
    </form>
    </div>
    
    <!-- /.row -->

    <!-- HTML, CSS, JSS / PHP, MySQL, Apache / Front End, Back End, 24/7 Support --->

  </div>
  <!-- /.container -->