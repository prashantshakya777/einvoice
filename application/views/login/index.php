
<html>
<head>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="<?php echo base_url('/resources/img/wall.jpeg');?>"><br><br>	
<h1 align="center" style="color:white;">e-रसिद</h1>


<div class="login-box">
		<div class="login-box-body">
            <form method="post" action="<?php echo base_url(); ?>login/login_validation">
                <h4 align="center"><?php
                echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                ?></h4>	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
                  
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="Email" required="required">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>
                    <div class="form-group has-feedback">
                        <input class="form-control" type="password" name="password" placeholder="Password" required="required">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div><br>
				
                   
                        <button class="btn btn-primary">
                            Login</button> 
						<a href="<?php echo base_url()?>user/add" class="btn btn-primary">Register</a><br/>
                    </div>
                </div>
         
            </div>
</form>
</div>
</div>
</div>
</body>
</html>