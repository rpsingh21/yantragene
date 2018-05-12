<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
  p{
    font-size:18px;
  }
  div{
    padding:5px;
  }

 </style>
</head>
<body>
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-sm-offset-2 col col-sm-8">
                <center>
                    <div class="col-md-auto">
                        <img height="60px" class="rounded mx-auto d-block" src="https://yantragene.co.in/images/minLogo.png" alt="yantragene"/>
                        <h3 class=>Welcome to Yantragene'18</h3>
                    </div>
                </center>
                <div class="border">
                  <p>
                    Dear candidate {{ $user->name }},
                  </p>
                  <p> &nbsp; &nbsp; &nbsp; &nbsp;congratulation! you are successfully complete your registration. now you are able to register any event. Event registration guideline, rule and Description are available on the event page.
                  </p>
                  <p style="font-color:yellow;">for any event registrations required for login. </p>
                </div>
              <center>
                <a href="https://yantragene.co.in/login" class="btn btn-lg btn-success">Yantragene login</a>
              </center>
            </div>
        </div>
    </div>
</body>
</html>
