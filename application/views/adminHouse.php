<?php include 'header.php' ?>
<?php $this->load->helper('url'); ?>
    
<script>
    function removeRoom(){
    var id = "room"+event.target.id;
    var controller = 'adminHouse';
    var base_url = '<?php echo site_url(); ?>';
    var jsonString = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_room',
            data: {id : jsonString}, 
            cache: false,

            success: function(result){
            }
        });
    var jsonStringDevice = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_devices',
            data: {id : jsonStringDevice}, 
            cache: false,

            success: function(result){
            }
        });
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
    }
    
    function removeDevice(){
    var id = "device"+event.target.id;
    var controller = 'adminHouse';
    var base_url = '<?php echo site_url(); ?>';
    var jsonString = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_device',
            data: {id : jsonString}, 
            cache: false,

            success: function(result){
            }
        });
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
    }
    
    function addRoomNew(){
    var id = event.target.id;
    var roomInfo = document.getElementById("roomInfo");
    roomInfo.value=id; 
    }
    
    function addDeviceNew(){
    var id = event.target.id;
    var name = event.target.name;
    var deviceInfo = document.getElementById("deviceInfo");
    deviceInfo.value=id; 
    var deviceInfoFloor = document.getElementById("deviceInfoFloor");
    deviceInfoFloor.value=name; 
    }
    
    function removeFloor(){
    var id = "mainFloorRec"+event.target.id+"ba";
    var controller = 'adminHouse';
    var base_url = '<?php echo site_url(); ?>';
    var jsonString = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_floor',
            data: {id : jsonString}, 
            cache: false,

            success: function(result){
            }
        });
        
    var jsonStringRoom = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_rooms',
            data: {id : jsonStringRoom}, 
            cache: false,

            success: function(result){
            }
        });
    
    var jsonStringDevice = JSON.stringify(event.target.id);
       $.ajax({
            type: "POST",
            url: base_url + '/' + controller + '/remove_devices_floor',
            data: {id : jsonStringDevice}, 
            cache: false,

            success: function(result){
            }
        });
        
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
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
                <a class="navbar-brand" href="/smartHome/index/index">SmartHome</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url() ?>index.php/login/logout_user" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class="active-menu"  href="<?php echo base_url(); ?>index.php/adminHouse/show_adminHouse"><i class="fa fa-edit fa-3x"></i>Admin home</a>
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
                     <h2>Set House</h2>   
                        <h5>Set the rooms in your house.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>My House</h3>
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
                              + Add Floor
                            </button>
                        </div>
                         
                        <div class="panel-body">
                            <div class="row" id="house">
                                <?php foreach ($floors as $floors_item): ?>
                                        <div class="panel panel-default" style="margin: 2.5em 2.5em 2.5em 2.5em" id="mainFloorRec<?php echo $floors_item['id'] ?>ba">
                                            <div class="panel-heading">
                                                <h4><?php echo $floors_item['name'] ?></h4>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#roomModal" id="<?php                                                    echo $floors_item['id'] ?>" onclick="addRoomNew()">
                                                    +Add Room</button>
                                                <button type="button" class="btn btn-danger" onclick="removeFloor()" id="<?php echo $floors_item['id'] ?>" style="margin: 0em 0em 0em 2em">- Remove 
                                                    Floor</button>
                                                
                                            </div>
                                            <div class="panel-body" style="margin: 0em 0.5em 0.5em 0.5em" id="floorRec<?php echo $floors_item['id'] ?>ba">
                                                <?php foreach ($rooms as $rooms_item): ?>
                                                    <?php if ($rooms_item['idFloor'] == $floors_item['id']) {
                                                        echo "<div class=\"col-md-6 col-sm-6\" id=\"room";
                                                        echo $rooms_item['id'];
                                                        echo "\">";
                                                        echo "<div class=\"panel panel-success\">";
                                                        echo "<div class=\"panel-heading\">";
                                                        echo "<h4>";
                                                        echo $rooms_item['name'];  
                                                        echo "</h4>";
                                                        echo "<button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#deviceModal\" id=\"";
                                                        echo $rooms_item['id'];
                                                        echo"\" name=\"";
                                                        echo $rooms_item['idFloor'];
                                                        echo "\" onclick=\"addDeviceNew()\">+ Add Device</button>";
                                                        echo "<button type=\"button\" class=\"btn btn-danger\" style=\"margin: 0em 0em 0em 1em\" id=\"";
                                                        echo $rooms_item['id'];
                                                        echo"\" onclick=\"removeRoom()\">- Remove Room</button>";
                                                        echo "</div>";
                                                        echo "<div class=\"panel-body\" style=\"margin: 0em 0.5em 0.5em 0.5em\">";
                                                        foreach ($devices as $devices_item):
                                                        if ($devices_item['idRoom'] == $rooms_item['id']){
                                                        echo "<div class=\"col-md-6 col-sm-6\" id=\"device";
                                                        echo $devices_item['id'];
                                                        echo "\">";
                                                        echo "<div class=\"panel panel-success\">";
                                                        echo "<div class=\"panel-heading\">";
                                                        echo "<button type=\"button\" class=\"btn btn-success\" style=\"margin: 0em 1em 0em 0em\" id=\"";
                                                        echo $devices_item['id'];
                                                        echo"\" onclick=\"removeDevice()\">X</button>";
                                                        echo $devices_item['name'];  
                                                        echo "</div>";
                                                        echo "</div>";  
                                                        echo "</div>";
                                                        }
                                                        endforeach;
                                                        echo "</div>";  
                                                        echo "</div>";  
                                                        echo "</div>"; 
                                                    }?>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                <?php endforeach ?>
                            </div>
                        </div>      
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                 
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Floor Information</h4>
                            </div>
                            <div class="modal-body">
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open('adminHouse/create_new_floor') ?>
                                <form role="form">
                                    <div class="form-group">
                                        <label>Enter the floor level (it must be a number)</label><br>
                                        <input class="form-control" type="number" name="level" min="0" max="200" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter a name for the floor</label>
                                        <input class="form-control" name="name" required/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-primary">Add Floor</button>
                                    </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                   
                 <div class="modal fade" id="roomModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Room Information</h4>
                            </div>
                            <div class="modal-body">
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open('adminHouse/create_new_room') ?>
                                <form role="form">
                                    <div class="form-group">
                                        <label>Enter a name for the room</label>
                                        <input class="form-control" name="name" required/>
                                        <input class="form-control" name="idFloor" id="roomInfo" style="display: none;"
                                               required/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-primary" onclick="addFloor()">Add Room</button>
                                    </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="deviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Device Information</h4>
                            </div>
                            <div class="modal-body">
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open('adminHouse/create_new_device') ?>
                                <form role="form">
                                    <div class="form-group">
                                        <label>Device name</label>
                                        <input class="form-control" name="name" required/>
                                        <label>Device Identification Number</label>
                                        <input class="form-control" name="idNumber" required/>
                                        <input class="form-control" name="idRoom" id="deviceInfo" style="display: none;"
                                               required/>
                                        <input class="form-control" name="idFloor" id="deviceInfoFloor" style="display: none;"
                                               required/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-primary">Add Device</button>
                                    </div>
                              </form>
                            </div>
                        </div>
                    </div>
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
