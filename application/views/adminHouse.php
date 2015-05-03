<?php include 'header.php' ?>

    
<script>
    function removeRoom(){
    var id = "room"+event.target.id;
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
    }
    
    function removeFloor(){
    var id = "mainFloor"+event.target.id;
    return (elem=document.getElementById(id)).parentNode.removeChild(elem);
    }
    
    function addRoom(){
        if (typeof idRoom !== 'undefined') {
            idRoom++;
        }else{
            idRoom = 0;
        }
        var floor = document.getElementById("floor"+event.target.id);
        var roomColumn = document.createElement("div");
        roomColumn.className = "col-md-3 col-sm-3";
        id=event.target.id+"-"+idRoom;
        roomColumn.id="room"+id;
        floor.appendChild(roomColumn);
        var roomPanel = document.createElement("div");
        roomPanel.className = "panel panel-success";
        roomColumn.appendChild(roomPanel);
        var roomTitle = document.createElement("div");
        roomTitle.className = "panel-heading";
        var node = document.createTextNode("Room "+idRoom);
        roomTitle.appendChild(node);
        roomPanel.appendChild(roomTitle);
        var removeButton = document.createElement("button");
        removeButton.id=id;
        removeButton.className = "btn btn-success";
        removeButton.style.margin = '0em 0em 0em 10em';
        removeButton.onclick = function(){removeRoom();};
        var buttonText = document.createTextNode("X");
        removeButton.appendChild(buttonText);
        roomTitle.appendChild(removeButton);
        var roomBody = document.createElement("div");
        roomBody.className = "panel-body";
        roomPanel.appendChild(roomBody);
        var roomImg = document.createElement("img");
        roomImg.setAttribute("src", "http://hmsdemo.dhru.com/images/gallery/room/delux/SetHeight800-Deluxe-Room-Bedroom.jpg");
        roomImg.style.height = '10em';
        roomImg.style.width = '10em';
        roomImg.style.margin = '0em 0em 0em 3em';
        roomBody.appendChild(roomImg);
        
    }
    function addFloor() {
    if (typeof floorNumber !== 'undefined') {
        floorNumber++;
    }else{
        floorNumber = 0;
    }
    
    if (typeof idFloor !== 'undefined') {
        idFloor++;
    }else{
        idFloor = 0;
    }
    var floor = document.createElement("div");
    floor.className = "panel panel-default";
    floor.id="mainFloor"+idFloor;
    floor.style.margin= '2.5em 2.5em 2.5em 2.5em';
    var floorTitle = document.createElement("div");
    floorTitle.className = "panel-heading";
    var node = document.createTextNode("Floor "+floorNumber);
    floorTitle.appendChild(node);
    var addButton = document.createElement("button");
    addButton.className = "btn btn-success";
    var buttonText = document.createTextNode("+ Add Room");
    addButton.appendChild(buttonText);
    addButton.style.margin = '0em 0em 0em 60em';
    addButton.id = idFloor;
    addButton.onclick = function(){addRoom();};
    floorTitle.appendChild(addButton);
    var removeButton = document.createElement("button");
    removeButton.className = "btn btn-danger";
    var removeButtonText = document.createTextNode("- Remove Floor");
    removeButton.appendChild(removeButtonText);
    removeButton.style.margin = '0em 0em 0em 2em';
    removeButton.id = idFloor;
    removeButton.onclick = function(){removeFloor();};
    floorTitle.appendChild(removeButton);
    floor.appendChild(floorTitle);
    var floorBody = document.createElement("div");
    floorBody.className = "panel-body";
    floor.appendChild(floorBody);
    var floorRow = document.createElement("div");
    floorRow.className = "row";
    floorRow.style.margin = '0em 0.5em 0.5em 0.5em';
    floorRow.id = "floor"+idFloor;
    floor.appendChild(floorRow);
    var element = document.getElementById("house");
    element.appendChild(floor);
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
                <a class="navbar-brand" href="/smartHome/index/index">My House</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
                   <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
                    	<img src="/part_one/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="http://localhost/part_one/index.php/main/show_main"><i class="fa fa-home fa-3x"></i>Welcome</a>
                    </li>
					<?php if ($is_admin) : ?>
                    <li>
                        <a  href="http://localhost/part_one/index.php/newUser/show_newUser"><i class="fa fa-users fa-3x"></i>New user</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="http://localhost/part_one/index.php/adminHouse/show_adminHouse"><i class="fa fa-edit fa-3x"></i>Admin home</a>
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
                            My House 
                            <a href="#" style="margin-left: 75em;" class="btn btn-success" onclick="addFloor()">+  Add Floor</a>
                        </div>
                         
                        <div class="panel-body">
                            <div class="row" id="house">
                            </div>
                        </div>      
                    </div>
                     <!-- End Form Elements -->
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
    
<?php include 'footer.php' ?>