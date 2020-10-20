<html>
<head>
<title>e-Invoice</title>
<style>
body{
padding:0;
background-image:url("wall.jpeg");
background-size: cover;
font-family:Helvetica;
}

#main{
width:20%;
height:70%;
float:left;
font-size:16px;
}

#main h1{
font-size:25px;
}

#mid{
width:20%;
height:50%;
float:right;
margin-top:5%;
font-size:16px;		
}

input[type=text] {
width: 80%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
}

.change{
clear:both;
width:100%;
height:100%;
margin-top:20%;
font-size:16px;
}


.change input[type=text]{
width: 15%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;

}

input[type=number]{
width: 15%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
}

input[type="submit"]{
border:none;
outline:none;
height:45px;
font-size;18px;
border-radius:50px;
}

</style>	
		<script type="text/javascript">
			function calc(val)
			{
				data = ['one','two','three','four','five'];
				var total = 0;

				//for loop stands here 
			for (var i = 0; i < 5; i++) {
				val = data[i];
				var n1=parseInt(document.getElementById(val+'Qty').value);
				var n2=parseInt(document.getElementById(val+'Price').value);
				var oper=document.getElementById('operators').value;
				if(oper === 'X' && (n1*n2)>=0)
				{
						mul = n1*n2;
						total += mul;
						document.getElementById(val+"Result").value=(mul);
				}
			}
			document.getElementById("out").value=(total);
			total -= parseInt(document.getElementById('adv').value);
			document.getElementById("subt").value=(total);

			//for ends here
		}
		

		function add()
		{
			var result=parseInt(document.getElementById('result').value);
			var res=parseInt(document.getElementById('res').value);		
			var re=parseInt(document.getElementById('re').value);
			var r=parseInt(document.getElementById('r').value);
			var output=parseInt(document.getElementById('output').value);
			var plus=document.getElementById('addition').value;
		if(plus === '+')
		{
		document.getElementById("out").value=(result+res+re+r+output);
		
		}
		
		}
		
		function subtract()
		{
		var out=parseInt(document.getElementById('out').value);
		var adv=parseInt(document.getElementById('adv').value);
		var sol=document.getElementById('subtraction').value;
		if(sol === '-')
		{
		document.getElementById("subt").value=(out-adv);
		}	
		}
		</script>
			</head>
				<body>
				  	<?php echo form_open('invoice/edit/'.$invoice['InvoiceId']); ?>
						<div id="main">
							<h1>Create Invoice</h1>		
							Customername<input type="text" name="cname" value="<?php echo ($this->input->post('customername') ? $this->input->post('customername') : $invoice['customername']); ?>" class="form-control" />
							Address<input type="text" name="addr" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $invoice['address']); ?>" class="form-control"  />
							Email<input type="text" name="InvoiceId" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $invoice['email']); ?>" class="form-control"  />

						</div>
						
						<div id="mid">
							Invoiceno<input type="text" name="InvoiceId" value="<?php echo ($this->input->post('InvoiceId') ? $this->input->post('InvoiceId') : $invoice['InvoiceId']); ?>" class="form-control"  />
							Invoicedate<input type="text" name="idate" value="<?php echo ($this->input->post('invoicedate') ? $this->input->post('invoicedate') : $invoice['invoicedate']); ?>" class="form-control" />
							Invoiceduedate<input type="text" name="ddate" value="<?php echo ($this->input->post('invoiceduedate') ? $this->input->post('invoiceduedate') : $invoice['invoiceduedate']); ?>" class="form-control"  />			
							Payment<select name="pay">
								<option>----</option>
								<option value="full">Full</option>
								<option value="partial">Partial</option>
								<option value="no">No</option>
								</select>
						</div>
						 <div class="form-group">
            <div class="form-group-row">
                <div class="col-sm-12">
                        <div class="col-sm-4 pl-0">
                            <label><span class="form-required" title="This field is required."> </span>Item</label>
                            <input type="text" name="it" value="<?php echo ($this->input->post('item') ? $this->input->post('item') : $invoice['item']); ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Qty</label>
                            <input type="text" name="qty" value="<?php echo ($this->input->post('qty') ? $this->input->post('qty') : $invoice['qty']); ?>" id="oneQty" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Price 		
                            <input type="text" name="p" value="<?php echo ($this->input->post('rate') ? $this->input->post('rate') : $invoice['rate']); ?>"id="onePrice" class="form-control">
						</div>
						<select id="operators"> 
					<option value="X">X</option>
				</select></label>
						<div class="col-sm-2 pl-0">
					
                            <label>Total</label>
                            <input type="text"  name ="t" value="<?php echo ($this->input->post('total') ? $this->input->post('total') : $invoice['total']); ?>" id="oneResult" class="form-control">
                        </div>
						 <div class="col-sm-4 pl-0">
                            <label>Item</label>
                            <input type="text" name="it1"  value="<?php echo ($this->input->post('item1') ? $this->input->post('item1') : $invoice['item1']); ?>"class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Qty</label>
                            <input type="text" value="<?php echo ($this->input->post('qty') ? $this->input->post('qty') : $invoice['qty']); ?>" name="qty1" id="twoQty" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Price		
                            <input type="text" value="<?php echo ($this->input->post('rate1') ? $this->input->post('rate1') : $invoice['rate1']); ?>" name="p1" id="twoPrice" class="form-control">
						</div>
						<select id="operators"> 
					<option value="X">X</option>
				</select></label>
						<div class="col-sm-2 pl-0">
					
                            <label>Total</label>
                            <input type="text"  value="<?php echo ($this->input->post('total1') ? $this->input->post('total1') : $invoice['total1']); ?>"name="t1" id="twoResult" class="form-control">
                        </div>
						
						 <div class="col-sm-4 pl-0">
                            <label>Item</label>
                            <input type="text" value="<?php echo ($this->input->post('item2') ? $this->input->post('item2') : $invoice['item2']); ?>" name="it2" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Qty</label>
                            <input type="text" value="<?php echo ($this->input->post('qty2') ? $this->input->post('qty2') : $invoice['qty2']); ?>"  name="qty2" id="threeQty" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Price 		
                            <input type="text"  value="<?php echo ($this->input->post('rate2') ? $this->input->post('rate2') : $invoice['rate2']); ?>"name="p2" id="threePrice" class="form-control">
						</div>
						<select id="operators"> 
					<option value="X">X</option>
				</select></label>
						<div class="col-sm-2 pl-0">
					
                            <label>Total</label>
                            <input type="text" name="t2" value="<?php echo ($this->input->post('total2') ? $this->input->post('total2') : $invoice['total2']); ?>" id="threeResult" class="form-control">
                        </div>
						
						
						
						 <div class="col-sm-4 pl-0">
                            <label>Item</label>
                            <input type="text" name="it3" value="<?php echo ($this->input->post('item3') ? $this->input->post('item3') : $invoice['item3']); ?>" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Qty</label>
                            <input type="text"  name="qty3"  value="<?php echo ($this->input->post('qty3') ? $this->input->post('qty3') : $invoice['qty3']); ?>"id="fourQty" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Price 		
                            <input type="text" name="p3" value="<?php echo ($this->input->post('rate3') ? $this->input->post('rate3') : $invoice['rate3']); ?>" id="fourPrice" class="form-control">
						</div>
						<select id="operators"> 
					<option value="X">X</option>
				</select></label>
						<div class="col-sm-2 pl-0">
					
                            <label>Total</label>
                            <input type="text" name="t3" value="<?php echo ($this->input->post('total3') ? $this->input->post('total3') : $invoice['total3']); ?>" id="fourResult" class="form-control">
                        </div>
						
						 <div class="col-sm-4 pl-0">
                            <label>Item</label>
                            <input type="text" name="it4"  value="<?php echo ($this->input->post('item4') ? $this->input->post('item4') : $invoice['item4']); ?>"class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Qty</label>
                            <input type="text" value="<?php echo ($this->input->post('qty4') ? $this->input->post('qty4') : $invoice['qty4']); ?>" name="qty4" id="fiveQty" class="form-control">
                        </div>
                        <div class="col-sm-2 pl-0">
                            <label>Price 		
                            <input type="text"  value="<?php echo ($this->input->post('rate4') ? $this->input->post('rate4') : $invoice['rate4']); ?>"name="p4" id="fivePrice" class="form-control">
						</div>
						<select id="operators"> 
					<option value="X">X</option>
				</select></label>
						<div class="col-sm-2 pl-0">
					
                            <label>Total</label>
                            <input type="text" name="t4" value="<?php echo ($this->input->post('total4') ? $this->input->post('total4') : $invoice['total4']); ?>" id="fiveResult" class="form-control">
                        </div>
						
						<button type="button" onclick="calc('one');" class="btn btn-primary">Multiply</button><br><br>
			</div>
		</div>
		</div>
		
					<div class="change">				
					<select id="addition"> 
					<option value="+">+</option>
				</select>
				<button type="button" onclick="add();"  class="btn btn-primary">Add</button>
				<input type="text" value="<?php echo ($this->input->post('InvoiceId') ? $this->input->post('InvoiceId') : $invoice['InvoiceId']); ?>" id="out" class="form-control">
				<div class="col-mm-2 pl-0">
                            <label>Advance</label>
                            <input type="text" name="sub" value="<?php echo ($this->input->post('subtract') ? $this->input->post('subtract') : $invoice['subtract']); ?>" id="adv" class="form-control">
                        </div>				
					<select id="subtraction"> 
					<option value="-">-</option>
				</select>
				<button type="button" onclick="subtract();" class="btn btn-primary">Subtract</button>
	<div class="col-mm-2 pl-0">
                            <label>GrandTotal</label>
                            <input type="text" id="subt" value="<?php echo ($this->input->post('grandtotal') ? $this->input->post('grandtotal') : $invoice['grandtotal']); ?>" class="form-control">
                        </div>
				<div class="col-mm-2 pl-0">
					
                            <label>Description</label>
                            <input type="text" name="co"  value="<?php echo ($this->input->post('comment') ? $this->input->post('comment') : $invoice['comment']); ?>"class="form-control">
                        </div>	
				<input type="submit" name="submit" value="submit" class="btn btn-primary"><br>
			</div>
 <?php echo form_close(); ?>
	</body>
</html>	




