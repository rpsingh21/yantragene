<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>DASHBORD</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{url('public/css/sponsors.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script src="{{url('public/js/pace.js')}}"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="preloader"></div>
<div class="container">
    <section class="row breath planpricing">

        <div class="col-md-3">
           <a href="{{url('/admin/alluser')}}">
                <div class="pricing color1">
                <div class="planname">Registered User</div><hr>
                <div class="price"><span class="curr"></span>{{$reg}}</div>
                <div class="billing"></div>
                </div><! --/pricing -->
           </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="{{url('/admin/notVerify')}}">
                <div class="pricing color2">
                    <div class="planname">Not verify user</div><hr>
                    <div class="price"><span class="curr"></span>{{$nver}}</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="#">
                <div class="pricing color3">
                    <div class="planname">Total Event</div><hr>
                    <div class="price"><span class="curr"></span>{{$event}}</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="{{action('adminController@teamTable')}}">
                <div class="pricing color3">
                    <div class="planname">Total Team</div><hr>
                    <div class="price"><span class="curr"></span>{{$team}}</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->
    </section>

    <section class="row breath planpricing">
        <div class="col-md-3">
            <a href="{{url('/admin/createCo')}}">
                <div class="pricing color1">
                    <div class="planname">Create New Co</div><hr>
                    <div class="price"><span class="curr"></span>Event</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="#">
                <div class="pricing color2">
                    <div class="planname">Total Co-Leader</div><hr>
                    <div class="price"><span class="curr"></span>{{$co}}</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="#">
                <div class="pricing color3">
                    <div class="planname">Total Event</div><hr>
                    <div class="price"><span class="curr"></span>14</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->

        <div class="col-md-3">
            <a href="#">
                <div class="pricing color3">
                    <div class="planname">Total Team</div><hr>
                    <div class="price"><span class="curr"></span>14</div>
                    <div class="billing"></div>
                </div><! --/pricing -->
            </a>
        </div><! --/col-md-4-->
    </section><!-- /section planpricing -->
<a href="{{action('adminController@adminLogout')}}">logout {{session('admin')}}</a>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(function() {
        $('.scrollto, .gototop').bind('click',function(event){
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500,'easeInOutExpo');
            event.preventDefault();
        });
    });

</script>

</body>
</html>
