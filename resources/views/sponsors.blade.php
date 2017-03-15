<?php
session_start();
$log=0;
if(isset($_SESSION['user'])){
    $log=1;
}
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Sponsers</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{url('public/css/sponsors.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script src="{{url('public/js/pace.js')}}"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    <link rel="{{url('public/css/nav.css')}}">
</head>

<body>
<div class="preloader"></div>
<nav class="navbar navbar-inverse navbar-fixed-top animate"   style="background-image:none;background-color:#15151f">
    <div class="container navbar-more visible-xs">
        <ul class="myMenu nav navbar-nav ">
            <li>
                <a href="{{url('/')}}">
                    <span class="menu-icon fa fa-home"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="{{url('/')}}#schedule">
                    <span class="menu-icon fa fa-calendar"></span>
                    Schedule
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-download"></span>
                    Downloads
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <span class="menu-icon fa fa-fighter-jet"></span>
                    Our Sponsers
                </a>
            </li>
            <?php if($log==0){ ?>
            <li>
                <a href="{{url('/login')}}">
                    <span class="menu-icon fa fa-sign-in"></span>
                    Login/Register
                </a>
            </li>
            <?php } ?>
            <?php if($log==1){ ?>
            <li>
                <a href="{{url('/profile')}}">
                    <span class="menu-icon fa fa-user"></span>
                    Profile
                </a>
            </li>
            <li>
                <a href="{{url('/logout')}}">
                    <span class="menu-icon fa fa-sign-out"></span>
                    Logout
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="container">
        <div class="navbar-header hidden-xs">
            <a class="navbar-brand" href="#">YA&#928;T&#915AG&#931;&#928;&#931;</a>
        </div>
        <ul class="myMenu nav navbar-nav navbar-right mobile-bar">
            <li class="hidden-xs">
                <a href="{{url('/')}}">
                    <span class="menu-icon fa fa-home"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="{{url('/')}}#aboutus">
                    <span class="menu-icon fa fa-info"></span>
                    About Us
                </a>
            </li>
            <li>
                <a href="{{url('/')}}#events">
                    <span class="menu-icon fa fa fa-flag"></span>
                    Events
                </a>
            </li>
            <li class="hidden-xs">
                <a href="{{url('/')}}#schedule">
                    <span class="menu-icon fa fa-calendar"></span>
                    Schedule
                </a>
            </li>
            <li>
                <a href="{{url('/')}}#contactus">
                    <span class="menu-icon fa fa-phone"></span>
                    <span class="hidden-xs">Contact Us</span>
                    <span class="visible-xs">Contact</span>
                </a>
            </li>
            <li class="hidden-xs">
                <a href="#">
                    <span class="menu-icon fa fa-download"></span>
                    Downloads
                </a>
            </li>
            <li class="hidden-xs">
                <a href="#">
                    <span class="menu-icon fa fa-fighter-jet"></span>
                    Our Sponsers
                </a>
            </li>
            <?php if($log==0){ ?>
            <li class="hidden-xs">
                <a href="{{url('/login')}}">
                    <span class="menu-icon fa fa-sign-in"></span>
                    Login/Register
                </a>
            </li>
            <?php } ?>
            <?php if($log==1){ ?>
            <li class="hidden-xs">
                <a href="{{url('/profile')}}">
                    <span class="menu-icon fa fa-user"></span>
                    Profile
                </a>
            </li>
            <li class="hidden-xs">
                <a href="{{url('/logout')}}">
                    <span class="menu-icon fa fa-sign-out"></span>
                    Logout
                </a>
            </li>
            <?php } ?>
            <li class="visible-xs">
                <a href="#navbar-more-show">
                    <span class="menu-icon fa fa-bars"></span>
                    More
                </a>
            </li>
        </ul>
    </div>
</nav>
<div style="margin-top: 50px;" class="container">
    <h1 class="w3-center">Our Sponsors</h1>
    <div class="section-title">
        <h2>TITLE SPONSOR</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("/public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/iste.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/kl.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>

    <div class="section-title">
        <h2>EDUCATION PARTNER</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>

    <div class="section-title">
        <h2>ASSOCIATE SPONSOR</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/toi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/hindu.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/toi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/toi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>
    <div class="section-title">
        <h2>SOCIAL PARTNER</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/f.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/fm.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/ln.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/tw.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>
    <div class="section-title">
        <h2>BANKING PARTNER</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>
    <div class="section-title">
        <h2>FOOD PARTNER</h2>
        <h4></h4>
    </div>
    <section class="row breath planpricing">

        <div class="col-md-3">
            <div class="pricing color1">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color2">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <div class="pricing color3">
                <div class="planname">CSI</div>
                <div class="price"><img src="{{url("public/images/csi.png")}}"></div>
                <div class="billing">computer society of india</div>
            </div><! --/pricing -->
        </div><! --/col-md-4-->
    </section>


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
            event.preventDefault();
            $('body').toggleClass('navbar-more-show');
            if ($('body').hasClass('navbar-more-show'))	{
                $('a[href="#navbar-more-show"]').closest('li').addClass('active');
            }else{
                $('a[href="#navbar-more-show"]').closest('li').removeClass('active');
            }
            return false;
        });
    });
</script>

</body>
</html>
