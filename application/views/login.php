<?php include 'header.php' ?>	
	<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> SmartHome : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
								<?php if (isset($error) && $error): ?>
								  <div class="alert alert-error">
									<a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
								  </div>
								<?php endif; ?>

								<?php echo form_open('login/login_user') ?>
                                <form role="form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" id="email" class="form-control" name="email"placeholder="Your Email " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Your Password" />
                                        </div>
                                  

									<button type="submit" name="submit" class="btn btn-info btn-block">Log in</button>
                                    <hr />
                          
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
  </div>

<?php include 'footer.php' ?>