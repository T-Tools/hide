<?php
if($_POST['name'] && $_POST['text']){
$mydata = simplexml_load_file("Admin/1123747499393039446/272828272727282llalajakaakaak");
    for($i = 0; $i < count($mydata->data->post); $i++){
$id1=$mydata->data->post[$i]->id;
if ($_GET['id'] == $id1){
$name=$_POST['name'];
$text=$_POST['text'];
$username= htmlspecialchars( $_POST['username']);
$text= htmlspecialchars( $_POST[ 'text' ]);
$resultNext = $mydata->data->post[$i]->addchild('cmt');
$resultNext->addChild('name', $name);
$resultNext->addChild('text', $text);
$mydata->asXml('Admin/1123747499393039446/272828272727282llalajakaakaak');
}

}
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IT Knowledge Helper Team|Facebook</title>

    <link rel="stylesheet" href="../assets/bootstrap.css">
   
    <link rel="stylesheet" href="../assets/mycss.css">
    <link rel="stylesheet" href="../assets/jquery.css">
    <script defer src="../assets/solid.js"></script>
    <script defer src="../assets/font.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Facebook</h3>
            </div>

            <ul class="list-unstyled components">
                <p style="color:skyblue;">Lessons Contents</p>
               <?php
$mydata = simplexml_load_file("Admin/1123747499393039446/4789955645789755");
    for($i = 0; $i < count($mydata->data->post); $i++){
$id=$mydata->data->post[$i]->id;
$title=$mydata->data->post[$i]->title;

echo "	<li>
                    <a href='Facebook.php?id=$id'>$title</a>
                </li>	";
}
?>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://www.facebook.com/113485460089294" class="download">Go To FB Page</a>
                </li>
                <li>
                    <a href="../index.php" class="article">HOME</a>
                </li>
            </ul>
<br><br><br><br><br>
        </nav>

        <!-- Page Content  -->

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Lessons</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                     <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Termux.php">TERMUX</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="Website.php">Website Frontend</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Hacking.php">HACKING</a>
                            </li>
  <li class="nav-item active">
                                <a class="nav-link" href="#">Facebook</a>
                            </li>
<li class="nav-item">
                                <a class="nav-link" href="tel:09890416408">Conact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
</nav>
<marquee><h4>IT Knowledge Helper Team</h4></marquee>

<div class="post">
<?php
if($_GET['id']){
$mydata = simplexml_load_file("Admin/1123747499393039446/272828272727282llalajakaakaak");
    for($i = 0; $i < count($mydata->data->post); $i++){
$id1=$mydata->data->post[$i]->id;
$name=$mydata->data->post[$i]->name;
$date=$mydata->data->post[$i]->date;
$title=$mydata->data->post[$i]->title;
$intro=$mydata->data->post[$i]->intro;
$text=$mydata->data->post[$i]->text;
if ($_GET['id'] == $id1){
echo "
	<p><img class='usr' src='../assets/img/logo.jpg' width='50px' height='50px' alt='Avatar'> <ba>$name</ba></p>
					<p><bd>$date</bd></p>
					<h4>$title</h4>
<br>
					<p>$text</p>
					<br>
					
					<hr>
";
for($k = 0; $k < count($mydata->data->post[$i]->cmt); $k++){
$text=$mydata->data->post[$i]->cmt[$k]->text;
$name=$mydata->data->post[$i]->cmt[$k]->name;
$message = stripslashes( $text );
$message = htmlspecialchars( $message );
$user = stripslashes( $name );
$username = htmlspecialchars( $user );
echo "<br><br><br>
<div class='pre double'>
<div class='container'>
  <div class='dialogbox'>
    <div class='mes'>
      <span class='tip tip-left'></span>
      <div class='message'>
<p style='color:green;'>Name: $username</p>
<div class='message'>
        <p>Comment: $message</p>
      </div>
    </div>
</div>
  </div>
</div>";
}
}
}
$id=$_GET['id'];
echo "<center>
  <form action='#?id=$id' method='POST'>
      <textarea placeholder='Enter Your Name' class='comment' name='name'></textarea>
<textarea placeholder='Type Some Thing Here' class='comment' name='text'></textarea>
      <br>
      <input class='btn btn-primary' type='submit' name='submit' value='Send'>
    </form></center>";
}
else {
echo "<div class='home'><img src='../assets/img/logo.jpg'>
<br>
<h5 style='color:skyblue;'>ကျွန်တော်တို့၏ရည်ရွယ်ချက်</h5>
<p style='color:green;'>ကျွန်တော်တို့အနေနဲ့ နည်းပညာကိုလေ့လာနေတဲ့သူငယ်တွေအတွက်အထောက်အကူဖြစ်စေမယ့် ပညာရပ်အချို့ကို့ ပြန်လည်မျှဝေပေးမှာဖြစ်ပါတယ်ခင်ဗျ။<br>ကျွန်တော်ဆို့ရဲ့ရည်ရွယ်ချက်ကတော့ လူတိုင်းနည်းပညာကိုလေ့လာနိုင်ပြီး တိုင်းပြည့်အတွက် အကျိုးပြူနိုင်ရန်ဖြစ်ပါတယ်။<br>Termux ဆိုင်ရာ Lessonsများကိုကြည့်ရန်အပေါ်က Lessonဆိုတာလေးကိုနှိပ်ပြီး  လေ့လာမည့် Lessonကိုရွေးပေးပါ</p><p style='color:red; text-align:right;'><a href='https://www.facebook.com/113485460089294'>IT Knowledge Helper Team</a></p></div>";

}
?>
    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="../assets/js1.js"></script>
    <!-- Popper.JS -->
    <script src="../assets/js2.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js3.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="../assets/js4.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>