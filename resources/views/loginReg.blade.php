<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{url('css/login.css')}}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>#particles-js {
            background-color:#222233;
            position:fixed;
            top:0;
            right:0;
            bottom:0;
            left:0;
            z-index:-1;
        }
        .form{
            background: rgba(25,25,25,0.5);
            color:#222233;
        }
    </style>
</head>

<body>
<div id="particles-js"></div>
<div class="form">
    @if(isset($smgs))
    <h3 style="color:green;">congratulation! you are successfully complete your registration</h3>
    @endif
    <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
    @if(isset($err))
        <div class="alert alert-warning alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
        </div>
    @endif
    <div class="tab-content">
        <div id="login">
            <h1>Welcome Back!</h1>
            <form action="{{action('userAuth@login')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" minlength="8" name="password" required autocomplete="off"/>
                </div>

                <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
                @if(isset($lmgs))
                    <h3 style="color:red">{{$lmgs}}</h3>
                @endif
                <button type="submit" class="button button-block"/>Log In</button>

            </form>

        </div>
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="{{action('userAuth@reg')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="field-wrap">
                    <label>
                        User Full Name<span class="req">*</span>
                    </label>
                    <input type="text" name="name" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set Your Password<span class="req">*</span>
                    </label>
                    <input name="password" minlength="8" type="password" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Re-Enter Your Password<span class="req">*</span>
                    </label>
                    <input name="repass" type="password"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        College Name <span class="req">*</span>
                    </label>
                    <input name="college" type="text"required autocomplete="off"/>
                </div>
                <input name="phone" type="hidden" minlength="10" maxlength="10" value="0000000000"required autocomplete="off"/>

                <!-- <div class="field-wrap">
                    <label>
                        Mobile No.<span class="req">*</span>
                    </label>
                    <input name="phone" type="text" minlength="10" maxlength="10" required autocomplete="off"/>
                </div> -->
                <div class="field-wrap">
                    <div class="g-recaptcha" data-sitekey="6Lf2NRQUAAAAAGqJjHxFGW9aa8hK_kFpetYsoZdc"></div>
                </div>
                <button type="submit" onclick="return validate()" class="button button-block"/>Continue</button>
            </form>

        </div>
    </div><!-- tab-content -->
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div> <!-- /form -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="{{url('js/login.js')}}"></script>
<script>
    particlesJS("particles-js", {"particles":{"number":{"value":160,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,"direction":"top","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>


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
