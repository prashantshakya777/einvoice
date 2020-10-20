<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Invoice</h3>
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
                        <input class="form-control" data-val="true" id="BillNo" name="BillNo" required="required" type="text" value="" />
                    </div>
                </div>

                <div class="col-sm-12 form-group">
                    <div class="col-sm-2">
                        <label class="control-label" for="PurchaseD">Purchase Date</label>
                        <span class="text-danger">*</span>
                    </div>
                         <div class="col-sm-3">
                        <input class="form-control has-datepicker" id="PurchaseDate" name="PurchaseDate" placeholder="Select English Date" required="required" type="text" value="" />
                        
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label class="control-label" for="PurchaseDateBS">Purchase Date(BS)</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" id="nepali-datepicker" placeholder="Select Nepali Date" name="PurchaseDateBS" required="required" type="text" value="" />
                      
                    </div>
                </div>

                <div class="col-sm-12 form-group">
                    <div class="col-sm-2">
                        <label class="control-label" for="SupplierName">Supplier Name</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" id="SupplierName" name="SupplierName" required="required" type="text" value="" />
                    </div>
					
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label class="control-label" for="SupplierNumber">Supplier Number</label>
						<span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" id="SupplierNumber" name="SupplierNumber" type="text" value="" />

                    </div>
                </div>
				

                <div class="col-sm-12 form-group">
				<div class="col-sm-2">
                        <label class="control-label" for="SupplierAddress">Supplier Address</label>
						<span class="text-danger">*</span>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" id="SupplierAddress" name="SupplierAddress" type="text" value="" />

                    </div>
					<div class="col-sm-2"></div>

                    <div class="col-sm-2">
                        <label class="control-label" for="Description">Description</label>
                    </div>
                    <div class="col-sm-3">
                        <textarea class="form-control" cols="20" data-val="true" data-val-length="The field Description must be a string with a maximum length of 200." data-val-length-max="200" id="Description" name="Description" rows="2"></textarea>
                      
                    </div>
                </div>
			
				
          <div class="form-group-row">              
                <div class="col-sm-12 pl-0">
                </div>
                <div class="form-group-row">
			<div class="col-sm-12 pl-0">
				<table class="table table-condensed"
					   id="InvoiceTable">
					<thead>
					<tr>
				<th class="col-sm-2" style="text-align:center;">Item</th>
				<th class="col-sm-1" style="text-align:center;">Quantity</th>
				<th class="col-sm-1" style="text-align:center;">Price</th>
				<th class="col-sm-1" style="text-align:center;">Amount</th>

						<th class="col-sm-1" style="text-align:center;">Remove</th>
					</tr>
					</thead>
					<tbody>

				</tbody>
					<tfoot>
					<tr>
						<td colspan="8">
			<span onclick="addInvoice()" class="btn btn-success" id="add">
				<i class="fa fa-plus"></i>  Add</span>
						</td>
					</tr>
					     <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th style="text-align:right">Sub Total</th>
                                <td><input type="text" name="TAmount" value="0" id="TAmount" class="form-control" required readonly /></td>
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
 function addInvoice() {
        msg = '<tr>';
       msg += '<input type="hidden" name="itemdetail[]" value="' + erowindex + '"/>';
        msg += '<td><input type="text" style="padding: 0px;" name="Item[]" id="Item-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Quantity[]" id="Quantity-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Price[]" onblur="cal()" id="Price-' + erowindex + '" class="form-control" required/></td>';
        msg += '<td><input type="text" name="Amount[]" id="Amount-' + erowindex + '" class="form-control" required/></td>';

		msg += '<td class="col-sm-2 center-fix" style="text-align:center;"><a href="" class="btn" title="remove"><span id="remove-' + erowindex + '"  style="cursor:pointer;"><i class="glyphicon glyphicon-remove-sign"></i></span></a></td>';

        msg += '</tr>';
		
        $('#InvoiceTable tbody').append(msg);
        erowindex++;

    }

        $("#InvoiceTable").on("click", "tr a", function (e) {
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
<script type="text/javascript">
            window.onload = function () {
                var mainInput = document.getElementById("nepali-datepicker");
                mainInput.nepaliDatePicker();
            };
</script>