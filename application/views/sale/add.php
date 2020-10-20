<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Customer Bill</h3>
            </div>
            <?php echo form_open('sale/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-4">
						<label for="ProductName" class="control-label">Product</label>
						<div class="form-group">
							<input type="text" name="ProductName" value="<?php echo ($this->input->post('ProductName') ? $this->input->post('ProductName') : $product['ProductName']); ?>" class="form-control" id="ProductName" readonly />
						</div>
							<label for="Available" class="control-label">Available</label>
						<div class="form-group">
							<input type="text" name="Available" value="<?php echo ($this->input->post('Available') ? $this->input->post('Available') : $product['Available']); ?>" class="form-control" id="Available" readonly />
						</div>
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $product['Price']); ?>" class="form-control" id="Price" readonly />
						</div>
		
					
						<label for="Quantity" class="control-label">Quantity</label>
						<div class="form-group">
							<input type="text" name="Quantity" value="<?php echo $this->input->post('Quantity'); ?>" class="form-control" oninput="calculate()"id="Quantity" />
						</div>
				
						<label for="TPrice" class="control-label">Total Price</label>
						<div class="form-group">
							<input type="text" name="TPrice" value="<?php echo $this->input->post('TPrice'); ?>" class="form-control" id="TPrice" />
						</div>
			
						<label for="Comment" class="control-label">Sale Date</label>
						<div class="form-group">
							<input type="date" name="Comment" class="form-control" id="Comment"><?php echo $this->input->post('Comment'); ?>
						</div>
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
<script>
function calculate() {
    var a = document.getElementById('Price').value;    
    var b = document.getElementById('Quantity').value;
	var tamt = document.getElementById('TPrice');
   	var r = a * b;
	tamt.value = r;


}
window.onload = calculate();
</script>