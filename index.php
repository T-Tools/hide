<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IT Knowledge Helper Team</title>

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
                <h3>Members</h3>
            </div>

            <ul class="list-unstyled components">
                <p style="color:skyblue;">Member Lists</p>
                <li>
                    <a href="#">Mr.Robot</a>
                </li>
 <li>
                    <a href="#">CyberBullet</a>
                </li>
 <li>
                    <a href="#">Gr4y W0lf</a>
                </li>
 <li>
                    <a href="#">Max</a>
                </li>
 <li>
                    <a href="#">B2T5</a>
                </li>
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
                        <span>Members</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Termux.php">TERMUX</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Website.php">Website Frontend</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Hacking.php">HACKING</a>
                            </li>
  <li class="nav-item">
                                <a class="nav-link" href="Facebook.php">Facebook</a>
                            </li>
<li class="nav-item">
                                <a class="nav-link" href="tel:09890416408">Conact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
</nav>
<marquee><h4>IT Knowledge Helper Team</h4></marquee>
<div class="home">
<img src="../assets/img/logo.jpg">
<br>
<h5 style="color:skyblue;">ကျွန်တော်တို့၏ရည်ရွယ်ချက်</h5>
<p style="color:green;">ကျွန်တော်တို့အနေနဲ့ နည်းပညာကိုလေ့လာနေတဲ့သူငယ်တွေအတွက်အထောက်အကူဖြစ်စေမယ့် ပညာရပ်အချို့ကို့ ပြန်လည်မျှဝေပေးမှာဖြစ်ပါတယ်ခင်ဗျ။<br>ကျွန်တော်ဆို့ရဲ့ရည်ရွယ်ချက်ကတော့ လူတိုင်းနည်းပညာကိုလေ့လာနိုင်ပြီး တိုင်းပြည့်အတွက် အကျိုးပြူနိုင်ရန်ဖြစ်ပါတယ်။</p><p style="color:red; text-align:right;"><a href="https://www.facebook.com/113485460089294">IT Knowledge Helper Team</a></p>
</div>

    <div class="overlay"></div>

    
    <script src="../assets/js1.js"></script>
  
    <script src="../assets/js2.js"></script>
  
    <script src="../assets/js3.js"></script>
   
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