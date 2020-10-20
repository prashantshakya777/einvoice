<html>
<body background="<?php echo base_url('/resources/img/wall.jpeg');?>"><br><br>

    <div class="col-md-12">	
            <?php echo form_open_multipart('user/add'); ?>
            <?php if($error = $this->session->flashdata('msg')){ ?>

		   <p style="color:white;font-size:20" align="center" ><?php
                if($error !=null){
                    foreach($error as $err) {
                    echo $err;
                } } ?></p>
                <?php } ?>
<div class="login-box">
<center><img src="<?php echo base_url('resources/img/avatar.png');?>" width=100 /><center>
		<div class="login-box-body">
            <form method="post" action="<?php echo base_url(); ?>login/login_validation">
                <h4 align="center"><?php
                echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                ?></h4>	
            <h1 align="ce" >User Registration<br></h1>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
                    <div class="form">
					<input type="text" name="FullName" value="<?php echo $this->input->post('FullName'); ?>" class="form-control" id="FullName" required="required" placeholder="FullName"/>
                     </div><br>
					 <input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" placeholder="Email"/>
                    <br><div class="form-group has-feedback">
                        <input type="password" name="Password" value="<?php echo $this->input->post('Password'); ?>" class="form-control" id="Password" required="required" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    	<br> <input type="file" name="userfile" id="Photo" required />	
					</div>
					
					<br>
			
                    <div>
                    <button type="submit" class="btn btn-success">
                        Register
                    </button>
					<a href="<?php echo base_url()?>Login/login" class="btn btn-primary">Login</a><br/>
                    <?php echo form_close(); ?>
                </div>
                </div>
         
            </div>
</form>
</div>
</div>
</div>

</body>
</html>
   