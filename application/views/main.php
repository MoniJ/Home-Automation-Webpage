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
                <a class="navbar-brand"  href="show_main">SmartHome</a> 
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
                        <a class="active-menu"  href="<?php echo base_url(); ?>index.php/main/show_main"><i class="fa fa-home fa-3x"></i>Welcome</a>
                    </li>
					<?php if ($is_admin) : ?>
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/newUser/show_newUser"><i class="fa fa-users fa-3x"></i>New user</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/adminHouse/show_adminHouse"><i class="fa fa-edit fa-3x"></i>Admin home</a>
                    </li>
				    <li>
                        <a   href="<?php echo base_url(); ?>index.php/control/allFloors"><i class="fa fa-lightbulb-o fa-3x">                           </i>Control Home</a>
                    </li>
					<?php else : ?>
              		<li>
                        <a  href="<?php echo base_url(); ?>index.php/control/allFloors"><i class="fa fa-lightbulb-o fa-3x"></i>Control home</a>
                    </li>
            		<?php endif; ?>
					</ul>
               <br/>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BinaryCart -Demo - Left -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-9366031574447333"
     data-ad-slot="7367196015"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome, </h2>   
                        <h5><?php echo $name ?> , Love to see you back. </h5>
                    </div>
                </div>              
                </hr>
                <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>SmartHome</h1>
                        <p>Our project is made to provide to the homeowner an easy way to controll every ligth in their house by only clicking a button. It also helps to make the saving energy process a little less complicated by letting you identify what lights you leave turned on so you can turn them off while you are away.</p>

                    </div>
                </div>
            </div>
                         <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Project Features
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Forms</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            This functonality can be found in many sections of the page. Login, new user registration, profile, for adding rooms, etc.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">List and create records</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
                                           We create new records when registering a new user or adding a floor, a room or a device. And we list when user looks for the devices registered before.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">AJAX</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We used AJAX for profile editing, also for deleting rooms, floors and devices. We used jQuery in a lot of places of the webpage to make animations.
                                        </div>
                                    </div>
                                </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">MVC</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            To be sure that we were using the MVC structure correctly we decide to implement our project with a PHP framework. We used CodeIgniter because it was the easiest to install in the Raspberry.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Use cases
                        </div>
                        <div class="panel-body">
                            <img src="<?php echo base_url() ?>/assets/img/casosdeusoFinal.jpg" class="img-responsive" style="display: block;
    margin-left: auto;
    margin-right: auto"/>
                        </div>
                        <div class="panel-footer">
                           <br>
                        </div>
                    </div>
                </div>
     
            </div>
            
            <div class="row">
               <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Team
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4 col-sm-4">
                                <div class="well">
                                    <h4>Gabriel Reséndiz</h4>
                                    <h5>A01201944</h5>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="well">
                                    <h4>Mónica Fernanda Jiménez</h4>
                                    <h5>A01205728</h5>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="well">

                                    <h4>Mariana Prado Ayala</h4>
                                    <h5>A01065658</h5>

                                </div>
                            </div>
                    </div>
                    </div>
                    </div>
                 
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

<?php include 'footer.php' ?>