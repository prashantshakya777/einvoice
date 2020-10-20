<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Add</h3>
            </div>
         <?php echo form_open_multipart('product/add'); ?>
            <?php if($error = $this->session->flashdata('msg')){ ?>
            <p style="color: green;"><?php
                if($error !=null){
                    foreach($error as $err) {
                    echo $err;
                } } ?></p>
                <?php } ?>

          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="ProductName" class="control-label">ProductName</label>
						<div class="form-group">
							<input type="text" name="ProductName" value="<?php echo $this->input->post('ProductName'); ?>" class="form-control" id="ProductName" required="required" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" value="<?php echo $this->input->post('Price'); ?>" class="form-control" id="Price" required="required" />
						</div>
					</div>
						<div class="col-md-6">
						<label for="Photo" class="control-label">Upload Photo</label>
							<input type="file" name="userfile" class="form-control" id="Photo" required="required"/>
				
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>