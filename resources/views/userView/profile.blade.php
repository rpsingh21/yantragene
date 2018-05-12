<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YANTRAGENE|USER</title>
    <meta name="description" content="Fgiet techfest">
    <meta name="author" content="YANTRAGENE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <style>
        .logo{
            background:#314282;
            color:#fff;
            text-align:center;
            padding: 20px 10px 20px 10px;
            letter-spacing:5px;
        }
        .logo span{
            font-size:2em;
            font-weight:bold;
        }
        .user{
            background:#314282;
            color:#fff;
            text-align:center;
            padding: 20px 10px 20px 10px;
            letter-spacing:5px;
        }
        .user span{
            font-size:1em;
            font-weight:bold;
        }
        .userimg{
            width: 100px;
            height: 100px;
            border-radius:50%;
        }
        .box{
            margin-top:10%;
            width:100%;
            height:100%;
        }
        @media(min-width:650px){
            .box{
                padding:20px;
                background:#fff;
            }
        }
    </style>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">YA&#928;T&#915AG&#931;&#928;&#931;</span>
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="{{url('/')}}">HOME</a>
                <a class="mdl-navigation__link" href="{{url('/logout')}}">LOGOUT</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <div class="logo">
            <span class="mdl-layout-title">YA&#928;T&#915AG&#931;&#928;&#931;</span>
        </div>
        <div class="user">
            <div>
                <img src="{{url('/yantraPublic/img')}}/cordinator.png" class="userimg" alt="image not found"/>
            </div>
            <br>
            <span>Hello {{$userName}}</span><br>
            <span>Email: {{$userEmail}}</span>
        </div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{url('/')}}">Home</a>
            <!--					<a class="mdl-navigation__link" href="#/">All Events</a>
                <a class="mdl-navigation__link" href="#/schedule">Schedule</a>
                <a class="mdl-navigation__link" href="#">Log in / Register</a> -->
           <a class="mdl-navigation__link is_active" href="#/myevents">My Events</a>
            <a class="mdl-navigation__link" href="#/changepass">Change Password</a>
            <a class="mdl-navigation__link" href="{{url('/logout')}}">Log out</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="mdl-grid">
            @foreach($data as $d)
                <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">{{$d->eventName}}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{$d->teamName}}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            View Team
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115331050-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115331050-1');
</script>

</body>
</html>
