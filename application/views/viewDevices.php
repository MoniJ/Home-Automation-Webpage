<?php include 'header.php' ?>
<?php $this->load->helper('url'); ?>

<script>
    function turnOn(){
    var base_url = '<?php echo site_url(); ?>';
    var idDev = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/commands/turnOn",
            data: {id : idDev}, 
            cache: false,

            success: function(result){
            }
        });
    }
    
    function turnOff(){
    var base_url = '<?php echo site_url(); ?>';
    var idDev = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/commands/turnOff",
            data: {id : idDev}, 
            cache: false,

            success: function(result){
            }
        });
    }
    
    function dimmer(){
    var base_url = '<?php echo site_url(); ?>';
    var idDev = JSON.stringify(event.target.id);
    var level = JSON.stringify(event.target.value);
       $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/commands/dimmer",
            data: {id : idDev, level : level}, 
            cache: false,

            success: function(result){
            }
        });
    }
    
</script>

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
font-size: 16px;">&nbsp; <a href="<?php echo base_url() ?>index.php/login/logout_user" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <h5>Switch On/Off or Dim all your devices!</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
                <h2><?php echo $title ?></h2>
                <hr />
                
                <div class="row">
                    
                <?php foreach ($devices as $devices_item): ?>
               
                <div class="col-md-4 col-sm-4">
                    
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-lightbulb-o fa-5x"></i>
                            <h3><?php echo $devices_item['name'] ?></h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            <button id="<?php echo $devices_item['idNumber'] ?>" class="btn btn-default" onclick="turnOn()">On</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="<?php echo $devices_item['idNumber'] ?>" class="btn btn-primary" onclick="turnOff()">Off</button>
                            <br>
                            <br>
                            <input type="range" id="<?php echo $devices_item['idNumber'] ?>" onchange="dimmer()" value="0" min="0" max="10" step="1"  />
                        </div>
                    </div>
                </div>
            
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