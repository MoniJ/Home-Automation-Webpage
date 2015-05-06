<?php include 'header.php' ?>

<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?= site_url('/main/show_main'); ?>">SmartHome</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url() ?>/index.php/login/logout_user" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
            <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
                    	<img src="<?php echo base_url(); ?>assets/img/casa.jpg" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/main/show_main"><i class="fa fa-home fa-3x"></i>Welcome</a>
                    </li>
					<?php if ($is_admin) : ?>
                    <li>
                        <a class="active-menu"  href="<?php echo base_url(); ?>index.php/newUser/show_newUser"><i class="fa fa-users fa-3x"></i>New user</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/adminHouse/show_adminHouse"><i class="fa fa-edit fa-3x"></i>Admin home</a>
                    </li>
				    <li>
                        <a   href="<?php echo base_url(); ?>index.php/control/allFloors"><i class="fa fa-lightbulb-o fa-3x">                           </i>Control Home</a>
                    </li>
					<?php else : ?>
              		<li>
                        <a  href="tab-panel.html"><i class="fa fa-lightbulb-o fa-3x"></i>Control home</a>
                    </li>
            		<?php endif; ?>
					</ul>
               <br/>


            </div>
            
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Register new user </h2>   
                        <h5>Hi, <?php echo $name ?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if ( isset($saved) && $saved ): ?>
									<div class="alert-success">
									<a class="close" data-dismiss="alert" href="#">×</a>
									Success!! The user was correctly inserted
									</div>
									<?php endif; ?>
                                    <h3>New User Details</h3>
                                
									<?php echo form_open('newUser/create_new_user') ?>
                                    
                      				<form role="form">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="firstName" id="firstName"/>
											<label>Last Name</label>
											<input type="text" class="form-control" name="lastName" id="lastName"/>
											<label>Email</label>
                                            <?php echo form_error('email'); ?>
											<input type="text" class="form-control" name="email" id="email"/>
											<label>Password</label>
                                            <?php echo form_error('password'); ?>
											<input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>"/>
											<label>Confirm Password</label><?php echo form_error('password2'); ?>
											<input type="password" class="form-control" name="password2" id="password2"/>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="isAdmin" name="isAdmin" />Is an admin?
                                                </label>
                                            </div>
											<button type="submit" name="submit" class="btn btn-primary">Create</button>
                                        	<button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
									</form>
									
    							</div>
                            </div>
                        </div>
                    </div>         
    			</div>
            </div>
        </div>

<?php include 'footer.php' ?>