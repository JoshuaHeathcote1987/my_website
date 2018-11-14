    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Checkout
        <small>message</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('welcome/index') ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Checkout</li>
      </ol>
      <!-- /.row -->

      <!-- Checkout Form -->
      <!-- In order to set the email address and subject line for the Checkout form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <form name="sentMessage" id="contactForm" method="post" action="message_sent" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Check the information below and make sure that it is all correct, then click send:</label>
                <textarea rows="10" cols="100" name="form_info" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none">
                
                <?php 

                  //&#013; &#010; for breaking in the textarea
                  
                  echo "&#013;Please write a short description of your website below:";
                  echo "&#013;================================&#013;&#013;&#013;";

                  echo "&#013;Website Description";
                  echo "&#013;================================&#013;";

                  $x = 0;

                  foreach($query->result() as $row) {
                    echo "&#013;" . $row->name . " x &#09;&#09;&#09;" . $_SESSION['count'][$x];
                    $x++;
                  }

                  echo "&#013;&#013;Price: €" . $_SESSION['price'];

                ?>
                
                </textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
