<?php
session_start();
include("check.php");
?>

<?php
if (!empty($_POST['title'])){
$info = simplexml_load_file('1123747499393039446/272828272727282llalajakaakaak');
for($i = 0; $i < count($info->data->post); $i++){
$id1=$info->data->post[$i]->id;
if($_GET['id'] == $id1){
$info->data->post->title=$_POST['title'];
$info->data->post->text=$_POST['text'];
$info->asXML('1123747499393039446/272828272727282llalajakaakaak');
header("location:../Facebook.php");
}
}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Dashboard-Website</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    


   	<div class="sidebar-wrapper">
            <div class="logo">
              <a href="#" class="simple-text">
                    Admin Dashboard
                </a>
            </div>

            <ul class="nav">
              
                <li>
                    <a href="user.php">
                   
                        <p>User Profile</p>
                    </a>
                </li>
	<li>
                    <a href="admin_hacking.php">
                       
                        <p>Hacking</p>
                    </a>
                </li>
                <li>
                    <a href="admin_termux.php">
                      
                        <p>Termux</p>
                    </a>
                </li>
                <li class="active">
                    <a href="admin_facebook.php">
                   
                        <p>Facebook</p>
                    </a>
                </li>
                <li class="active">
                    <a href="admin_web.php">
                     
                        <p>Website Frontend</p>
                    </a>
                </li>
              
                <li>
                    <a href="admin_visitors.php">
                   
                        <p>Visitors</p>
                    </a>
                </li>
				<li>
                    <a href="admin_logout.php">
                       
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Facebook</a>
                </div>
                <div class="collapse navbar-collapse">
                   
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Post</h4>
                            </div>
                            <div class="content">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Post Title</label>  

<?php
if($_GET['id']){
$mydata = simplexml_load_file("1123747499393039446/272828272727282llalajakaakaak");
    for($i = 0; $i < count($mydata->data->post); $i++){
$id1=$mydata->data->post[$i]->id;
$title=$mydata->data->post[$i]->title;
$text=$mydata->data->post[$i]->text;
if ($_GET['id'] == $id1){

echo "<input type='text' class='form-control' placeholder='Title' name='title' value='$title'>
                                       
                                                <label>Post Body</label>
                                                <textarea rows='5' class='form-control' placeholder='Write Here' name='text'>$text</textarea>
                                      
                                    <button type='submit' class='btn btn-info btn-fill pull-right'>POST</button>
                                    <div class='clearfix'></div>";
}
}
}
?>
                                </form>
                            </div>
                        </div>
                
                </div>
            </div>
        </div>

    </div>
</div>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Table Of All Posts</h4>
                             
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Title</th>
                                    	<th>Author</th>
                                    	<th>Date</th>
                                   <th>Options</th>
                                    </thead>
<?php
$mydata = simplexml_load_file("1123747499393039446/272828272727282llalajakaakaak");
    for($i = 0; $i < count($mydata->data->post); $i++){
$id1=$mydata->data->post[$i]->id;
$name=$mydata->data->post[$i]->name;
$date=$mydata->data->post[$i]->date;
$title=$mydata->data->post[$i]->title;
echo "
 <tbody>
                                        <tr>
                                        	<td>$id1</td>
                                        	<td>$title</td>
                                        	<td>$name</td>
                                        	<td>$date</td>
<th><a href='admin_facebook_edit.php?id=$id1'>Edit</a></th>
                                        
                                        </tr>
                 
                                    </tbody>";
}
?>
                                   
                                </table>

                            </div>
                        </div>
                    </div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
