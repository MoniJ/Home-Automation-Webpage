<?php include 'header.php' ?>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.js"></script>
<script type="text/javascript">
		$(document).ready(function(){

			$('input').blur(function(){
				var field = $(this);
				var parent = field.parent().attr('id'); //Contiene el div id
				if($('#'+parent).find(".ok").length){ //Si encuentra una imagen de ok en el div
					$('#'+parent+' .ok').remove(); //Quitar imagen
					$('#'+parent+' .loader').remove();
					$('#'+parent).append('<div class="loader"><img src="<?php echo base_url();?>/assets/img/loader.gif"/>Modificando</div>').fadeIn('slow');//Insert imagen de loader
				}else{
					if($('#'+parent).find(".loader").length){
						$('#'+parent+' .loader').remove();
						$('#'+parent).append('<div class="loader"><img src="<?php echo base_url();?>/assets/img/loader.gif"/>Modificando</div>').fadeIn('slow');
					}
					else{
						$('#'+parent).append('<div class="loader"><img src="<?php echo base_url();?>/assets/img/loader.gif"/>Modificando</div>').fadeIn('slow');
					}
				}

				var dataString = 'value='+$(this).val()+'&field='+$(this).attr('name');
				$.ajax({
					type: "POST",
					url: "<?= site_url('/profile/edit_profile'); ?>",//Modificar perfil
					data: dataString,
					success: function(data) {
						field.val(data);
						$('#'+parent+' .loader').fadeOut(function(){//cargar imagen de ok
							$('#'+parent).append('<div class="ok"><img src="<?php echo base_url();?>/assets/img/ok.png"/>Listo</div>').fadeIn('slow');
						});

					}
				});
			});
		});
		</script>
</head>
<body>


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
                    		<a href="<?= site_url('/profile/show_profile'); ?>"><img src="<?php echo base_url();?>/assets/img/find_user.png" class="user-image img-responsive"/></a>
					</li>
                    <li>
                        <a href="<?= site_url('/main/show_main'); ?>"><i class="fa fa-home fa-3x"></i>Welcome</a>
                    </li>
					<?php if ($is_admin) : ?>
                     <li>
                        <a href="<?= site_url('/newUser/show_newUser'); ?>"><i class="fa fa-users fa-3x"></i>New User</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-edit fa-3x"></i>Admin home</a>
                    </li>
				    <li>
                        <a   href="chart.html"><i class="fa fa-lightbulb-o fa-3x"></i>Control Home</a>
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
                     <h2>Profile</h2>   
                        <h5><?php echo $name ?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit profile
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Profile: </h3>
									<?php //echo form_open('profile/edit_profile') ?>
                      				<form id ="ficha" role="form" method="post">
                                            <div id="firstName">
                                            <label>First Name </label>
                                            <input type="text" class="form-control" name="firstName" id="firstName" value="<?= $firstName ?>"/>
                                                </div>
                                        <div id="lastName">
											<label>Last Name</label>
											<input type="text" class="form-control" name="lastName" id="lastName" value="<?= $lastName ?>"/>
                                            </div>
                                        <div id="email">
											<label>Email</label>
                                            
											<input type="text" class="form-control" name="email" id="email" value="<?= $email ?>"/>
                                            </div>
                                        <div id="password">
											<label>Password</label>
											<input type="password" class="form-control" name="password" id="password" value="<?= $password ?>"/>
                                                                                                            </div>
											
                                            
										<!--	<button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        	<button type="reset" class="btn btn-default">Cancel</button>-->
                                        <br><br><br>
                                        </form>
                                        </div>
									
    							</div>
                            </div>
                        </div>
                    </div>         
    			</div>
            </div>
        </div>


<?php include 'footer.php' ?>
