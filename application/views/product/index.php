<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Product List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('product/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Sno</th>
						<th>ProductName</th>
                        <th>Purchase Date</th>
                        <th>Total</th>
                        <th>Available</th>
                        <th>Price</th>
						<!--<th>Photo </th>-->	
						<th>Actions</th>
                    </tr>
                    <?php $i=1;foreach($product as $p){ ?>
                    <tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $p['ProductName']; ?></td>
                        <td><?php echo $p['PurchaseDate']; ?></td>
                        <td><?php echo $p['Quantity']; ?></td>
                        <td><?php echo $p['Available']; ?></td>

						<td><?php echo $p['Price']; ?></td>
						<!--<td><a href="<?php echo site_url('images/userimages/'.$p['Photo']);?>">
						<img src="<?php echo site_url('images/userimages/'.$p['Photo']);?>" width=200></td><a>-->
					<td>
                            <a href="<?php echo site_url('product/edit/'.$p['ProductId']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                              <a href="<?php echo site_url('sale/add/'.$p['ProductId']); ?>" class="btn btn-success btn-xs"><span class="fa fa-handshake-o"></span> Sale</a> 
                           
                        <a onclick="return confirm('Are you sure you want to Delete?');" href="<?php echo site_url('product/remove/'.$p['ProductId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                       

                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
