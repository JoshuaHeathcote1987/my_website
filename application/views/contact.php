    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('welcome/index') ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            110, 35, Radium Street
            <br>Manchester, Greater Manchester, England, United Kingdom, M4 6AH
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (0161) 282 0695
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:joshuaheathcote1987@gmail.com">JoshuaHeathcote1987@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 10:00 AM to 6:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->
      <?php foreach($product as $row) { ?>

      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" action="message_sent" method="POST" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($_SESSION['user']['name']) ?>">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($_SESSION['user']['email']) ?>">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Product Name:</label>
                <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($row->name) ?>">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Product Price:</label>
                <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($row->price) ?>">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Product Description:</label>
                <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($row->description) ?>">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Description:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->
      <?php } ?>

    </div>
    <!-- /.container -->
