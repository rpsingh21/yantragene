<?php
    session_start();
    $log=0;
    if(isset($_SESSION['user'])){
        $log=1;
    }
    $i=1;
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .pre{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background:#fff;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        $(window).load(function() {
            $(".pre").fadeOut("slow");;
        });

    </script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aclonica" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.fullpage/2.9.2/jquery.fullpage.min.css">
    <link rel="stylesheet" href="http://localhost/yantragene/public/yantraPublic/css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://localhost/yantragene/public/yantraPublic/css/styleCopy.css">
    <!-- Resource style -->
    <link rel="stylesheet" href="http://localhost/yantragene/public/yantraPublic/css/contact-buttons.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/yantragene/public/yantraPublic/css/normalize.css" >
    <link rel="stylesheet" type="text/css" href="http://localhost/yantragene/public/yantraPublic/css/overlay.css" >
    <link rel="stylesheet" type="text/css" href="http://localhost/yantragene/public/yantraPublic/css/component.css" >
    <link rel="stylesheet" type="text/css" href="http://localhost/yantragene/public/yantraPublic/css/componentMinimalForm.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/yantragene/public/yantraPublic/css/componentMinimalForm.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>YANTRAGENE</title>
    <link rel="stylesheet" href="http://localhost/yantragene/public/yantraPublic/css/nav.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/yantragene/public/yantraPublic/css/notyf.min.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app = "yantrageneWebApp" ng-controller = "yantrageneController">
