<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Customer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Sno</th>
						<th>Company</th>
						<th>FullName</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Email</th>
						<th>Comment</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($customer as $c){ ?>
                    <tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $c['Company']; ?></td>
						<td><?php echo $c['FullName']; ?></td>
						<td><?php echo $c['Phone']; ?></td>
						<td><?php echo $c['Address']; ?></td>
						<td><?php echo $c['Email']; ?></td>
						<td><?php echo $c['Comment']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer/edit/'.$c['CustomerId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                             <a onclick="return confirm('Are you sure you want to Delete?');" href="<?php echo site_url('customer/remove/'.$c['CustomerId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
