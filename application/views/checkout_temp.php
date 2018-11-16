    <!-- Page Content -->
    <div class="container" style="">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Checkout
        <small>message</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('welcome/index'); $x = 0; ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Checkout</li>
      </ol>
      <!-- /.row -->

      <!-- Checkout Form -->
      <!-- In order to set the email address and subject line for the Checkout form go to the bin/contact_me.php file. -->
      <div class="row cont">
        <div class="col-lg-8 mb-4">
          <form name="sentMessage" id="contactForm" method="post" action="message_sent" novalidate>
            <div class="control-group form-group">
              <div class="controls">

                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="email" class="form-control" aria-describedby="" placeholder="" value="<?php echo $_SESSION['user']['name'] ?>">
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control" aria-describedby="" placeholder="" value="<?php echo $_SESSION['user']['email'] ?>">
                    
                </div>   

                <?php foreach($query->result() as $row) {  ?>

                <div class="form-group">
                    <label><?php echo $row->name ?></label>
                    <input name="<?php echo $x ?>" type="email" class="form-control" aria-describedby="" placeholder="" value="<?php echo $_SESSION['count'][$x] ?>">
                    
                </div>
                <?php $x++ ?>

                <?php } ?>

                  <div class="form-group">
                  <label>Price</label>
                  <input name="price" type="email" class="form-control" aria-describedby="" placeholder="" value="<?php echo $_SESSION['price'] ?>">
                    
                </div> 

                <div class="control-group form-group">
                  <div class="controls">
                    <label>Description</label>
                    <textarea name="description" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                  </div>
                </div>

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