<div class="pre">Yantragene</div>
<div id="particles-js"></div>
<nav class="navbar navbar-inverse navbar-fixed-top animate"   style="background-image:none;background-color:#15151f">
    <div class="container navbar-more visible-xs">
        <ul class="myMenu nav navbar-nav ">
            <li data-menuanchor="home">
                <a href="#home">
                    <span class="menu-icon fa fa-home"></span>
                    Home
                </a>
            </li>
            <li data-menuanchor="schedule">
                <a href="#schedule">
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
                <a href="gallary">
                    <span class="menu-icon fa fa-picture-o"></span>
                    gallary
                </a>
            </li>
            <li>
                <a href="/sponsors">
                    <span class="menu-icon fa fa-fighter-jet"></span>
                    Our Sponsers
                </a>
            </li>
            <?php if($log==0){ ?>
            <li>
                <a href="login">
                    <span class="menu-icon fa fa-sign-in"></span>
                    Login/Register
                </a>
            </li>
            <?php } ?>
            <?php if($log==1){ ?>
            <li>
                <a href="profile">
                    <span class="menu-icon fa fa-user"></span>
                    Profile
                </a>
            </li>
            <li>
                <a href="logout">
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
            <li data-menuanchor="home"  class="hidden-xs">
                <a href="#home">
                    <span class="menu-icon fa fa-home"></span>
                    Home
                </a>
            </li>
            <li data-menuanchor="aboutus">
                <a href="#aboutus">
                    <span class="menu-icon fa fa-info"></span>
                    About Us
                </a>
            </li>
            <li data-menuanchor="events">
                <a href="#events">
                    <span class="menu-icon fa fa fa-flag"></span>
                    Events
                </a>
            </li>
            <li data-menuanchor="schedule" class="hidden-xs">
                <a href="#schedule">
                    <span class="menu-icon fa fa-calendar"></span>
                    Schedule
                </a>
            </li>
            <li data-menuanchor="contactus">
                <a href="#contactus">
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
                <a href="gallary">
                    <span class="menu-icon fa fa-picture-o"></span>
                    gallary
                </a>
            </li>
            <li class="hidden-xs">
                <a href="sponsors">
                    <span class="menu-icon fa fa-fighter-jet"></span>
                    Our Sponsers
                </a>
            </li>
            <?php if($log==0){ ?>
            <li class="hidden-xs">
                <a href="login">
                    <span class="menu-icon fa fa-sign-in"></span>
                    Login/Register
                </a>
            </li>
            <?php } ?>
            <?php if($log==1){ ?>
            <li class="hidden-xs">
                <a href="profile">
                    <span class="menu-icon fa fa-user"></span>
                    Profile
                </a>
            </li>
            <li class="hidden-xs">
                <a href="logout">
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
<div id="fullpage">
    <div class="section">
        <div class=" w3-center">
            <!--	<p class="quote">"Be more dedicated to making solid achievements than in running after swift but synthetic happiness."</p>
               -->	<br>
            <img class="grow" src="http://localhost/yantragene/public/yantraPublic/img/csi_logo.png">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <img class="grow" src="http://localhost/yantragene/public/yantraPublic/img/fgiet_logo.png">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <img class="grow" src="http://localhost/yantragene/public/yantraPublic/img/iste_logo.png">
            <br><br>
            <a style="text-decoration:none;" class="link link--kukuri" href="#" data-letters="YA&#928;T&#915AG&#931;&#928;&#931;">YA&#928;T&#915AG&#931;&#928;&#931;</a>
            <p class="typewriter">EAT CODE SLEEP REPEAT</p>
            <div id="clockdiv">
                <div >
                    <span class="days clock_span"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours clock_span"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes clock_span"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds clock_span"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
            <!--
               <span class="grow">Y</span>
               <span class="grow">A</span>
               <span class="grow">N</span>
               <span class="grow">T</span>
               <span class="grow">R</span>
               <span class="grow">A</span>
               <span class="grow">G</span>
               <span class="grow">E</span>
               <span class="grow">N</span>
               <span class="grow">E</span> -->
            <div id="sponsers">
                <marquee>
			<span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/cisco.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/sam.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/cisco.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/sam.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/ps.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/cisco.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/sam.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/cisco.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/sam.png"/>
			</span>
                    <span>
			<img src="http://localhost/yantragene/public/yantraPublic/img/ps.png"/>
			</span>
                </marquee>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="box w3-center">
            <h1>ABOUT US</h1>
            <br><br>
            <p>
                YANTRAGENE is the annual technical festival of FEROZE GANDHI INSTITUTE OF ENGINEERING AND TECHNOLOGY, RAEBARELI. Yantragene was started in the year 2k16.To strengthen the spirit and to further reinforce the role of young minds it has come up with enriching experience of innovation, competition and learning .
                Yantragene’17 is scheduled for the month of  march.
                Yantragene is entirely managed by students of  FGIET. Yantragene is true believer of united we stand divided we fall.
                The word ‘Yantragene’ is originated from the Sanskrit word Yantra and English word gene.
                Yantragene comprises of twenty one events of various branch.
            </p>
            <div class="hidden-xs">
                <div class="counterLabel"><span class="" style="display: inline-block; width: 32%">Event</span>
                    <span>Teams Participated</span>
                    <span>Prize Money</span>
                </div>
                <div id ="counter">
                    <span class="count">200</span>
                    <span class="count">1000</span>
                    <span class="count">1000</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section fp-auto-height-responsive">
        <div class="eventsList">
            <div class="slide w3-center" data-anchor="cse">
                <h1>Computer Science Events</h1>
                <section class="grid3d vertical" id="grid3d">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="1" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/texplore.jpg" alt="Can't Load texplore Image"/></figure>
                            <figure><img id="2" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/algosense.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="3" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/algoJ.png" alt="Can't Load Image"/></figure>
                            <figure><img id="4" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/dijicanva.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="5" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/appmania.png" alt="Can't Load Image"/></figure>
                            <figure><img id="6" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/webbit.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="7" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/approid.png" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc">
                                        <h2>Event Details</h2>
                                        <p class="white-space-pre-line">{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc2" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules2" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators2" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register2" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc2">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules2">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators2">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register2">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php') ;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc3" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules3" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators3" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register3" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc3">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules3">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators3">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register3">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc4" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules4" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators4" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register4" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc4">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules4">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators4">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register4">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc5" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules5" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators5" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register5" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc5">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules5">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators5">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register5">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc6" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules6" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators6" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register6" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des6">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules6">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators6">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register6">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc7" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules7" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators7" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register7" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc7">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules7">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators7">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register7">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="loading"></span>
                        <span id="close" class="icon close-content"  ></span>
                    </div>
                </section>
            </div>
            <div class="slide w3-center" data-anchor="ec">
                <h1>ElectroArena</h1>
                <section class="grid3d vertical"  id="grid3d1">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="8" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/zumowar.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="9" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/roboballoonfight.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="10" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/robosoccer.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="11" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/roborace.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="12" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/dctronix.jpg" alt="Can't Load Image"/></figure>
                            <figure><img id="13" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/embeddeduino.jpg" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc8" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules8" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators8" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register8" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc8">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                        <h2>Reference to learn</h2><h4>Click on thumbnail to view video</h4>
                                        <br>
                                        <div ng-repeat="video in event.videos" class="col-md-4"><a href="https://www.youtube.com/watch?v={{video}}" target="_blank"><img src ="https://img.youtube.com/vi/{{video}}/mqdefault.jpg" width="300" height="200" ></a></div>
                                    </div>
                                    <div class="tab-pane" id="rules8">
                                        <h2>RULES AND REGULATION</h2>
                                        <div class="rules">
                                            <ul style="list-style-type:square">
                                                <li ng-repeat="rule in event.rules">{{rule}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cordinators8">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register8">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc9" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules9" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators9" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register9" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc9">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                        <h2>  Reference to learn</h2><h4>Click on thumbnail to view video</h4>
                                        <br>
                                        <div ng-repeat="video in event.videos" class="col-md-4"><a href="https://www.youtube.com/watch?v={{video}}" target="_blank"><img src ="https://img.youtube.com/vi/{{video}}/mqdefault.jpg" width="300" height="200" ></a></div>
                                    </div>
                                    <div class="tab-pane" id="rules9">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators9">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register9">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc10" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules10" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators10" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register10" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc10">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                        <h2>Reference to learn</h2><h4>Click on thumbnail to view video</h4>
                                        <br>
                                        <div ng-repeat="video in event.videos" class="col-md-4"><a href="https://www.youtube.com/watch?v={{video}}" target="_blank"><img src ="https://img.youtube.com/vi/{{video}}/mqdefault.jpg" width="300" height="200" ></a></div>

                                    </div>
                                    <div class="tab-pane" id="rules10">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators10">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register10">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc11" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules11" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators11" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register11" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc11">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                        <h2>Reference to learn</h2><h4>Click on thumbnail to view video</h4>
                                        <br>
                                        <div ng-repeat="video in event.videos" class="col-md-4"><a href="https://www.youtube.com/watch?v={{video}}" target="_blank"><img src ="https://img.youtube.com/vi/{{video}}/mqdefault.jpg" width="300" height="200" ></a></div>

                                    </div>
                                    <div class="tab-pane" id="rules11">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators11">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register11">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc12" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules12" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators12" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register12" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc12">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules12">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators12">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register12">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc13" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules13" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators13" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register13" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc13">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules13">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators13">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register13">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="loading"></span>
                        <span id="close" class="icon close-content"  ></span>
                    </div>
                </section>
            </div>
            <div class="slide w3-center" data-anchor="me">
                <h1>Mechanical Events</h1>
                <section class="grid3d vertical" id="grid3d2">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="14" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="15" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="16" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="17" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc15" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules15" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators15" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register15" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc15">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules15">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators15">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register15">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc15" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules15" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators15" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register15" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des15">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules15">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators15">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register15">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc16" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules16" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators16" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register16" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des16">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules16">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators16">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register16">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc17" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules17" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators17" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register17" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des17">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules17">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators17">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register17">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="loading"></span>
                        <span id="close"    class="icon close-content"></span>
                    </div>
                </section>
            </div>
            <div class="slide w3-center" data-anchor="ae">
                <h1>Aerospace Events</h1>
                <section class="grid3d vertical" id="grid3d3">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="18" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="19" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc18" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules18" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators18" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register18" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc18">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules18">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators18">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register18">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc19" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules19" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators19" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register19" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des19">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules19">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators19">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register19">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc15" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules15" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators15" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register15" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="desc15">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules15">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators15">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register15">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 fullHeight">
                                    <nav class="nav-sidebar">
                                        <ul class="nav tabs">
                                            <li class="active"><a href="#desc15" data-toggle="tab">Event Description</a></li>
                                            <li class=""><a href="#rules15" data-toggle="tab">Rules And Regulatons</a></li>
                                            <li class=""><a href="#cordinators15" data-toggle="tab">Cordinators</a></li>
                                            <li class=""><a href="#register15" data-toggle="tab">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content col-lg-9 col-md-4 ">
                                    <h1>{{event.name}}</h1>
                                    <div class="tab-pane active" id="des15">
                                        <h2>Event Details</h2>
                                        <p>{{event.desc}}</p>
                                        <h2>Judging Criteria</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="c in event.judgingCriteria">{{c}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="rules15">
                                        <h2>RULES AND REGULATION</h2>
                                        <ul style="list-style-type:square">
                                            <li ng-repeat="rule in event.rules">{{rule}}</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="cordinators15">
                                        <h2>CORDINATORS</h2>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-repeat="cordinator in event.cordinators">
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="http://localhost/yantragene/public/yantraPublic/img/{{cordinator.imageName}}" width="350px" height="200px" alt="Unable to load Images">
                                                <div class="overlay">
                                                    <h2>{{cordinator.name}}<br>-{{cordinator.class}}<br>{{cordinator.contactNo}}</h2>
                                                    <a class="info" href="{{cordinator.fbLink}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a class="info" href="{{cordinator.gpLink}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="register15">
                                        <h2>Registeration Form</h2>
                                        <?php include('form.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="loading"></span>
                        <span id="close"    class="icon close-content"></span>
                    </div>
                </section>
            </div>
            <div class="slide w3-center" data-anchor="ot">
                <h1>Other Events</h1>
                <section class="grid3d vertical" id="grid3d4">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="19" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="20" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="21" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="22" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="23" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="24" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <span class="loading"></span>
                        <span id="close"    class="icon close-content"></span>
                    </div>
                </section>
            </div>
            <div class="slide w3-center" data-anchor="ot">
                <h1>Other Events</h1>
                <section class="grid3d vertical" id="grid3d5">
                    <div class="grid-wrap">
                        <div class="grid">
                            <figure><img id="25" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="26" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="27" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                            <figure><img id="28" ng-click="ShowId($event)" src="http://localhost/yantragene/public/yantraPublic/img/counterstrike.png" alt="Can't Load Image"/></figure>
                        </div>
                    </div>
                    <!-- /grid-wrap -->
                    <div class="content">
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <div>
                            <h1>hello</h1>
                        </div>
                        <span class="loading"></span>
                        <span id="close"    class="icon close-content"></span>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="eventsList1 hidden-xs">
            <section class="cd-horizontal-timeline box1 w3-center">
                <div class="timeline">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li><a href="#0" data-date="1/03/2017" class="selected">01 Mar 9:00AM - 12:00AM</a></li>
                                <li><a href="#0" data-date="20/03/2017">01 Mar 01:00PM - 04:00PM</a></li>
                                <li><a href="#0" data-date="15/05/2017">02 Mar 09:00AM - 12:00AM</a></li>
                                <li><a href="#0" data-date="21/06/2017">02 Mar 01:00PM - 04:00PM</a></li>
                                <li><a href="#0" data-date="11/08/2017">02 Mar 01:00PM - 04:00PM</a></li>
                            </ol>
                            <span class="filling-line" aria-hidden="true"></span>
                        </div>
                        <!-- .events -->
                    </div>
                    <!-- .events-wrapper -->
                    <ul class="cd-timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next1">Next</a></li>
                    </ul>
                    <!-- .cd-timeline-navigation -->
                </div>
                <!-- .timeline -->
                <div class="events-content">
                    <ol>
                        <li class="selected" data-date="1/03/2017">
                            <em>March 1st, 2017 </em>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                        </li>
                        <li data-date="20/03/2017">
                            <em>March 1st, 2017 </em>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                        </li>
                        <li data-date="15/05/2017">
                            <em>March 1st, 2017 </em>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                        </li>
                        <li data-date="21/06/2017">
                            <em>March 1st, 2017 </em>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                        </li>
                        <li data-date="11/08/2017">
                            <em>March 1st, 2017 </em>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                            <div class="col-md-4">
                                <h4>Algosense(codigo)</h4>
                                <hr>
                                9:00AM - 12:00AM<br>At computer lab Ground Floor
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- .events-content -->
            </section>
        </div>
    </div>
    <div class="section">
        <div class="box w3-center">
            <h1>Reach US</h1>
            <br><br>
            <div class="col-md-4 col-lg-6">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.483938511944!2d81.23762281891746!3d26.245952715681593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d9caabf0668fa7f!2sFeroze+Gandhi+Institute+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1586283979280" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-lg-6 hidden-xs" style="text-align:left">
                <h3>Call us on : 9876543210</h3>
                <h3>Mail us at : care@yantragene.com</h3>
                <h3>Our college website is : <a href="#">fgiet.ac.in</a></h3>
                <h3>Feroze Gandhi Institute Of Technology<br> Lucknow Road, Near Ratapur Chauraha <br> Ratapur, Raebareli<br> Uttar Pradesh 229316, India</h3>
            </div>
            <div class="col-md-4 col-lg-12">
                <h4>Send us your feedback</h4>
                <hr class="hidden-lg">
                <form id="theForm" class="simform" autocomplete="off">
                    <div class="simform-inner">
                        <ol class="questions">
                            <li>
                                <span><label for="q1" style="font-size:20px">What's your Name</label></span>
                                <input id="name" name="name" type="text"/>
                            </li>
                            <li>
                                <span><label for="q2" style="font-size:20px">Whats your Email?</label></span>
                                <input id="email" name="email" type="email"/>
                            </li>
                            <li>
                                <span><label for="msz" style="font-size:20px">What do you have to say?</label></span>
                                <input id="msz" name="msz" type="text"/>
                            </li>
                        </ol>
                        <!-- /questions -->
                        <button class="submit" type="submit">Send</button>
                        <div class="controls">
                            <button class="next"></button>
                            <div class="progress"></div>
                            <span class="number">
                           <span class="number-current"></span>
                           <span class="number-total"></span>
                           </span>
                            <span class="error-message"></span>
                        </div>
                        <!-- / controls -->
                    </div>
                    <!-- /simform-inner -->
                    <span class="final-message"></span>
                </form>
                <!-- /simform -->
            </div>
        </div>
    </div>
</div>
<script src="http://localhost/yantragene/public/yantraPublic/js/modernizr.custom.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/classie.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/stepsForm.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/jquery.contact-buttons.js"></script>
<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "linear", "swing" or "easeInOutCubic". -->
<script src="http://localhost/yantragene/public/yantraPublic/js/jquery.easings.min.js"></script>
<!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
<script type="text/javascript" src="http://localhost/yantragene/public/yantraPublic/js/scrolloverflow.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.fullpage/2.9.2/jquery.fullpage.min.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/helper.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/grid3d.js"></script>
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/jquery.mobile.custom.min.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/main2.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/aj/yantrageneWebApp.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/aj/yantrageneWebAppController.js"></script>

<script src="http://localhost/yantragene/public/yantraPublic/js/socialShare.js"></script>
<script src="http://localhost/yantragene/public/yantraPublic/js/notyf.min.js">
<script>
var theForm = document.getElementById( 'theForm' );

new stepsForm( theForm, {
    onSubmit : function( form ) {
        // hide form
        classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

        /*
         form.submit()
         or
         AJAX request (maybe show loading indicator while we don't have an answer..)
         */

        // let's just simulate something...
        var messageEl = theForm.querySelector( '.final-message' );
        messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
        classie.addClass( messageEl, 'show' );
    }
} );
</script>
<script>
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors: ['home', 'aboutus', 'events', 'schedule', 'contactus'],
            menu: '.myMenu',
            css3:false,
            normalScrollElements:'.content',
        });
    });
</script>
<script>particlesJS("particles-js", {"particles":{"number":{"value":50,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update;  ;</script>
<script>
    new grid3D( document.getElementById( 'grid3d' ) );
    new grid3D( document.getElementById( 'grid3d1' ) );
    new grid3D( document.getElementById( 'grid3d2' ) );
    new grid3D( document.getElementById( 'grid3d3' ) );
    new grid3D( document.getElementById( 'grid3d4' ) );


</script>
<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(2017,02,09,09,00,00,0);
    initializeClock('clockdiv', deadline);
</script>
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
<script>
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('figure').on('click','img',function(){
            $(".fp-prev,.fp-next,.navbar-fixed-top").hide();
            $.fn.fullpage.setKeyboardScrolling(false);
            $.fn.fullpage.setAllowScrolling(false);
        });
        $('.close-content').click(function(){
            $(".fp-prev,.fp-next,.navbar-fixed-top").show();
            $.fn.fullpage.setKeyboardScrolling(true);
            $.fn.fullpage.setAllowScrolling(true);
        });
    });
</script>
<script>


    // --------------------ajax code ------------------------------------

    $(document).ready(function(){
        $(".abc").submit(function(){
            var form_id = $(this).closest("form").attr('id');
            form_id="#"+form_id;
            var fr=$(form_id);
            var con=fr.serialize();
            console.log(con);
            $.ajax({
                url:'http://localhost/yantragene/teamreg',
                datatype:'json',
                type:'get',
                data:con,
                success:function (data) {
                //    console.log(JSON.parse(data));
                    var result = JSON.parse(data);
                //    console.log(result.hasOwnProperty("error"));
                    var notify = new Notyf({
                        delay:3000,

                    });
                    if (result.hasOwnProperty('error')){
                        notify.alert(result.error);
                    }
                    if (result.hasOwnProperty('success')){
                        notify.confirm("User Sucessfully registered");
                    }

                    //alert(data);
                    //$(form_id).html(data);
                }
            });
        });
    });
    </script>
</body>
</html>