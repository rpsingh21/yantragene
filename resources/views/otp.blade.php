<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>OTP PORTAL</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{url('public/css/login.css')}}">
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<div class="form">

    <div class="tab-content active">
        <div id="login">
            <h1>Enter Your OTP !</h1>
            <form action="{{action('userAuth@otpVerify')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="field-wrap">
                    <label>
                        Enter Email varification code<span class="req">*</span>
                    </label>
                    <input name="otp" type="text" required autocomplete="off"/>
                </div>

                <button type="submit" class="button button-block"/>Confirm</button>

            </form>

        </div>
        <div id="signup">

        </div>
        <p style="color:green">!! YOUR OTP SEND ON YOUR EMAIL , CHECK YOUR EMAIL</p>
    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{url('public/js/login.js')}}"></script>

</body>
</html>
