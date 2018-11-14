<div class="container">

<div class="row" style="margin-top: 40px;">
<div class="col-lg-12 mb-4">
<h3>Blog Creation</h3>

<?php echo form_open_multipart('welcome/blogcreate'); ?>

<div class="control-group form-group">
    <div class="controls">
    <label>Title</label>
    <input name="title" type="text" class="form-control" id="title">
    <p class="help-block"></p>
    </div>
</div>
<div class="control-group form-group">
    <div class="controls">
    <label>Body</label>
    <textarea name="body" rows="10" cols="100" class="form-control" id="message" maxlength="999" style="resize:none"></textarea>
    </div>
</div>
<div class="control-group form-group">
    <div class="controls">
    <label>Written by</label>
    <input name="written_by" type="text" class="form-control" id="written_by" required>
    </div>
</div>
<div class="control-group form-group">
    <div class="controls">
    <label>Image</label>
    <input name="image" type="file" class="form-control" id="file" required>
    </div>
</div>
<div id="success"></div>
<!-- For success/fail messages -->
<button type="submit" method="POST" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</div>

</div>
<!-- /.row -->
</div>
