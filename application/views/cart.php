<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container" style="margin-top: 25px; margin-bottom: 25px;">

<form action="shopping_cart" method="post">

   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shopping cart
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                
                <?php 
                    $x = 0;
                    foreach ($query->result() as $row) { 
                ?>
                
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img style="height: 100px; width: 100px;" src="<?php echo base_url('images/Internet-business.jpg') ?>">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?php echo $row->name; ?></strong></h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?php echo $row->price; ?><span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
    
                                    <input name="<?php echo $x ?>" type="number" step="1" max="99" min="0" value="<?php echo $count[$x]; ?>" class="qty"
                                           size="4">

                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <?php 
                            $x++;
                        } 
                    ?>
                    
                <div class="pull-right">
                    <input type="submit" name="update" value="update shopping cart">
                </div>
            </div>
            <div class="card-footer">

                <div class="pull-right" style="margin: 10px">
                    <input type="submit" class="btn btn-success pull-right" name="checkout" value="Checkout">
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>€<?php echo $price ?></b>
                    </div>
                </div>
            </div>
        </div>

</form> 
</div>

