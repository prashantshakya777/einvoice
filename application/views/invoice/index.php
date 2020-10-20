<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Invoice List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('invoice/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>InvoiceNo</th>
						<th>SupplierName</th>
						<th>SupplierNumber</th>
						<th>PurchaseDate</th>
						<th>Total Amount</th>
						<th>Actions</th>

                    </tr>
                    <?php $sum=0;?>
                    <?php foreach($invoice as $i){ ?>

                    <tr>
						<td><?php echo $i['BillNo']; ?></td>
						<td><?php echo $i['SupplierName']; ?></td>
						<td><?php echo $i['SupplierNumber']; ?></td>
						<td><?php echo $i['PurchaseDate']; ?></td>
						<td><?php echo $i['TAmount']; ?></td>
						<td>
                            <a href="<?php echo site_url('invoice/detail/'.$i['InvoiceId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-list"></span> Detail</a> 
                             <a onclick="return confirm('Are you sure you want to Delete?');" href="<?php echo site_url('invoice/remove/'.$i['InvoiceId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $sum+= $i['TAmount'];?>

                    <?php } ?>
                       <tr>
                          <td colspan="2"> Total:  </td>
                          <td></td>
                          <td></td>
                          <td><?php echo $sum;?></td>
                          <td></td>
                    </tr>
                </table>
                                
            </div>
        </div>
    </div>
</div>
