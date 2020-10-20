<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Invoice Detail</h3>
				   	<div class="box-tools">
                    <a href="<?php echo site_url('invoice/index'); ?>" class="btn btn-success btn-sm">List</a> 
                </div>
            </div>
	<div class="box-body">
		<?php echo form_open_multipart('invoice/add'); ?>
			<div class="form-horizontal">
                  <div class="col-sm-12 form-group">
                    <div class="col-sm-2">
                        <label class="control-label" for="BillNo">Bill Number</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                     
						<input type="text" name="BillNo" value="<?php echo ($this->input->post('BillNo') ? $this->input->post('BillNo') : $invoicedetail['BillNo']); ?>" class="form-control" id="BillNo" readonly />
                    </div>
                </div>

                <div class="col-sm-12 form-group">
                    <div class="col-sm-2">
                        <label class="control-label" for="PurchaseD">Purchase Date</label>
                        <span class="text-danger">*</span>
                    </div>
                         <div class="col-sm-3">						
						<input type="text" name="PurchaseDate" value="<?php echo ($this->input->post('PurchaseDate') ? $this->input->post('PurchaseDate') : $invoicedetail['PurchaseDate']); ?>" class="form-control" id="PurchaseDate" readonly />
                        
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label class="control-label" for="PurchaseDateBS">Purchase Date(BS)</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        	<input type="text" name="PurchaseDateBS" value="<?php echo ($this->input->post('PurchaseDateBS') ? $this->input->post('PurchaseDateBS') : $invoicedetail['PurchaseDateBS']); ?>" class="form-control" id="PurchaseDateBS" readonly />
                      
                    </div>
                </div>

                <div class="col-sm-12 form-group">
                    <div class="col-sm-2">
                        <label class="control-label" for="SupplierName">Supplier Name</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                      	<input type="text" name="SupplierName" value="<?php echo ($this->input->post('SupplierName') ? $this->input->post('SupplierName') : $invoicedetail['SupplierName']); ?>" class="form-control" id="SupplierName" readonly />
                    </div>
					
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label class="control-label" for="SupplierNumber">Supplier Number</label>
						<span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        	<input type="text" name="SupplierNumber" value="<?php echo ($this->input->post('SupplierNumber') ? $this->input->post('SupplierNumber') : $invoicedetail['SupplierNumber']); ?>" class="form-control" id="SupplierNumber" readonly />
                    </div>
                </div>
				

                <div class="col-sm-12 form-group">
				<div class="col-sm-2">
                        <label class="control-label" for="SupplierAddress">Supplier Address</label>
						<span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="SupplierAddress" value="<?php echo ($this->input->post('SupplierAddress') ? $this->input->post('SupplierAddress') : $invoicedetail['SupplierAddress']); ?>" class="form-control" id="SupplierAddress" readonly />
                    </div>
					<div class="col-sm-2"></div>

                    <div class="col-sm-2">
                        <label class="control-label" for="Description">Description</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="Description" value="<?php echo ($this->input->post('Description') ? $this->input->post('Description') : $invoicedetail['Description']); ?>" class="form-control" id="Description" readonly />
                      
                    </div>
                </div>
			
				
          <div class="form-group-row">              
                <div class="col-sm-12 pl-0">
                </div>
                <div class="form-group-row">
			<div class="col-sm-12 pl-0">
				<table class="table table-condensed"
					   id="invoicedetailTable">
					<thead>
					<tr>
				<th class="col-sm-1" style="text-align:center;">Item</th>
				<th class="col-sm-1" style="text-align:center;">Quantity</th>
				<th class="col-sm-1" style="text-align:center;">Price</th>
				<th class="col-sm-1" style="text-align:center;">Amount</th>

						<th class="col-sm-1" style="text-align:center;">Remove</th>
					</tr>
					</thead>
                    <?php foreach($item as $i){ ?>
					<tbody>
						 <tr>
						<td class="col-sm-4"> <input type="text" name="Item" value="<?php echo ($this->input->post('Item') ? $this->input->post('Item') : $i['Item']); ?>" class="form-control" id="Item" readonly /></td>
						<td><input type="text" name="Quantity" value="<?php echo ($this->input->post('Quantity') ? $this->input->post('Quantity') : $i['Quantity']); ?>" class="form-control" id="Quantity" readonly /></td>
						<td><input type="text" name="Price" value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $i['Price']); ?>" class="form-control" id="Price" readonly /></td>
						<td><input type="text" name="Amount" value="<?php echo ($this->input->post('Amount') ? $this->input->post('Amount') : $i['Amount']); ?>" class="form-control" id="Amount" readonly /></td>
						</tr>
				</tbody>
					<?php }?>
					<tfoot>
					<tr>
						<td colspan="8">
			
						</td>
					</tr>
					     <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th style="text-align:right">Sub Total</th>
                                <td> <input type="text" name="TAmount" value="<?php echo ($this->input->post('TAmount') ? $this->input->post('TAmount') : $invoicedetail['TAmount']); ?>" class="form-control" id="TAmount" readonly /></td>
                            </tr>
					</tfoot>
				</table>
				    	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
			</div>
       </div>	
	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
 var erowindex = 1;
 function addinvoicedetail() {
        msg = '<tr>';
       msg += '<input type="hidden" name="itemdetail[]" value="' + erowindex + '"/>';
        msg += '<td><input type="text" style="padding: 0px;" name="Item[]" id="Item-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Quantity[]" id="Quantity-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Price[]" onblur="cal()" id="Price-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Amount[]" id="Amount-' + erowindex + '" class="form-control" required/></td>';

		msg += '<td class="col-sm-2 center-fix" style="text-align:center;"><a href="" class="btn" title="remove"><span id="remove-' + erowindex + '"  style="cursor:pointer;"><i class="glyphicon glyphicon-remove-sign"></i></span></a></td>';

        msg += '</tr>';
		
        $('#invoicedetailTable tbody').append(msg);
        erowindex++;

    }

        $("#invoicedetailTable").on("click", "tr a", function (e) {
        e.preventDefault();
        if (confirm("Are you sure to remove?")) {
            $(this).parents('tr').remove();

        }
    });
</script>

<script>
function cal(){
	//alert(erowindex);
	var amount;
	var total=0;
		for (var i = 1; i < erowindex; i++) {
			var quantity = $('#Quantity-' + i + '').val();
			//alert(quantity);
			var price = $('#Price-' + i + '').val();
				amount = parseFloat(quantity) * parseFloat(price);
				$('#Amount-' + i +'').val(amount.toFixed(2));
				var amt = $('#Amount-' + i + '').val();
				//alert(amt);
				if (amt > 0) {
				total = parseFloat(amt) + parseFloat(total);
				//alert(total);
			}
				document.getElementById('TAmount').value = total;
				//alert(amount);
			
        }

}
</script>
