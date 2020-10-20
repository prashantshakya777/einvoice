<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Customer Add</h3>
            </div>
            <?php echo form_open('customer/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Company" class="control-label">Company</label>
						<div class="form-group">
							<input type="text" name="Company" value="<?php echo $this->input->post('Company'); ?>" class="form-control" id="Company" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="FullName" class="control-label">FullName</label>
						<div class="form-group">
							<input type="text" name="FullName" value="<?php echo $this->input->post('FullName'); ?>" class="form-control" id="FullName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="Phone" value="<?php echo $this->input->post('Phone'); ?>" class="form-control" id="Phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Comment" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="Comment" class="form-control" id="Comment"><?php echo $this->input->post('Comment'); ?></textarea>
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