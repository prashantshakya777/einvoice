<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Edit</h3>
            </div>
			<?php echo form_open('product/edit/'.$product['ProductId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ProductName" class="control-label">ProductName</label>
						<div class="form-group">
							<input type="text" name="ProductName" value="<?php echo ($this->input->post('ProductName') ? $this->input->post('ProductName') : $product['ProductName']); ?>" class="form-control" id="ProductName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $product['Price']); ?>" class="form-control" id="Price" />
						</div>
					</div>
						<div class="col-md-6">
						<label for="Photo" class="control-label">Upload Photo</label>
							<input type="file" name="userfile" value="<?php echo site_url('images/userimages/'.$product['Photo']);?>" width=200>
	
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