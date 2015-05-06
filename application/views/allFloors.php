<?php include 'header.php' ?>

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
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">SmartHome</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
<<<<<<< HEAD
font-size: 16px;">&nbsp; <a href="<?php echo base_url() ?>index.php/login/logout_user" class="btn btn-danger square-btn-adjust">Logout</a>  </div>
=======
font-size: 16px;"> Last access : May 2015 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
>>>>>>> origin/master
        </nav>   
                   <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
<<<<<<< HEAD
                    	<img src="<?php echo base_url(); ?>assets/img/casa.jpg" class="user-image img-responsive"/>
=======
                    	<img src="<?php echo base_url(); ?>assets/img/find_user.png" class="user-image img-responsive"/>
>>>>>>> origin/master
					</li>
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/main/show_main"><i class="fa fa-home fa-3x"></i>Welcome</a>
                    </li>
					<?php if ($is_admin) : ?>
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/newUser/show_newUser"><i class="fa fa-users fa-3x"></i>New user</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/adminHouse/show_adminHouse">
                            <i class="fa fa-edit fa-3x"></i>Admin home
                        </a>
                    </li>
				    <li>
                        <a class="active-menu"  href="<?php echo base_url(); ?>index.php/control/allFloors">
                            <i class="fa fa-lightbulb-o fa-3x"></i>Control Home
                        </a>
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
                     <h2>Take the control of your home!</h2>   
                        <h5>Click on one of the floors to see all their rooms available!</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
                <h2><?php echo $title ?></h2>
                <hr />
                
                <div class="row">
                    
                <?php foreach ($floors as $floors_item): ?>
                <a href="<?php echo base_url(); ?>index.php/control/viewRooms/<?php echo $floors_item['id']; ?>">
                <div class="col-md-4 col-sm-4">
                    
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
<<<<<<< HEAD
                            <i class="fa fa-home fa-5x"></i>
                            <h3><?php echo "Level: ".$floors_item['level'] ?></h3>
=======
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3><?php echo "Nivel: ".$floors_item['level'] ?></h3>
>>>>>>> origin/master
                        </div>
                        <div class="panel-footer back-footer-green">
                            <?php echo $floors_item['name'] ?>
                        </div>
                    </div>
            
                </div>
                </a>
                <?php endforeach ?>
                    
                </div>

              
                
                <!-- /. ROW  -->
               
                <!-- /. ROW  -->
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    
</body>
</html>